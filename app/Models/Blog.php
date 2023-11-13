<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['category' ,'title', 'sub_description' ,'slug', 'image', 'description', 'meta_title', 'meta_description'];


    public function setNameAttribute($value)
    {
        $this->attributes['title'] = ucfirst($value);
    }
}
