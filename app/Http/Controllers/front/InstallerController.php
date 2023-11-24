<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Models\Installer;
use App\Mail\MyEmail;
use App\Models\Quote;
use App\Rules\PhoneNumber;
use App\Models\Installer_info;
use App\Models\InstallerLocation;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\Report;

class InstallerController extends Controller
{
    public function registration(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:installers,email,' . ($request->id ?? 'NULL') . ',id',
            'number' => ['required', new PhoneNumber],
            'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*[^a-zA-Z0-9])[\S]+$/'],
            'passport_photo' => 'image|mimes:jpeg,png,jpg',
            'national_id_card' => 'image|mimes:jpeg,png,jpg',
            'drivers_license' => 'image|mimes:jpeg,png,jpg',
            'street_no' => 'required|string',
            'plot' => 'required|string',
            'street_name' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|string|max:10',
            'national_identification_no' => 'required|string',
            'residental_address' => 'required|string',
            'ocupation' => 'required|string',
            'company_name' => 'required|string',
            'cac_registration' => 'required|string',
        ], [
            'password.regex' => 'The password must be at least 8 characters long and include at least one uppercase letter and one special character.',
            'number.digits' => 'Number should be at least 10 digits.',
        ]);

        $passport_photo = $request->passport_photo;
        $passport_photo_Path = 'images/Installer/' . time() . '_' . $passport_photo->getClientOriginalName();
        $passport_photo->move('images/Installer', $passport_photo_Path);
    
        $national_id_card_photo = $request->national_id_card;
        $national_id_card_photo_Path = 'images/Installer/' . time() . '_' . $national_id_card_photo->getClientOriginalName();
        $national_id_card_photo->move('images/Installer', $national_id_card_photo_Path);
    
        $drivers_license_photo = $request->drivers_license;
        $drivers_license_photo_Path = 'images/Installer/' . time() . '_' . $drivers_license_photo->getClientOriginalName();
        $drivers_license_photo->move('images/Installer', $drivers_license_photo_Path);
    
        $installerData = [
            'name' => $request->f_name . ' ' . $request->m_name . ' ' . $request->l_name,
            'email' => $request->email,
            'phone_number' => $request->number,
            'password' => bcrypt($request->password),
            'status' => "active",
            'approvel_by_admin' => "inprogress",
        ];
    
        // Check if installer already exists
        $installer = Installer::where('email', $request->email)->first();
    
        if ($installer) {
            // If installer exists, update the record
            $installer->update($installerData);
        } else {
            // If installer doesn't exist, create a new record
            $installer = Installer::create($installerData);
        }
    
        InstallerLocation::updateOrCreate(
            ['installer_id' => $installer->id],
            [
                'street_no' => $request->street_no,
                'plot' => $request->plot,
                'street_name' => $request->street_name,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
            ]
        );
    
        Installer_info::updateOrCreate(
            ['installer_id' => $installer->id],
            [
                'national_identification_no' => $request->national_identification_no,
                'residental_address' => $request->residental_address,
                'ocupation' => $request->ocupation,
                'passport_photo' => $passport_photo_Path,
                'national_id_card' => $national_id_card_photo_Path,
                'drivers_license' => $drivers_license_photo_Path,
                'company_name' => $request->company_name,
                'cac_registration' => $request->cac_registration,
            ]
        );
    
        return redirect()->back()->with('success', 'Registration Successfully!!!');        
    }

    public function show(Request $request)
    {
        $data = Installer::with('reports')->get();
        return view('admin.Installer_registration.show' , compact('data'));
    }

    public function approve(Request $request)
    {
        $installer = Installer::find($request->installer_id);

        if (!$installer) {
            return response()->json(['success' => false]);
        }
    
        $emailSubject = '';
        $emailMessage = '';
    
        if ($request->action == 'approved') {
            $installer->approvel_by_admin = 'approve';
            $emailSubject = 'Installer Approved';
            $emailMessage = 'Your installer request has been approved.';
        } elseif ($request->action == 'reject') {
            $installer->approvel_by_admin = 'reject';
            $installer_id = Installer::find($request->installer_id);
            $installer_id->delete();
            $emailSubject = 'Installer Rejected';
            $emailMessage = 'Your installer request has been rejected.';
        } else {
            return response()->json(['success' => false]);
        }
    
        $installer->save();
    
        $email = new MyEmail($emailSubject, $emailMessage);
        Mail::to('teethi.dhar@webart.technology')->send($email);
    
        return response()->json(['success' => true, 'status' => $installer->approvel_by_admin, 'message' => 'Email sent successfully!']);      
    }

    public function installerReport()
    {
        $data = Installer::where('approvel_by_admin', 'inprogress')->get();        
        return view('front.report', ['data' => $data]);
    }

    public function quote()
    {
        return view('front.quote');
    }

    public function reportStore(Request $request)
    {
        $request->validate([
            'installer_id' => 'required',
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required',
            'phone_number' => ['required', new PhoneNumber],
            'email' => 'required|email',
            'address' => 'required|string',
            'vehical_type' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'company_street_no' => 'required',
            'company_block' => 'required|string',
            'company_street_name' => 'required',
            'company_city' => 'required|string',
            'company_state' => 'required',
            'additional_details' => 'required',
        ], [
            'name.required' => 'Name is required.',
        ]);

        Report::create([
            'installer_id' => $request->installer_id,
            'company_name' => $request->company_name,
            'contact_name' => $request->contact_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address,
            'vehical_type' => $request->vehical_type,
            'make' => $request->make,
            'model' => $request->model,
            'year' => $request->year,
            'company_street_no' => $request->company_street_no,
            'company_block' => $request->company_block,
            'company_street_name' => $request->company_street_name,
            'company_city' => $request->company_city,
            'company_state' => $request->company_state,
            'additional_details' => $request->additional_details,
        ]);
        
        return redirect()->back()->with('success', 'Your Message Sent Successfully!!!');
    }

    public function quoteStore(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_name' => 'required',
            'phone_number' => ['required', new PhoneNumber],
            'email' => 'required|email',
            'address' => 'required|string',
            'vehical_type' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'company_street_no' => 'required',
            'company_block' => 'required|string',
            'company_street_name' => 'required',
            'company_city' => 'required|string',
            'company_state' => 'required',
            'additional_details' => 'required',
        ], [
            'name.required' => 'Name is required.',
        ]);

        Quote::create([
            'company_name' => $request->company_name,
            'contact_name' => $request->contact_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address,
            'vehical_type' => $request->vehical_type,
            'make' => $request->make,
            'model' => $request->model,
            'year' => $request->year,
            'company_street_no' => $request->company_street_no,
            'company_block' => $request->company_block,
            'company_street_name' => $request->company_street_name,
            'company_city' => $request->company_city,
            'company_state' => $request->company_state,
            'additional_details' => $request->additional_details,
        ]);
        
        return redirect()->back()->with('success', 'Your Message Sent Successfully!!!');
    }

    public function details($id)
    {
        return Installer::with('reports')->where('id', $id)->first();
    }

    public function testForm()
    {
        return view('front.install_test_form');
    }


    public function installerDetails($id)
    {
        return Installer::with('info', 'location')->where('id', $id)->first();
    }
    
}
