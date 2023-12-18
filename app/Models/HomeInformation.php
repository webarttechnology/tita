<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'image',
        'icon',
        'sub_heading',
        'description',
    ];
}
