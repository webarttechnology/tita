<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomeCar;
use Illuminate\Http\Request;

class HomeElectronicCarController extends Controller
{
    public function index()
    {
        $benifits = HomeCar::get();
        return view ('admin.home_page.fearure_show', compact('benifits'));
    }

    public function add()
    {
        return view ('admin.home_page.feature_add');
    }

    public function edit($id )
    {
        $data = HomeCar::findOrFail($id);
        return view ('admin.home_page.fearure_update', compact('data'));
    }

    public function store(Request $request, $id = null)
    {  
        if ($id === null) 
        {    
            $rules = [
                'heading' => 'required|string',
                'sub_heading' => 'required|string',
                'small_heading' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
    
            $request->validate($rules);

            $image =  $request->image;
            $imagename = time() . '_' . $image->getClientOriginalName();
            $image->move('images/home/feature/', $imagename);


           HomeCar::create([
            'heading' => $request->heading,
            'sub_heading' => $request->sub_heading,
            'small_heading' => $request->small_heading,
            'image' => $imagename,
            ]); 

            return redirect()->route('admin.home_feature')->with('success', 'Data Added Successfully!!!');
        } 
        
        else {

            $rules = [
                'heading' => 'required|string',
                'sub_heading' => 'required|string',
                'small_heading' => 'required|string',
            ];
    
            $request->validate($rules);

            $HomeCar = HomeCar::findOrFail($id);
            
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() . '_' . $image->getClientOriginalName();
                $image->move('images/home/feature/', $imagename);
                $HomeCar->image = $imagename;
            }

            $HomeCar->heading = $request->heading;
            $HomeCar->save();

            return redirect()->route('admin.home_feature')->with('success', 'Data Updated Successfully!!!');
        }       

    }
}
