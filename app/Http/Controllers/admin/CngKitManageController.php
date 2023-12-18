<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\{CngKit, CngKitProductDetails, VehicleType};
use App\Http\Controllers\admin\ImageUploadHelpController;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CngKitManageController extends Controller
{
    //

    public function listing()
    {
        $kits = CngKit::with('product')->orderBy('id', 'desc')->get();
        return view('admin.cng.list', compact('kits'));
    }

    public function add()
    {
        $vehicleType = VehicleType::orderBy('id', 'desc')->get();
        return view('admin.cng.add', compact('vehicleType'));
    }

    public function add_action(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:4096',
            'kit_type' => 'required',
            'vehicle_name' => 'required',
            'application' => 'required',
            'vehicle_type' => 'required',
            'brand' => 'required',

            'features' => 'required|array|min:1',
            'newFeatures.*' => 'required|string',
        ]);


        $imgName = ImageUploadHelpController::moveImage("add", $request->image, "cng");
        $slug = Str::slug($request->title);

        // add cng kit
        $cng = CngKit::create($request->only(['title', 'description', 'price', 'kit_type', 'vehicle_name', 'application', 'vehicle_type', 'brand']) + ['image' => $imgName] + ['slug' => $slug]);

        foreach ($request->features as $feature) {
            CngKitProductDetails::create([
                'cng_kits_id' => $cng->id,
                'features' => $feature,
            ]);
        }

        if ($request->has('newFeatures')) {
            foreach ($request->newFeatures as $newFeature) {
                CngKitProductDetails::create([
                    'cng_kits_id' => $cng->id,
                    'features' => $newFeature,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Successfully Saved');
    }

    public function delete($id){
        CngKit::find($id)->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function edit($id){
            $cng = CngKit::with('product')->where('id', $id)->first();
            $vehicleType = VehicleType::orderBy('id', 'desc')->get();
            return view('admin.cng.edit', compact('cng', 'vehicleType'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'kit_type' => 'required',
            'vehicle_name' => 'required',
            'application' => 'required',
            'vehicle_type' => 'required',
            'brand' => 'required',

            'features' => 'required|array|min:1',
            'newFeatures.*' => 'required|string',
        ]);

         $cng = CngKit::where('id', $id)->first();
        
        if($request->hasFile('image')){
            $request->validate([
                'image' => 'mimes:jpg,jpeg,png|max:4096',
            ]);

            $imgName = ImageUploadHelpController::moveImage("edit", $request->image, "cng", 'uploads/cng/'.$cng->image);
        }else{
            $imgName = $cng->image;
        }

        $slug = Str::slug($request->title);

        // add cng kit
        $cng = CngKit::whereId($id)->update($request->only(['title', 'description', 'price', 
        'kit_type', 'vehicle_name', 'application', 'vehicle_type', 'brand']) 
        + ['image' => $imgName] + ['slug' => $slug]);


        if($request->has('features')){
            CngKitProductDetails::where('cng_kits_id', $id)->delete();

            foreach ($request->features as $feature) {
                CngKitProductDetails::create([
                    'cng_kits_id' => $id,
                    'features' => $feature,
                ]);
            }
        }

        if ($request->has('newFeatures')) {
            foreach ($request->newFeatures as $newFeature) {
                CngKitProductDetails::create([
                    'cng_kits_id' => $id,
                    'features' => $newFeature,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Successfully Saved');
    }

    public function delete_features($id){
        CngKitProductDetails::whereId($id)->delete();
        return redirect()->back()->with('success', 'Features Deleted');
    }
}
