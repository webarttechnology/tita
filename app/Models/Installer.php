<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installer extends Model
{
    use HasFactory;

    protected $fillable = ['name' ,'email', 'phone_number', 'password','status', 'approvel_by_admin'];

    function reports() 
    {
        return $this->hasMany(Report::class);
    }
    
}
