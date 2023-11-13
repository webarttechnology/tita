<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleColor extends Model
{
    use HasFactory;

    protected $table="vehicle_colors";
    protected $fillable = [
        'vehicle_id',
        'color'
    ];

    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
}
