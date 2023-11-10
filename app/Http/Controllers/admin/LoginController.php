<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('admin.sign-in');
    }

    public function registerPage()
    {
        return view('admin.sign-up');
    }
}
