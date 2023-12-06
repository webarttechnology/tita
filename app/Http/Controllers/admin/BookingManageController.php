<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\{BookingRequest, CngKit, Installer, Booking};
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\payment\StripePaymentController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Mail\MailManageController;
use App\Http\Controllers\installer\OtpManageController;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BookingManageController extends Controller
{

    /**
     * Admin Section
    */

    public function admin_booking(){
        // $bookings = BookingRequest::with('user', 'cng')->where('status', 'in_progress')->orderBy('id', 'desc')->get();
        $bookings = Booking::with('user', 'cng')->orderBy('id', 'desc')->get();
        return view('admin.booking.index', compact('bookings'));
    }

    public function admin_booking_details($booking_id){
        $bookings = BookingRequest::with('user', 'cng', 'installer', 'booking')
                    ->where('booking_id', $booking_id)
                    ->orderBy('id', 'desc')->get();
        $customerDetails = Booking::with('user')->where('id', $booking_id)->first();
        $cngDetails = Booking::with('cng')->where('id', $booking_id)->first();

        return view('admin.booking.details', compact('bookings', 'booking_id', 'customerDetails', 'cngDetails'));
    }

    /**
     * Admin can assign to a installer directly 
    */

    public function admin_installer_assign(Request $request){
           $request->validate([
               'installer' => 'required',
           ],[
               'installer.required' => 'Select A Installer'
           ]);

           /**
            * Update booking  
           */

           $uniquePayId = Str::random(30);
           Booking::whereId($request->booking_id)->update([
                'unique_payment_id' => $uniquePayId,
                'installer_id' => $request->installer,
           ]);

           /**
            * Accept the installer
           */

           BookingRequest::where('booking_id', $request->booking_id)
           ->where('request_send_to_installer', $request->installer)->update([
                  'status' => 'approved'
           ]);

           /**
            * Reject Other Installer's Request 
           */

           BookingRequest::where('booking_id', $request->booking_id)
           ->where('request_send_to_installer', '!=', $request->installer)->update([
                  'status' => 'rejected'
           ]);
                    
            $userEmail = BookingRequest::with('user')->where('booking_id', $request->booking_id)->first();
            MailManageController::mailSend($userEmail->user->email, 'Payment Link', 'mail.payment_link', $uniquePayId);

           return redirect()->back()->with('success', 'Successfully Assigned');
    }

    public function admin_booking_status_change(Request $request, $booking_id, $installer_id, $status){
           if($status == "approved"){
                   
                    /**
                    * Update booking  
                    */

                    $uniquePayId = Str::random(30);
                    
                    $userEmail = BookingRequest::with('user')->where('booking_id', $booking_id)->first();
                    MailManageController::mailSend($userEmail->user->email, 'Payment Link', 'mail.payment_link', $uniquePayId);

                    Booking::whereId($booking_id)->update([
                        'installer_id' => $installer_id,
                        'unique_payment_id' => $uniquePayId,
                    ]);

                     /**
                     * Update Stripe Payment Link to db for the installer to whom the 
                     * booking has been confirmed by the admin 
                    */

                    $cngDetails = BookingRequest::with('cng')->where('booking_id', $booking_id)
                    ->where('request_send_to_installer', $installer_id)->first();

                    /**
                    * Accept the installer
                    */

                    BookingRequest::where('booking_id', $booking_id)
                    ->where('request_send_to_installer', $installer_id)->update([
                            'status' => $status,
                    ]);

                    /**
                    * Reject Other Installer's Request 
                    */

                    BookingRequest::where('booking_id', $booking_id)
                    ->where('request_send_to_installer', '!=', $installer_id)->update([
                            'status' => 'rejected'
                    ]);
           }else{
                    /**
                    * Accept the installer
                    */

                    BookingRequest::where('booking_id', $booking_id)
                    ->where('request_send_to_installer', $installer_id)->update([
                            'status' => $status
                    ]);
           }

           return redirect()->back()->with('success', 'Successfully Assigned');
    }

    /**
     * Installer section 
    */

    public function installer_booking(){
        $bookings = BookingRequest::with('user', 'cng', 'booking')->where('request_send_to_installer', Auth::guard('installer')->user()->id)
        ->orderBy('id', 'desc')->get();
        return view('installer.booking.index', compact('bookings'));
    }

    public function installer_booking_status($id, $status){
        BookingRequest::whereId($id)->update([
            'status' => $status,
        ]);

        return redirect()->back()->with('success', 'Done');
    }
    
    public function installer_booking_finish($id){
           $user = BookingRequest::with('user')->where('id', $id)->first();
           $otp = OtpManageController::otpSet($user->booking_id, 'Booking');
           MailManageController::mailSend($user->user->email, 'Otp Verification', 'mail.otp_verify', $otp);
           return redirect('installer/otp/verify/'.$user->booking_id)->with('info', 'Please Verify the Otp provide to user for End the Booking');
    }
}