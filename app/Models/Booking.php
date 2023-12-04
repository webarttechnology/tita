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
