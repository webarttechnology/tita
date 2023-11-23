<?php

namespace App\Http\Controllers\admin;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        $data = Video::get();

        return view ('admin.Video.show',  compact('data'));
    }

    public function add()
    {
        return view ('admin.Video.add');
    }

    public function store(VideoRequest $request)
    {                  
        Video::create([
            'video_link' => $request->video_link,
            'title' => $request->heading,          
        ]) ;

        return redirect()->route('admin.video')->with('success', 'Data Added Successfully!!!');
    }

    public function edit($id)
    {
        $data = Video::find($id);
        return view ('admin.Video.update', compact('data'));
    }

    public function update(Request $request,$id)
    {
        $data = Video::findOrFail($id);

            $data->update([
                'video_link' => $request->video_link,
                'title' => $request->heading,
            ]);
            
            return redirect()->route('admin.video')->with('success', 'Data Updated Successfully!!!');
    }

    public function delete($id)
    {
        $data = Video::find($id);
         $data->delete();

        return redirect()->route('admin.video')->with('success','Data Deleted Successfully!!!');
    }
}
