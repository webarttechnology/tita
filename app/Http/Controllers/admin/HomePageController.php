<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeBanner;

class HomePageController extends Controller
{
    public function index()
    {
        $banners = HomeBanner::get();
        return view ('admin.home_page.show', compact('banners'));
    }

    public function add()
    {
        return view ('admin.home_page.add');
    }

    public function edit($id )
    {
        $data = HomeBanner::findOrFail($id);
        return view ('admin.home_page.update', compact('data'));
    }

    public function store(Request $request, $id = null)
    {  
        if ($id === null) 
        {    
            $rules = [
                'heading' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'range' => 'required|string',
                'timing' => 'required|string',
                'battery' => 'required|string',
            ];
    
            $request->validate($rules);

            $image =  $request->image;
            $imagename = time() . '_' . $image->getClientOriginalName();
            $image->move('images/home/banner/', $imagename);


            $icon =  $request->icon;
            $iconname = time() . '_' . $icon->getClientOriginalName();
            $icon->move('images/home/banner/', $iconname);

           HomeBanner::create([
            'heading' => $request->heading,
            'image' => $imagename,
            'icon' => $iconname,
            'range' => $request->range,
            'timing' => $request->timing,
            'battery' => $request->battery,
            ]); 

            return redirect()->route('admin.home_banner')->with('success', 'Data Added Successfully!!!');
        } 
        
        else {

            $rules = [
                'heading' => 'required|string',
                'range' => 'required|string',
                'timing' => 'required|string',
                'battery' => 'required|string',
            ];
    
            $request->validate($rules);

            $homeBanner = HomeBanner::findOrFail($id);
            
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagename = time() . '_' . $image->getClientOriginalName();
                $image->move('images/home/banner/', $imagename);
                $homeBanner->image = $imagename;
            }
    
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconname = time() . '_' . $icon->getClientOriginalName();
                $icon->move('images/home/banner/', $iconname);
                $homeBanner->icon = $iconname;
            }

            $homeBanner->heading = $request->heading;
            $homeBanner->range = $request->range;
            $homeBanner->timing = $request->timing;
            $homeBanner->battery = $request->battery;
            $homeBanner->save();

            return redirect()->route('admin.home_banner')->with('success', 'Data Updated Successfully!!!');
        }       

    }
}
