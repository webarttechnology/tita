<?php

namespace App\Http\Controllers\admin;

use App\Models\PDF;
use App\Http\Requests\PDFRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\ImageUploadHelpController;

class PDFController extends Controller
{
    public function index()
    {
        $data = PDF::get();

        return view ('admin.PDF.show',  compact('data'));
    }

    public function add()
    {
        return view ('admin.PDF.add');
    }

    public function store(PDFRequest $request)
    {     
        $imagePath = ImageUploadHelpController::moveImage("add", $request->file('image'), "pdf");             
        PDF::create([
            'pdf' => $imagePath,
            'title' => $request->heading,          
        ]) ;

        return redirect()->route('admin.pdf')->with('message', 'Data Added Successfully!!!');
    }

    public function edit($id)
    {
        $data = PDF::find($id);
        return view ('admin.PDF.update', compact('data'));
    }

    public function update(Request $request,$id)
    {
        $data = PDF::findOrFail($id);

        if ($request->hasFile('image')) {

            $imagePath = ImageUploadHelpController::moveImage("edit", $request->file('image'), "pdf", $data->image);    

            $data->update([
                'pdf' => $imagePath,
                'title' => $request->heading,
            ]);
            } else {
                $data->update([
                    'title' => $request->heading,
                ]);
            }
            
            return redirect()->route('admin.pdf')->with('message', 'Data Updated Successfully!!!');
    }

    public function delete($id)
    {
        $data = PDF::find($id);
         $data->delete();

        return redirect()->route('admin.pdf')->with('message','Data Deleted Successfully!!!');
    }
}
