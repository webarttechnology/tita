<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleFeature extends Model
{
    use HasFactory;

    protected $table="vehicle_features";
    protected $fillable = [
        'vehicle_id',
        'feature'
    ];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
}
