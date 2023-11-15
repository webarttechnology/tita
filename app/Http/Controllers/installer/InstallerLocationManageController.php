<?php

namespace App\Http\Controllers\installer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{InstallerLocation, InstallerZip};

class InstallerLocationManageController extends Controller
{  

    public function location()
    {
        $location = InstallerLocation::where('installer_id', Auth::guard('installer')->user()->id)->first();     
        return view('installer.account.index', compact('location'));
    }

    public function location_save(Request $request, $type)
    {
        $request->validate([
            'address_line_1' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',
        ]);

        if ($type == "save") 
        {
             InstallerLocation::create([
                'installer_id' => Auth::guard('installer')->user()->id,
                'address_line_1' => $request->address_line_1,
                'address_line_2' => $request->address_line_2,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'zip' => $request->zip,
            ]);           
        }
        else 
        {
            $location_id = (InstallerLocation::where('installer_id', Auth::guard('installer')->user()->id)->first())->id;
            $location = InstallerLocation::where('installer_id', Auth::guard('installer')->user()->id)->update([
                'address_line_1' => $request->address_line_1,
                'address_line_2' => $request->address_line_2,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'zip' => $request->zip,
            ]);
        }

        return redirect()->back()->with('success', 'Successfully Saved');
    }

    public function zip_save(Request $request)
    {
        $zips = json_decode($request->zip, true);

        if (!is_array($zips)) {
            return redirect()->back()->with('error', 'Invalid zip data format');
        }

        $installerId = Auth::guard('installer')->user()->id;

        foreach ($zips as $zip) 
        {
            $zipValue =  $zip['value'] ;

            if (!is_null($zipValue)) {
                InstallerZip::create([
                    'zip' => $zipValue,
                    'installer_id' => $installerId,
                ]);
            }
        }
        return redirect()->back()->with('success', 'Successfully Saved');
    }
}
