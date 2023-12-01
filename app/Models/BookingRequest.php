<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "booking_requests";
    protected $fillable = [
        'user_id',
        'booking_id',
        'cng_kit_id',
        'cng_kit_amount',
        'date',
        'time',
        'zip',
        'request_send_to_installer',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cng()
    {
        return $this->belongsTo(CngKit::class, 'cng_kit_id', 'id');
    }
}
