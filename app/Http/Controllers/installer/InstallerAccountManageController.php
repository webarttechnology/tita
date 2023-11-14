<?php

namespace App\Http\Controllers\installer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\ImageUploadHelpController;
use Illuminate\Support\Facades\Hash;
use App\Models\{Installer};

class InstallerAccountManageController extends Controller
{
    //

    public function account(){
           return view('installer.account.index');
    }

    /**
     * profile edit
    */

    public function profile_edit(Request $request){
           $request->validate([
               'name' => 'required|max:200',
               'email' => 'required|email|max:200',
               'phone_number' => 'required|max:12',
           ]);

           /**
            * upload profile image 
           */

           if($request->hasFile('img')){
                $request->validate([
                    'img' => 'mimes:jpg,jpeg,png|max:4096',
                ]);

                if(Auth::guard('installer')->user()->profile_img != null){
                    $imgName = ImageUploadHelpController::moveImage("edit", $request->img, "installer", 'uploads/installer/'.Auth::guard('installer')->user()->profile_img);
                }else{
                    $imgName = ImageUploadHelpController::moveImage("edit", $request->img, "installer");
                }
           }else{
                $imgName = Auth::guard('installer')->user()->profile_img;
           }

           /**
            * Update existing fields
           */

           Installer::where('id', Auth::guard('installer')->user()->id)->update([
                  'name' => $request->name,
                  'email' => $request->email,
                  'phone_number' => $request->phone_number,
                  'profile_img' => $imgName,
           ]);

           return redirect('installer/my-account')->with('success', 'Profile Updated Successfully');
    }

    /**
     * password change
    */

    public function change_password(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        /**
         * check Old password
        */

        if(Hash::check($request->old_password, Auth::guard('installer')->user()->password)){
            Installer::where('id', Auth::guard('installer')->user()->id)->update([
                  'password' => bcrypt($request->new_password),
            ]);

            return redirect()->back()->with('success', 'Successfully Updated');
        }
        else{
            return redirect()->back()->with('error', 'Old Password Not Matched');
        }
    }
}
