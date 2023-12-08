<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Installer extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $table = "installers";
    protected $fillable = ['inst_code', 'name', 'email', 'phone_number', 'password', 'profile_img', 'status', 'exam_link_id', 'approvel_by_admin'];

    function reports()
    {
        return $this->hasMany(Report::class);
    }

    function info()
    {
        return $this->hasMany(Installer_info::class);
    }

    function location()
    {
        return $this->hasMany(InstallerLocation::class);
    }
}
