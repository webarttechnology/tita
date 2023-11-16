<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\admin\ImageUploadHelpController;

class AdminUserController extends Controller
{
    public function index()
    {
        $data = User::get();

        return view ('admin.User.show',  compact('data'));
    }

    public function add()
    {
        return view ('admin.User.add');
    }

    public function store(Request $request)
    {   
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|unique:users',
                'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*[^a-zA-Z0-9])[\S]+$/', 'confirmed'],
                'number' => 'required|numeric|digits:10',
                'image' => 'required|image',
            ],
            [
                'password.regex' => 'The password must be at least 8 characters long and include at least one uppercase letter and one special character.',
                'number.digits' => 'Number should be at least 10 digits.',
            ]);
    
            $imagePath = ImageUploadHelpController::moveImage("add", $request->file('image'), "user");
    
            User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password_confirmation),
            'phone_number' => $request->number,
            'image' =>  $imagePath,
            ]);

        return redirect()->route('admin.user')->with('message', 'Data Added Successfully!!!');
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view ('admin.User.update', compact('data'));
    }


    public function update(Request $request,$id)
    {
        $data = User::findOrFail($id);

          if ($request->hasFile('image')) {

            $imagePath = ImageUploadHelpController::moveImage("edit", $request->file('image'), "blog", $data->image);
    
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
            return redirect()->route('admin.user')->with('message', 'Data Updated Successfully!!!');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('admin.blog')->with('message','Data Deleted Successfully!!!');
    }
}
