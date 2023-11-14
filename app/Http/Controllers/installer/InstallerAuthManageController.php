<?php

namespace App\Http\Controllers\installer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstallerAuthManageController extends Controller
{
    //

    public function login(){
        return view('installer/login');
    }

    public function login_action(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('installer')->attempt($credentials)) {
            // dd(Auth::guard('installer')->user()->id);
            return redirect('installer/dashboard')->with('success', 'Successfully Login');
        }else{
            return redirect('installer/login')->with('error', 'Sorry! You have entered wrong Credentials');
        }
    }

    public function dashboard(){
        return view('installer.dashboard');
    }

    // Logout 
    public function logout(){
        Auth::guard('installer')->logout();
        return redirect('installer/login')->with('success', 'Successfully Logout');
    }
}
