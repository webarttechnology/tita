<?php

namespace App\Http\Controllers\installer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{InstallerLocation, InstallerZip, InstallerBank};

class InstallerLocationManageController extends Controller
{  

    public function location()
    {
        $location = InstallerLocation::where('installer_id', Auth::guard('installer')->user()->id)->first();   
        $bank_details = InstallerBank::where('installer_id', Auth::guard('installer')->user()->id)->first(); 
        $zips =   InstallerZip::where('installer_id', Auth::guard('installer')->user()->id)->get(); 
        $zip_string = ''; 
        
        foreach($zips as $zip)
        {
            $zip_string .= ", " . $zip->zip;
        }
        return view('installer.account.index', compact('location', 'zip_string', 'bank_details'));
    }

    public function location_save(Request $request, $type)
    {
        $request->validate([
            'street_no' => 'required|string',
            'plot' => 'required|string',
            'street_name' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|string|max:10',
        ]);

        if ($type == "save") 
        {
             InstallerLocation::create([
                'installer_id' => Auth::guard('installer')->user()->id,
                'street_no' => $request->street_no,
                'plot' => $request->plot,
                'street_name' => $request->street_name,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
            ]);           
        }
        else 
        {
            $location_id = (InstallerLocation::where('installer_id', Auth::guard('installer')->user()->id)->first())->id;
             InstallerLocation::where('installer_id', Auth::guard('installer')->user()->id)->update([
                'street_no' => $request->street_no,
                'plot' => $request->plot,
                'street_name' => $request->street_name,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
            ]);
        }

        return redirect()->back()->with('success', 'Successfully Saved');
    }

    public function zip_save(Request $request)
    {
        InstallerZip::where('installer_id', Auth::guard('installer')->user()->id)->delete(); 

        $zips = json_decode($request->zip, true);

        $installerId = Auth::guard('installer')->user()->id;
        
        if( !empty($zips) )
        {
            foreach ($zips as $zip) 
            {
                $zipValue =  $zip['value'] ;

                if (!is_null($zipValue)) 
                {                
                    InstallerZip::create([
                        'zip' => $zipValue,
                        'installer_id' => $installerId,
                    ]);
                }
            }
        }
        return redirect()->back()->with('success', 'Successfully Saved');
    }

    public function bank_save(Request $request, $type)
    {
        $request->validate([
            'card_holder_name' => 'required|string',
            'card_number' => 'required|numeric|digits:16',
            'cvv' => 'required|numeric',
            'expiry_month' => 'required',
            'expiry_year' => 'required',
        ]);

        if ($type == "save") 
        {
            InstallerBank::create([
                'installer_id' => Auth::guard('installer')->user()->id,
                'card_holder_name' => $request->card_holder_name,
                'card_number' => $request->card_number,
                'cvv' => $request->cvv,
                'expiry_month' => $request->expiry_month,
                'expiry_year' => $request->expiry_year,
            ]);           
        }
        else 
        {
            InstallerBank::where('installer_id', Auth::guard('installer')->user()->id)->update([
                'card_holder_name' => $request->card_holder_name,
                'card_number' => $request->card_number,
                'cvv' => $request->cvv,
                'expiry_month' => $request->expiry_month,
                'expiry_year' => $request->expiry_year,
            ]);
        }

        return redirect()->back()->with('success', 'Successfully Saved');
    }

    
}
