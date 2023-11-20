<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'installer_id' ,
        'company_name', 
        'contact_name',
        'phone_number',
        'email',
        'address',
        'vehical_type',
        'make',
        'model',
        'year',
        'company_street_no',
        'company_block',
        'company_street_name',
        'company_city',
        'company_state',
        'additional_details',
    ];

    public function installer()
    {
        return $this->belongsTo(Installer::class);
    }
}
