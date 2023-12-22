<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function index()
    {
        $data = WhyChooseUs::get();
        return view ('admin.WhyChooseUs.show', compact('data'));
    }
    public function add()
    {
        return view ('admin.WhyChooseUs.add');
    }

    public function edit($id )
    {
        $data = WhyChooseUs::findOrFail($id);
        return view ('admin.WhyChooseUs.update', compact('data'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'heading' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'number' => 'required|numeric',
        ]);
    
        // Handle file upload
        $image = $request->image ;
        $imagename = time() . '_' . $image->getClientOriginalName();
        $image->move('images/WhyChooseUs/', $imagename);
    
        $WhyChooseUs = new WhyChooseUs();
        $WhyChooseUs->title = $request->input('heading');
        $WhyChooseUs->number = $request->input('number');
        $WhyChooseUs->image = $imagename;
        $WhyChooseUs->save();
    
        return redirect()->route('admin.whyUs')->with('success', 'Data created successfully!');    
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'number' => 'required|numeric',
        ]);

        $whyChooseUs = WhyChooseUs::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '_' . $image->getClientOriginalName();
            $image->move('images/WhyChooseUs/', $imagename);
            $whyChooseUs->image = $imagename;
        }

        $whyChooseUs->title = $request->input('heading');
        $whyChooseUs->number = $request->input('number');
        $whyChooseUs->save();

        return redirect()->route('admin.whyUs')->with('success', 'Data updated successfully!');
    }

    public function delete($id )
    {
        $data = WhyChooseUs::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.whyUs')->with('success', 'Data updated successfully!');
    }


}
