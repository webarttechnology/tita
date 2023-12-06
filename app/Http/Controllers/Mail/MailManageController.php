<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailManageController extends Controller
{
    //

    public static function mailSend($to, $subject, $view, $details){
        Mail::send($view, ['detail' => $details], function($message) use ($to, $subject) {
            $message->to($to)->subject($subject);
        });

        return true;
    }
}
