<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    use HasFactory;

    protected $table = "booking_requests";
    protected $fillable = [
        'user_id',
        'date',
        'time',
        'zip',
        'request_send_to_installer',
        'status'
    ];
}
