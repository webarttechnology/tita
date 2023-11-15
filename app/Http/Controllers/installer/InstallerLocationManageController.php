<?php

namespace App\Http\Controllers\installer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{InstallerLocation, InstallerAvailableLocation};

class InstallerLocationManageController extends Controller
{
    //

    public function location(){
        $location = InstallerLocation::with('availableLocation')
        ->where('installer_id', Auth::guard('installer')->user()->id)->first();
        return view('installer.location.index', compact('location'));
    }

    public function location_save(Request $request, $type){
            $request->validate([
                'address_line_1' => 'required',
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
                'zip' => 'required',
            ]);

            /**
             * save
            */

            if($type == "save"){
                $location = InstallerLocation::create([
                    'installer_id' => Auth::guard('installer')->user()->id,
                    'address_line_1' => $request->address_line_1,
                    'address_line_2' => $request->address_line_2,
                    'country' => $request->country,
                    'state' => $request->state,
                    'city' => $request->city,
                    'zip' => $request->zip,
                ]);

                foreach($request->available_zips as $available_zip){
                        if($available_zip != null){
                            InstallerAvailableLocation::create([
                                'installer_id' => Auth::guard('installer')->user()->id,
                                'location_id' => $location->id,
                                'zip' => $available_zip,
                            ]);
                        }
                }

            }

            /**
             * edit
            */

            else{
                $location_id = (InstallerLocation::where('installer_id', Auth::guard('installer')->user()->id)->first())->id;
                $location = InstallerLocation::where('installer_id', Auth::guard('installer')->user()->id)->update([
                    'address_line_1' => $request->address_line_1,
                    'address_line_2' => $request->address_line_2,
                    'country' => $request->country,
                    'state' => $request->state,
                    'city' => $request->city,
                    'zip' => $request->zip,
                ]);

                InstallerAvailableLocation::where('installer_id', Auth::guard('installer')->user()->id)->delete();

                if($request->available_zips != null){
                    foreach($request->available_zips as $available_zip){
                        if($available_zip != null){
                            InstallerAvailableLocation::create([
                                'installer_id' => Auth::guard('installer')->user()->id,
                                'location_id' => $location_id,
                                'zip' => $available_zip,
                            ]);
                        }
                    }
                }

                if($request->existing_zips != null){
                    foreach($request->existing_zips as $available_zip){
                        if($available_zip != null){
                            InstallerAvailableLocation::create([
                                'installer_id' => Auth::guard('installer')->user()->id,
                                'location_id' => $location_id,
                                'zip' => $available_zip,
                            ]);
                        }
                    }
                }
            }
            
            return redirect()->back()->with('success', 'Successfully Saved');
    }
}
