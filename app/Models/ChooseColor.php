<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChooseColor extends Model
{
    use HasFactory;

    protected $table="choose_colors";
    protected $fillable = [
        'color'
    ];
}
