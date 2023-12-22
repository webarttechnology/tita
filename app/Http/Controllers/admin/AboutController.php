<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::get();
        return view ('admin.about.show', compact('data'));
    }
    public function add()
    {
        return view ('admin.about.add');
    }

    public function edit($id )
    {
        $data = About::findOrFail($id);
        return view ('admin.about.update', compact('data'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'we_are_heading' => 'required|string|max:255',
            'we_are_description' => 'required|string',
            'we_are_not_heading' => 'required|string|max:255',
            'we_are_not_description' => 'required|string',
            'what_we_do_heading' => 'required|string|max:255',
            'what_we_do_description' => 'required|string',
        ]);
    
        // Handle file upload
        $image = $request->image ;
        $imagename = time() . '_' . $image->getClientOriginalName();
        $image->move('images/about/', $imagename);
    
        $about = new About();
        $about->heading = $request->input('heading');
        $about->description = $request->input('description');
        $about->image = $imagename;
        $about->we_are_heading = $request->input('we_are_heading');
        $about->we_are_description = $request->input('we_are_description');
        $about->we_are_not_heading = $request->input('we_are_not_heading');
        $about->we_are_not_description = $request->input('we_are_not_description');
        $about->what_we_do_heading = $request->input('what_we_do_heading');
        $about->what_we_do_description = $request->input('what_we_do_description');
        $about->save();
    
        return redirect()->route('admin.about')->with('success', 'Data created successfully!');    

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'we_are_heading' => 'required|string|max:255',
            'we_are_description' => 'required|string',
            'we_are_not_heading' => 'required|string|max:255',
            'we_are_not_description' => 'required|string',
            'what_we_do_heading' => 'required|string|max:255',
            'what_we_do_description' => 'required|string',
        ]);

        $about = About::findOrFail($id);

        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $imagename = time() . '_' . $image->getClientOriginalName();
            $image->move('images/about/', $imagename);

            if (file_exists(public_path('images/about/' . $about->image))) {
                unlink(public_path('images/about/' . $about->image));
            }
            $about->image = $imagename;
        }

        $about->heading = $request->input('heading');
        $about->description = $request->input('description');
        $about->we_are_heading = $request->input('we_are_heading');
        $about->we_are_description = $request->input('we_are_description');
        $about->we_are_not_heading = $request->input('we_are_not_heading');
        $about->we_are_not_description = $request->input('we_are_not_description');
        $about->what_we_do_heading = $request->input('what_we_do_heading');
        $about->what_we_do_description = $request->input('what_we_do_description');

        $about->save();

        return redirect()->route('admin.about')->with('success', 'Data updated successfully!');
    }
}
