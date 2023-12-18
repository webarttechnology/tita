<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBrand;
use Illuminate\Http\Request;

class HomeBrandController extends Controller
{
    public function index()
    {
        $brands = HomeBrand::get();
        return view ('admin.home_page.brand_show', compact('brands'));
    }
    public function add()
    {
        return view ('admin.home_page.brand_add');
    }

    public function edit($id )
    {
        $data = HomeBrand::findOrFail($id);
        return view ('admin.home_page.brand_update', compact('data'));
    }

    public function store(Request $request, $id = null)
    {  
        if ($id === null) 
        {    
            // $rules = [
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // ];
    
            // $request->validate($rules);

            foreach( $request->image as $image_name)
            {                
            $imagename = time() . '_' . $image_name->getClientOriginalName();
            $image_name->move('images/home/benifits/', $imagename);
                HomeBrand::create([
                    'image' => $imagename,
                    ]); 
            }
          
            return redirect()->route('admin.home_brand')->with('success', 'Data Added Successfully!!!');
        } 
        
        else {

            $HomeBrand = HomeBrand::findOrFail($id);
            
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() . '_' . $image->getClientOriginalName();
                $image->move('images/home/benifits/', $imagename);
                $HomeBrand->image = $imagename;
            }
            $HomeBrand->save();

            return redirect()->route('admin.home_brand')->with('success', 'Data Updated Successfully!!!');
        }       

    }
}
