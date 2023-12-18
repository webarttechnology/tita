<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = "reports";

    protected $fillable = [
        'installer_id' ,
        'inspector_id',
        'workshop_type',
        'workshop_size',
        'risk_management',
        'front_image',
        'application_conformation',
        'work_area',
        'wideshot_street',
    ];

    public function installer()
    {
        return $this->belongsTo(Installer::class);
    }
}
