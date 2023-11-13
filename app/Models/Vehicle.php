<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "vehicles";
    protected $fillable = [
        'name',
        'year_of_launch',
        'range',
        'power',
        'charging_time',
        'seating_capacity',
        'distance',
        'battery_capacity',
        'features',
        'vehicle_type',
    ];

    public function gallery(){
        return $this->hasMany(VehicleGallery::class);
    }
    
    public function color(){
        return $this->hasMany(VehicleColor::class);
    }
    
    public function feature(){
        return $this->hasMany(VehicleFeature::class);
    }
}
