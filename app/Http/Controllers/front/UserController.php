<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function userRegistration()
    {
        return view ('front.user-register');
    }

    public function userRegistrationStore(Request $request)
    {
        $request->validate(
        [
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users',
            'password' => ['required', 'string', 'min:8'],
            'number' => 'required|numeric|digits:10',
            'image' => 'required|image',
        ],
        [
            'password.regex' => 'The password must be at least 8 characters long and include at least one uppercase letter and one special character.',
            'number.digits' => 'Number should be at least 10 digits.',
        ]);

        $image = $request->image;
        $imagePath = 'images/User/'.time() . '_' . $image->getClientOriginalName();
        $image->move('images/User',$imagePath);  

        User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'phone_number' => $request->number,
        'image' =>  $imagePath,
        ]);

        return redirect()->back()->with('success', 'Data Successfully Registered!!!');
    }

    public function userLogin()
    {
        return view('front.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $cradentials = $request->only('email', 'password');
        if(Auth::guard('web')->attempt($cradentials))
        {
            return redirect()->intended('/')->with('info', 'You Have Successfully Loggged In!!');
        }
        return redirect()->intended('login')->with('warning', 'Invalid Details!!');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/')->with('warning', 'You Have Successfully Loggged Out!!');
    }

    public function userDetails()
    {
        $user = User::where('id', Auth::guard('web')->user()->id)->first();     
        return view('front.user-details', compact('user'));
    }

    public function update(Request $request,$id)
    {
        $data = User::findOrFail($id);

          if ($request->hasFile('image')) {

            $image = $request->image;
            $imagePath = 'images/User/'.time() . '_' . $image->getClientOriginalName();
            $image->move('images/User',$imagePath); 
                     
            $data->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone_number' => $request->number,
                'image' =>  $imagePath,
            ]);
            } else {
                $data->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'phone_number' => $request->number,
                ]);
            }
            return redirect()->route('user_Details')->with('success', 'Data Updated Successfully!!!');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = User::where('id', Auth::guard('web')->user()->id)->first(); 

        if (Hash::check($request->old_password, $user->password)) 
        {
            $user->update([
                'password' => bcrypt($request->new_password),
            ]);
    
            return redirect()->route('user_Details')->with('success', 'Password successfully changed!');
        } else {
            return redirect()->route('user_Details')->with('error', 'Old Password is not correct!');
        }
    }
}
