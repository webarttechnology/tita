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
}
