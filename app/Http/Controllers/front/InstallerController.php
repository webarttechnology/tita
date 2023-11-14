<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Models\Installer;

use App\Mail\MyEmail;
use App\Http\Requests\EmailRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class InstallerController extends Controller
{
    public function registration(Request $request)
    {
        //dd($request-> all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|numeric|digits:10',
            'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*[^a-zA-Z0-9])[\S]+$/'],
        ], [
            'password.regex' => 'The password must be at least 8 characters long and include at least one uppercase letter and one special character.',
            'number.digits' => 'Number should be at least 12 digits.',
        ]);

        Installer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->number,
            'password' => bcrypt($request->password),
            'status' =>"active",
            'approvel_by_admin' => "unapproved",
        ]);

        return redirect()->back()->with('message', 'Your Data Saved Successfully!!!');
        
    }

    public function show(Request $request)
    {
        $data = Installer::all();
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
}
