<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = ['name' ,'installer_id', 'message'];

    public function installer()
    {
        return $this->belongsTo(Installer::class);
    }
}
