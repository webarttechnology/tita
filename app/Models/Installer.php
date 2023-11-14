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
    protected $fillable = ['name' ,'email', 'phone_number', 'password', 'profile_img','status', 'approvel_by_admin'];
}
