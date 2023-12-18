<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['heading' ,'description', 'image' ,'we_are_heading', 'we_are_description', 'we_are_not_heading', 'we_are_not_description', 'what_we_do_heading', 'what_we_do_description'];

}
