<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{CngKit};

class CngController extends Controller
{
    //

    public function products()
    {
        $kits = CngKit::with('product')->orderBy('id', 'desc')->paginate(15);
        return view('front.cng.list', compact('kits'));
    }
    
    public function cng_details($slug){
        $detail = CngKit::with('product')->where('slug', $slug)->first();
        $similarProducts = CngKit::with('product')->where('vehicle_type', $detail->vehicle_type)
        ->where('id', '!=', $detail->id)->orderBy('id', 'desc')->limit(3)->get();
        return view('front.cng.details', compact('detail', 'similarProducts'));
    }
}
