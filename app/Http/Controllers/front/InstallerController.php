<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Models\Installer;
use App\Http\Controllers\Controller;

class InstallerController extends Controller
{
    public function registration(Request $request)
    {
        //dd($request-> all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|numeric|min:12',
            'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*[^a-zA-Z0-9])[\S]+$/'],
        ], [
            'password.regex' => 'The password must be at least 8 characters long and include at least one uppercase letter and one special character.',
        ]);

        Installer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->number,
            'password' => bcrypt($request->password),
            'status' =>"active",
            'approvel_by_admin' => "unapproved",
        ]);

        return redirect()->back()->with('message', 'Your Data Saved Successfully!!!');
        
    }
}
