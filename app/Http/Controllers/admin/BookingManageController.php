<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\{BookingRequest, CngKit, Installer, Booking};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingManageController extends Controller
{
    //

    /**
     * Admin Section
    */

    public function admin_booking(){
        // $bookings = BookingRequest::with('user', 'cng')->where('status', 'in_progress')->orderBy('id', 'desc')->get();
        $bookings = Booking::with('user', 'cng')->orderBy('id', 'desc')->get();
        return view('admin.booking.index', compact('bookings'));
    }

    public function admin_booking_details($booking_id){
        $bookings = BookingRequest::with('user', 'cng')
                    ->where('booking_id', $booking_id)
                    ->orderBy('id', 'desc')->get();

        return view('admin.booking.details', compact('bookings'));
    }

    /**
     * Installer section 
    */

    public function installer_booking(){
        $bookings = BookingRequest::with('user', 'cng')->where('request_send_to_installer', Auth::guard('installer')->user()->id)
        ->orderBy('id', 'desc')->get();
        return view('installer.booking.index', compact('bookings'));
    }

    public function installer_booking_status($id, $status){
        BookingRequest::whereId($id)->update([
            'status' => $status,
        ]);

        return redirect()->back()->with('success', 'Done');
    }
}
