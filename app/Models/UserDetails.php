<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $table = "user_details";
    protected $fillable = [
        'user_id',
        'address',
        'driver_id',
        'proof_of_vehicle',
        'vehicle_type',
        'vehicle_year',
        'vehicle_make',
        'vehicle_model',
        'engine_power',
        'engine_capacity',
        'injection_type',
        'vin_number',
    ];
}
