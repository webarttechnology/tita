<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Admin};

class AuthManageController extends Controller
{
    //

    public function login(){
        return view('admin/sign_in');
    }

    public function login_action(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('admin')->attempt($credentials)) {
            // dd(Auth::guard('admin')->user()->id);
            return redirect('admin/dashboard');
        }else{
            return redirect('admin/login')->with('error', 'Sorry! You have entered wrong Credentials');
        }
    }

    public function dashboard(){
        return view('admin.index');
    }

    // Logout 
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login')->with('success', 'Successfully Logout');
    }
}
