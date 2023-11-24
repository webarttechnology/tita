<?php

namespace App\Http\Controllers\admin;

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

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

     public function export()
     {
          $data = [
               ['#','Company Name', 'Contact Name', 'Phone Number', 'Email', 'Address', 'Vehicle Type', 'Make', 'Model', 'Year', 'Stree No', 'Block', 'Street Name', 'City', 'State', 'Addition Details', 'Date'],
          ];

          $quotes = Quote::get();

          $i = 1;
          foreach ($quotes as $quote) {
               $data[] = [
                   $i,
                   $quote->company_name,
                   $quote->contact_name,
                   $quote->phone_number,
                   $quote->email,
                   $quote->address,
                   $quote->vehical_type,
                   $quote->make,
                   $quote->model,
                   $quote->year,
                   $quote->company_street_no,
                   $quote->company_block,
                   $quote->company_street_name,
                   $quote->company_city,
                   $quote->company_state,
                   $quote->additional_details,
                   $quote->created_at,
               ];
               $i++;
           }
          
           $headers = [
               'Content-Type' => 'text/csv',
               'Content-Disposition' => 'attachment; filename="quotes.csv"',
           ];

           $callback = function () use ($data) {
               $file = fopen('php://output', 'w');
       
               foreach ($data as $row) {
                   fputcsv($file, $row);
               }
       
               fclose($file);
           };

           return Response::stream($callback, 200, $headers);
     }

     
}
