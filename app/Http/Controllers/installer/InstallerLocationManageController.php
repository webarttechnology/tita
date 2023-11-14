<?php

namespace App\Http\Controllers\installer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{InstallerLocation};

class InstallerLocationManageController extends Controller
{
    //

    public function location(){
        return view('installer.location.index');
    }

    public function location_save(Request $request, $type){
            $request->validate([
                'address_line_1' => 'required',
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
                'zip' => 'required',
            ]);

            dd($request->all());
    }
}
