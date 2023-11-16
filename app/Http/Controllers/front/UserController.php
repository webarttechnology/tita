<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\admin\ImageUploadHelpController;

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
            'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*[^a-zA-Z0-9])[\S]+$/'],
            'number' => 'required|numeric|digits:10',
            'image' => 'required|image',
        ],
        [
            'password.regex' => 'The password must be at least 8 characters long and include at least one uppercase letter and one special character.',
            'number.digits' => 'Number should be at least 12 digits.',
        ]);

        $imagePath = ImageUploadHelpController::moveImage("add", $request->file('image'), "user");

        User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'phone_number' => $request->number,
        'image' =>  $imagePath,
        ]);

        return redirect()->back()->with('message', 'Your Data Saved Successfully!!!');
    }
}
