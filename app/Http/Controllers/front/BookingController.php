<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\{BookingRequest, InstallerZip, Installer, Booking};
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //

    public function booking($date='', $time='', $zip='', $id, $price){
        
           if(!Auth::user()){
                return redirect('login')->with('error', 'Please Login First');
           }
           else{
               if($date=='' && $time=='' && $zip==''){
                   return redirect()->back()->with('error', 'Date & Time Field is required');
               }
               else{
                    $installers = InstallerZip::with('installer')
                    ->where('zip', $zip)->orderBy('id', 'desc')->get();

                    if($installers->isEmpty()){
                        return redirect()->back()->with('error', 'Sorry! No Installer found for this zip');
                    }else{

                        $bookP = Booking::create([
                            'user_id' => Auth::user()->id,
                            'cng_kit_id' => $id,
                            'date' => $date,
                            'time' => $time,
                            'zip' => $zip,
                        ]);

                        foreach($installers as $key => $installer){
                            $booking = BookingRequest::create([
                                'user_id' => Auth::user()->id,
                                'booking_id' => $bookP->id,
                                'cng_kit_id' => $id,
                                'cng_kit_amount' => $price,
                                'date' => $date,
                                'time' => $time,
                                'zip' => $zip,
                                'request_send_to_installer' => $installer->installer_id,
                            ]);

                            $this->mailSend($installers[$key]->installer->email, 'Booking Order', 'mail.order_booking', $booking->id);
                        }

                        return redirect()->back()->with('success', 'Booking Request Send Successfully');
                    }
               }
           }
    }

    public function mailSend($to, $subject, $view, $details){
        Mail::send($view, ['detail' => $details], function($message) use ($to, $subject) {
            $message->to($to)->subject($subject);
        });
    }
}