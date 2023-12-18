<?php

namespace App\Http\Controllers\installer;

use App\Http\Controllers\Controller;
use App\Models\{BookingRequest, CngKit, Installer, Booking};
use App\Http\Controllers\Mail\MailManageController;
use Illuminate\Http\Request;

class OtpManageController extends Controller
{
    //

    public static function otpSet($id, $otpFor){
        $otp = rand(100000, 999999);

        if($otpFor == "Booking"){
            Booking::whereId($id)->update([
                'verification_otp' => $otp,
           ]);
        }

        return $otp;
    }

    public function verify_page($booking_id){
        return view('installer.booking.otp.verify', compact('booking_id'));
    }

    public function otp_resend($booking_id){
           $otp = $this->otpSet($booking_id, 'Booking');
           $user = Booking::with('user')->where('id', $booking_id)->first();
           MailManageController::mailSend($user->user->email, 'Otp Resend', 'mail.otp_verify', $otp);
           return redirect('installer/otp/verify/'.$booking_id)->with('success', 'Otp Resend Successfully');
    }

    public function verify_action(Request $request){
            $request->validate([
                'otp' => 'required',
            ]);

            if(Booking::whereId($request->booking_id)->where('verification_otp', $request->otp)->exists()){
                 
                $booking = Booking::whereId($request->booking_id)->where('verification_otp', $request->otp)->first();
                
                Booking::whereId($request->booking_id)->where('verification_otp', $request->otp)->update([
                      'verification_otp' => null,
                      'status' => 'completed'
                ]);

                BookingRequest::where('booking_id', $request->booking_id)->where('request_send_to_installer', $booking->installer_id)->update([
                      'status' => 'completed'
                ]);

                $user = Booking::with('user', 'installer')->where('id', $request->booking_id)->first();
                MailManageController::mailSend($user->user->email, 'Booking Closed', 'mail.booking_close', '');
                MailManageController::mailSend($user->installer->email, 'Booking Closed', 'mail.booking_close', '');

                return redirect('installer/booking/list')->with('success', 'Booking completed');
            }else{
                return redirect()->back()->with('error', 'Wrong Otp Given');
            }
    }
}
