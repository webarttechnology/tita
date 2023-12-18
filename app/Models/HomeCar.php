<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'sub_heading',
        'small_heading',
        'image'
    ];
}
