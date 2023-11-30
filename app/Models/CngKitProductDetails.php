<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CngKitProductDetails extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "cng_kit_product_details";
    protected $fillable = [
        'cng_kits_id',
        'features'
    ];
}
