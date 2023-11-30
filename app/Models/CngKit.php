<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CngKit extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "cng_kits";
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'kit_type',
        'vehicle_name',
        'application',
        'vehicle_type',
        'brand',
        'slug'
    ];

    public function product()
    {
        return $this->hasMany(CngKitProductDetails::class, 'cng_kits_id', 'id');
    }

    /**
     * To delete all related products from CngKitProductDetails when 
     * CngKit::find($id)->delete(); 
     * is called 
    */

    protected static function boot()
    {
        parent::boot();

        // Attach a listener to the deleting event
        static::deleting(function ($cngKit) {
            // Delete all related products when a CngKit is deleted
            $cngKit->product()->delete();
        });
    }
}
