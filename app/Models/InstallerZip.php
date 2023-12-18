<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstallerZip extends Model
{
    use HasFactory;
    protected $fillable = [
        'installer_id',
        'zip',
    ];

    function installer()
    {
        return $this->belongsTo(Installer::class);
    }
}
