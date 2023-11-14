<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstallerAvailableLocation extends Model
{
    use HasFactory;

    protected $table = "installer_available_locations";
    protected $fillable = [
        'installer_id',
        'installer_location_id',
        'zip'
    ];

    public function location(){
        return $this->belongsTo(InstallerLocation::class);
    }
}
