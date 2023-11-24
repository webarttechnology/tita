<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{TestQuestion};

class TestManageController extends Controller
{
    //

    public function list(){
           $tests = TestQuestion::orderBy('id', 'desc')->get();
           return view('admin.test.list', compact('tests'));
    }

    // public function add(){
           
    // }
}
