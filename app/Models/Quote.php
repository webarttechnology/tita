<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
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

    function reports()
    {
        return $this->hasMany(Report::class);
    }
}
