<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleGallery extends Model
{
    use HasFactory;

    protected $table="vehicle_galleries";
    protected $fillable = [
        'vehicle_id',
        'img'
    ];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
}
