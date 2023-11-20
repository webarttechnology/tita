<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installer_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'installer_id',
        'national_identification_no',
        'residental_address',
        'ocupation',
        'passport_photo',
        'national_id_card',
        'drivers_license',
        'company_name',
        'cac_registration',
    ];

    public function installer()
    {
        return $this->belongsTo(Installer::class);
    }
}
