<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\{BookingRequest, InstallerZip, Installer};
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //

    public function booking($date='', $time='', $zip=''){
        
           if(!Auth::user()){
                return redirect('login')->with('error', 'Please Login First');
           }
           else{
               if($date=='' && $time=='' && $zip==''){
                   return redirect()->back()->with('error', 'Date & Time Field is required');
               }
               else{
                    $installers = InstallerZip::with('installer')->where('zip', $zip)->inRandomOrder()->limit(2)->get();
                    
                    if($installers->isEmpty()){
                        return redirect()->back()->with('error', 'Sorry! No Installer found for this zip');
                    }else{
                        foreach($installers as $installer){
                            BookingRequest::create([
                                'user_id' => Auth::user()->id,
                                'date' => $date,
                                'time' => $time,
                                'zip' => $zip,
                                'request_send_to_installer' => $installer->installer_id,
                            ]);

                            // $this->mailSend($installers->installer->email, 'Booking Order', 'mail.order_booking', []);
                        }

                        return redirect()->back()->with('success', 'Booking Request Send Successfully');
                    }
               }
           }
    }

    public function mailSend($to, $subject, $view, $details){
        Mail::send($view, [], function($message) use ($to, $subject) {
            $message->to($to)->subject($subject);
        });
    }

}
