<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomeInformation;
use Illuminate\Http\Request;

class HomeImformationController extends Controller
{
    public function index()
    {
        $information = HomeInformation::get();
        return view ('admin.home_page.information_show', compact('information'));
    }

    public function add()
    {
        return view ('admin.home_page.information_add');
    }

    public function edit($id )
    {
        $data = HomeInformation::findOrFail($id);
        return view ('admin.home_page.information_update', compact('data'));
    }

    public function store(Request $request, $id = null)
    {  
        if ($id === null) 
        {    
            $rules = [
                'heading' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required|string',
                'sub_heading' => 'required|string',
            ];
    
            $request->validate($rules);

            $image =  $request->image;
            $imagename = time() . '_' . $image->getClientOriginalName();
            $image->move('images/home/banner/', $imagename);


            $icon =  $request->icon;
            $iconname = time() . '_' . $icon->getClientOriginalName();
            $icon->move('images/home/banner/', $iconname);

           HomeInformation::create([
            'heading' => $request->heading,
            'image' => $imagename,
            'icon' => $iconname,
            'sub_heading' => $request->sub_heading,
            'description' => $request->description,
            ]); 

            return redirect()->route('admin.home_information')->with('success', 'Data Added Successfully!!!');
        } 
        
        else {

            $rules = [
                'heading' => 'required|string',
                'description' => 'required|string',
                'sub_heading' => 'required|string',
            ];
    
            $request->validate($rules);

            $HomeInformation = HomeInformation::findOrFail($id);
            
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() . '_' . $image->getClientOriginalName();
                $image->move('images/home/banner/', $imagename);
                $HomeInformation->image = $imagename;
            }
    
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconname = time() . '_' . $icon->getClientOriginalName();
                $icon->move('images/home/banner/', $iconname);
                $HomeInformation->icon = $iconname;
            }

            $HomeInformation->heading = $request->heading;
            $HomeInformation->sub_heading = $request->sub_heading;
            $HomeInformation->description = $request->description;
            $HomeInformation->save();

            return redirect()->route('admin.home_information')->with('success', 'Data Updated Successfully!!!');
        }       

    }
}
