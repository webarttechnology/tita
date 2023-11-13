<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUploadHelpController extends Controller
{

    public static function moveImage($type, $img, $upload_for, $previous_img = "null"){
        if($type == "add"){
            $image = $img;
            $imageName = 'images/'.$upload_for.'/'.time().'_'. $image->getClientOriginalName();
            $image->move('images/'.$upload_for.'/',$imageName);

            return $imageName;
        }
        if($type == "delete"){
             unlink($img);
             return true;
        }
        if($type == "edit"){
             if($previous_img != "null"){
                unlink($previous_img);
             }

            $image = $img;
            $imageName = 'images/'.$upload_for.'/'.time().'_'. $image->getClientOriginalName();
            $image->move('images/'.$upload_for.'/',$imageName);

            return $imageName;
        }
    }
}