<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function video()
    {
        return view('front.video');
    }

    public function booking()
    {
        return view('front.booking');
    }

    public function aboutUs()
    {
        return view('front.about-us');
    }

    public function evlisting()
    {
        return view('front.evlisting');
    }

    public function pdfDownload()
    {
        return view('front.pdf-download');
    }

    public function blog()
    {
        return view('front.blog');
    }

}
