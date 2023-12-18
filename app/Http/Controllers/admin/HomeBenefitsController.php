<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBenefit;
use Illuminate\Http\Request;

class HomeBenefitsController extends Controller
{
    public function index()
    {
        $benifits = HomeBenefit::get();
        return view ('admin.home_page.benifit_show', compact('benifits'));
    }

    public function add()
    {
        return view ('admin.home_page.benifit_add');
    }

    public function edit($id )
    {
        $data = HomeBenefit::findOrFail($id);
        return view ('admin.home_page.benifit_update', compact('data'));
    }

    public function store(Request $request, $id = null)
    {  
        if ($id === null) 
        {    
            $rules = [
                'heading' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
    
            $request->validate($rules);

            $image =  $request->image;
            $imagename = time() . '_' . $image->getClientOriginalName();
            $image->move('images/home/benifits/', $imagename);


           HomeBenefit::create([
            'heading' => $request->heading,
            'image' => $imagename,
            ]); 

            return redirect()->route('admin.home_benifit')->with('success', 'Data Added Successfully!!!');
        } 
        
        else {

            $rules = [
                'heading' => 'required|string',
            ];
    
            $request->validate($rules);

            $HomeBenefit = HomeBenefit::findOrFail($id);
            
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() . '_' . $image->getClientOriginalName();
                $image->move('images/home/benifits/', $imagename);
                $HomeBenefit->image = $imagename;
            }

            $HomeBenefit->heading = $request->heading;
            $HomeBenefit->save();

            return redirect()->route('admin.home_benifit')->with('success', 'Data Updated Successfully!!!');
        }       

    }
}
