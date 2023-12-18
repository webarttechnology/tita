<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User, Booking, UserDetails};
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
            // 'image' => 'required|image',
        ],
        [
            'password.regex' => 'The password must be at least 8 characters long and include at least one uppercase letter and one special character.',
            'number.digits' => 'Number should be at least 10 digits.',
        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $imagePath = 'images/User/'.time() . '_' . $image->getClientOriginalName();
            $image->move('images/User',$imagePath);  
        }else{
            $imagePath = "";
        }

        $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'phone_number' => $request->number,
        'image' =>  $imagePath,
        ]);

        if($request->hasFile('proof_of_vehicle')){
            $image = $request->proof_of_vehicle;
            $proof_of_vehicle = 'images/Vehicle/'.time() . '_' . $image->getClientOriginalName();
            $image->move('images/Vehicle', $proof_of_vehicle); 
        }else{
            $proof_of_vehicle = null;
        }

        UserDetails::create([
            'user_id' => $user->id,
            'address' => $request->address,
            'driver_id' => $request->driver_id,
            'proof_of_vehicle' => $proof_of_vehicle,
            'vehicle_type' => $request->vehicle_type,
            'vehicle_year' => $request->vehicle_year,
            'vehicle_make' => $request->vehicle_make,
            'vehicle_model' => $request->vehicle_model,
            'engine_power' => $request->engine_power,
            'engine_capacity' => $request->engine_capacity,
            'injection_type' => $request->injection_type,
            'vin_number' => $request->vin_number,
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
            return redirect()->intended('/')->with('success', 'You Have Successfully Loggged In!!');
        }
        return redirect()->intended('login')->with('warning', 'Invalid Details!!');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/')->with('warning', 'You Have Successfully Loggged Out!!');
    }

    public function userDetails($page = null)
    {
        $user = User::where('id', Auth::guard('web')->user()->id)->first(); 
        $bookings = Booking::with('cng')->where('user_id', $user->id)->orderBy('id', 'desc')->paginate(6);

        return view('front.user-details', compact('user', 'bookings', 'page'));
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
