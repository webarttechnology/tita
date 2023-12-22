<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $data = ContactUs::get();
        return view ('admin.contact_us.show', compact('data'));
    }
    public function add()
    {
        return view ('admin.contact_us.add');
    }

    public function edit($id )
    {
        $data = ContactUs::findOrFail($id);
        return view ('admin.contact_us.update', compact('data'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'address' => 'required|string|max:255',
            'phone_one' => 'required|numeric|max:255',
            'phone_two' => 'nullable|numeric|max:255',
            'email' => 'required|email|max:255',
            'company_name' => 'string|max:255',
            'company_address' => 'string|max:255',
        ]);
    
        $contactUs = new ContactUs();
        $contactUs->address = $request->input('address');
        $contactUs->phone_one = $request->input('phone_one');
        $contactUs->phone_two = $request->input('phone_two');
        $contactUs->email = $request->input('email');
        $contactUs->company_name = $request->input('company_name');
        $contactUs->company_address = $request->input('company_address');
        $contactUs->save();
    
        return redirect()->route('admin.contctUs')->with('success', 'Data created successfully!');      
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'phone_one' => 'required',
            'email' => 'required|email|max:255',
        ]);

        // Find the ContactUs model instance by ID
        $contactUs = ContactUs::findOrFail($id);

        // Update fields
        $contactUs->address = $request->input('address');
        $contactUs->phone_one = $request->input('phone_one');
        $contactUs->phone_two = $request->input('phone_two');
        $contactUs->email = $request->input('email');
        $contactUs->company_name = $request->input('company_name');
        $contactUs->company_address = $request->input('company_address');

        // Save the updated ContactUs instance
        $contactUs->save();

        return redirect()->route('admin.contctUs')->with('success', 'Data updated successfully!');
    }

}
