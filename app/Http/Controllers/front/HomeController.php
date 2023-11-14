<?php

namespace App\Http\Controllers\front;

use App\Models\PDF;
use App\Models\Blog;
use App\Models\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Vehicle};

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function video()
    {
        $videos = Video::get();
        return view('front.video', compact('videos'));
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
        $vehicles = Vehicle::with('gallery')->orderBy('id', 'desc')->paginate(12);
        return view('front.evlisting', compact('vehicles'));
    }

    public function pdfDownload()
    {
        $pdfs = PDF::get();
        return view('front.pdf-download', compact('pdfs'));
    }

    public function blog()
    {
        $blogs = Blog::get();
        return view('front.blog', compact('blogs'));
    }

    public function registration()
    {
        return view('front.registration');
    }

    public function singleBlog($slug)
    {
        $singleBlog = Blog::where('slug', $slug)->firstOrFail();
       
        return view('front.blogdetails', compact('singleBlog'));
    }

}
