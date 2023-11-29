<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\{CngKit, CngKitProductDetails, VehicleType};
use Illuminate\Http\Request;

class CngKitManageController extends Controller
{
    //

    public function listing(){
        $kits = CngKit::with('kits')->orderBy('id', 'desc')->get();
        return view('admin.cng.list', compact('kits'));
    }

    public function add(){
        $vehicleType = VehicleType::orderBy('id', 'desc')->get();
        return view('admin.cng.add', compact('vehicleType'));
    }
}
