<?php

namespace App\Http\Controllers\front;

use App\Models\PDF;
use App\Models\Blog;
use App\Models\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
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

    public function products()
    {
        return view('front.product');
    }

    public function evlisting()
    {
        $vehicles = Vehicle::with('gallery')->orderBy('id', 'desc')->paginate(12);
        return view('front.evlisting', compact('vehicles'));
    }
    
    public function evlisting_details($id){
          $vehicle = Vehicle::with('gallery', 'color', 'feature')->whereId($id)->first();
          return view('front.ev_details', compact('vehicle'));
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

    public function contactUs()
    {
        return view('front.contact');
    }

    public function emailSend(Request $request)
    {     
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|numeric|digits:10',
            'message' => 'required',
        ], [
            
        ]);

        $senderName = $request->name;
        $phoneNumber = $request->number;
        $senderEmail = $request->email;
        $senderMessage = $request->message;

        $email = new ContactEmail($senderName, $phoneNumber, $senderEmail, $senderMessage);
        Mail::to('teethi.dhar@webart.technology')->send($email);

        return redirect()->back()->with('message', 'Email Sent Successfully!!!');
    }

}
