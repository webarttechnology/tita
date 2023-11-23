<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstallerLocation extends Model
{
    use HasFactory;

    protected $table = "installer_locations";
    protected $fillable = [
        'installer_id',
        'street_no',
        'plot',
        'street_name',
        'state',
        'city',
        'zip',
    ];

    public function installer()
    {
        return $this->belongsTo(Installer::class);
    }
}
