<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    public function index()
    {
        $data = 

        return view ('admin.Blog.show',  compact('data'));
    }

    public function add()
    {
        $categories = SubCategory::select(
            'sub_categories.id as id',
            'sub_categories.name as subcategory',
            'sub_categories.slug as subcategorySlug',
            'sub_categories.icon as subcategoryIcon',
            'main_categories.name as maincategory',
            'main_categories.icon as maincategoryIcon',
            'main_categories.slug as maincategorySlug',
        )->join('main_categories', 'sub_categories.category_id', '=', 'main_categories.id')->get();

        return view ('admin.Blog.add', compact('categories'));
    }

    public function store(Request $request)
    {    
        $imagePath = ImageUploadHelpController::moveImage("add", $request->file('image'), "blog");

            $categoryIds = $request->input('category');
            $dataInserts = [];

            foreach ($categoryIds as $categoryId) {
                $dataInserts[] = [
                    'category' => $categoryId,
                    'title' => $request->heading,
                    'description' => $request->description,
                    'image' => $imagePath,
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'slug' => Str::slug($request->heading, '-'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            Blog::insert($dataInserts);        

        return redirect()->route('blog')->with('successmsg', 'Data Added Successfully!!!');
    }

    public function edit($id)
    {
        $data = Blog::find($id);
        $categories = SubCategory::select(
            'sub_categories.id as id',
            'sub_categories.name as subcategory',
            'sub_categories.slug as subcategorySlug',
            'sub_categories.icon as subcategoryIcon',
            'main_categories.name as maincategory',
            'main_categories.icon as maincategoryIcon',
            'main_categories.slug as maincategorySlug',
        )->join('main_categories', 'sub_categories.category_id', '=', 'main_categories.id')->get();

        return view ('admin.Blog.update', compact('categories', 'data'));
    }


    public function update(Request $request,$id)
    {
        $data = Blog::findOrFail($id);

          // Check if a new image is uploaded
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
                // Update the category data without changing the image path
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
            return redirect()->route('blog')->with('successmsg', 'Data Updated Successfully!!!');
    }

    public function delete($id)
    {
        $data = Blog::find($id);
         $data->delete();

        return redirect()->route('blog')->with('message','Data Added Successfully!!!');
    }
}
