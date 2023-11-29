<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CngKit extends Model
{
    use HasFactory;

    protected $table = "cng_kits";
    protected $fillable = [
        'title',
        'description',
        'image',
        'kit_type',
        'vehicle_name',
        'application',
        'vehicle_type',
        'brand',
        'slug'
    ];
}
