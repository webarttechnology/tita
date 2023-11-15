<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstallerBank extends Model
{
    use HasFactory;

    protected $fillable = [
        'installer_id',
        'card_holder_name',
        'card_number',
        'cvv',
        'expiry_month',
        'expiry_year',
    ];
}
