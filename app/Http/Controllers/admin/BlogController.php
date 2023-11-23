<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Str;
use App\Http\Controllers\admin\ImageUploadHelpController;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::get();

        return view ('admin.Blog.show',  compact('data'));
    }

    public function add()
    {
        return view ('admin.Blog.add');
    }

    public function store(BlogRequest $request)
    {   
        $imagePath = ImageUploadHelpController::moveImage("add", $request->file('image'), "blog");
           
        Blog::create([
            'category' => $request->category,
            'title' => $request->heading,
            'sub_description' => $request->sub_description,
            'description' => $request->description,
            'image' => $imagePath,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'slug' => Str::slug($request->heading, '-'),
            'created_at' => now(),
            'updated_at' => now(),
        ]) ;

        return redirect()->route('admin.blog')->with('success', 'Data Added Successfully!!!');
    }

    public function edit($id)
    {
        $data = Blog::find($id);
        return view ('admin.Blog.update', compact('data'));
    }


    public function update(Request $request,$id)
    {
        $data = Blog::findOrFail($id);

          if ($request->hasFile('image')) {

            $imagePath = ImageUploadHelpController::moveImage("edit", $request->file('image'), "blog", $data->image);
    
            // Update the category data with the new image path
            $data->update([
                'category' => $request->category,
                'title' => $request->heading,
                'description' => $request->description,
                'image' => $imagePath,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'slug' => Str::slug($request->heading, '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            } else {
                $data->update([
                    'category' => $request->category,
                    'title' => $request->heading,
                    'description' => $request->description,
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'slug' => Str::slug($request->heading, '-'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            return redirect()->route('admin.blog')->with('success', 'Data Updated Successfully!!!');
    }

    public function delete($id)
    {
        $data = Blog::find($id);
         $data->delete();

        return redirect()->route('admin.blog')->with('success','Data Deleted Successfully!!!');
    }
}
