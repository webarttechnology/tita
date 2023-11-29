<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CngKitProductDetails extends Model
{
    use HasFactory;

    protected $table = "cng_kit_product_details";
    protected $fillable = [
        'cng_kits_id',
        'features'
    ];

    public function kits()
    {
        return $this->belongsTo(CngKit::class);
    }
}
