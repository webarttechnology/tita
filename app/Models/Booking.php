<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "bookings";
    protected $fillable = [
        'user_id',
        'cng_kit_id',
        'installer_id',
        'unique_payment_id',
        'date',
        'time',
        'zip',
        'txn_id',
        'transaction_details',
        'verification_otp',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function installer()
    {
        return $this->belongsTo(Installer::class);
    }

    public function cng()
    {
        return $this->belongsTo(CngKit::class, 'cng_kit_id', 'id');
    }
}
