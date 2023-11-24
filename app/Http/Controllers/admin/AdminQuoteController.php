<?php

namespace App\Http\Controllers\admin;

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminQuoteController extends Controller
{
     public function show()
     {
          $data = Quote::get();
          return view('admin.Quotes.show' , compact('data'));
     }

     public function quote_details($id)
     {
          return Quote::where('id', $id)->first();
     }

     
}
