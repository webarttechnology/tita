<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\ImageUploadHelpController;
use App\Models\{Vehicle, ChooseColor, VehicleColor, VehicleGallery, VehicleFeature};

class VehicleManageController extends Controller
{
    //

    public function listing(){
        $vehicles = Vehicle::with('gallery')->orderBY('id', 'desc')->paginate(15);
        return view('admin.vehicles.lists', compact('vehicles'));
    }
    
    public function add(){
        $colors_to_choose = ChooseColor::all();
        return view('admin.vehicles.add', compact('colors_to_choose'));
    }

    public function add_action(Request $request){
           $request->validate([
                'name' => 'required|max:200',
                'launch_year' => 'required',
                'range' => 'required|max:200',
                'power' => 'required|max:200',
                'charging_time' => 'required|max:200',
                'seating_capacity' => 'required|max:200',
                'distance' => 'required|max:200',
                'battery_capacity' => 'required|max:200',
                'images' => 'required|array|at_least_one_field',
           ],[
                 'images.required' => 'Atleast One Image Must Add'
           ]);

           /**
            * Vehicle upload
           */

           $vehicle = Vehicle::create([
                 'name' => $request->name,
                 'year_of_launch' => $request->launch_year,
                 'range' => $request->range,
                 'power' => $request->power,
                 'charging_time' => $request->charging_time,
                 'seating_capacity' => $request->seating_capacity,
                 'distance' => $request->distance,
                 'battery_capacity' => $request->battery_capacity,
           ]);

         /**
          * Upload Image
         */

         foreach($request->images as $image){
                $imgName = ImageUploadHelpController::moveImage("add", $image, "vehicle_gallery");

                VehicleGallery::create([
                    'vehicle_id' => $vehicle->id,
                    'img' => $imgName,
                ]);
         }

         /**
          * Add Colors 
         */

        if($request->colors != null){
              foreach($request->colors as $color){
                VehicleColor::create([
                    'vehicle_id' => $vehicle->id,
                    'color' => $color,
                ]);
              }
        }

        /**
         * Add Features 
        */

              foreach($request->features as $feature){
                if($feature != null){
                    VehicleFeature::create([
                        'vehicle_id' => $vehicle->id,
                        'feature' => $feature,
                    ]);
                }
              }
       

        return redirect('admin/vehicle/list')->with('success', 'Vehicle Added Successfully');
    }

    /**
     * 
    */

    public function delete($id){
        Vehicle::find($id)->delete();
        return redirect('admin/vehicle/list')->with('success', 'Successfully Deleted');
    }

    /**
     * Edit vehicle
    */

    public function edit($id){
           $colors_to_choose = ChooseColor::all();
           $detail = Vehicle::with('gallery', 'color', 'feature')->whereId($id)->first();
           return view('admin.vehicles.edit', compact('detail', 'colors_to_choose'));
    }

    public function edit_action(Request $request, $id){
        $request->validate([
            'name' => 'required|max:200',
            'launch_year' => 'required',
            'range' => 'required|max:200',
            'power' => 'required|max:200',
            'charging_time' => 'required|max:200',
            'seating_capacity' => 'required|max:200',
            'distance' => 'required|max:200',
            'battery_capacity' => 'required|max:200',
       ]);

          /**
            * Vehicle update
           */

           $vehicle = Vehicle::whereId($id)->update([
            'name' => $request->name,
            'year_of_launch' => $request->launch_year,
            'range' => $request->range,
            'power' => $request->power,
            'charging_time' => $request->charging_time,
            'seating_capacity' => $request->seating_capacity,
            'distance' => $request->distance,
            'battery_capacity' => $request->battery_capacity,
         ]);

         /**
          * Existing Images Upload 
         */

         if($request->hasFile('existing_images')){
            foreach($request->existing_images as $key => $img1){
                $imgName = ImageUploadHelpController::moveImage("add", $img1, "vehicle_gallery");
                VehicleGallery::where('id', $request->existing_feature_id[$key])->update([
                    'img' => $imgName,
                ]);
            }
         }

         /**
          * Add New Gallery
         */

         if($request->hasFile('new_images')){
            foreach($request->new_images as $img2){
                $imgName = ImageUploadHelpController::moveImage("add", $img2, "vehicle_gallery");
                VehicleGallery::create([
                    'vehicle_id' => $id,
                    'img' => $imgName,
                ]);
            }
         }

         /**
          * Edit existing features 
         */

        if($request->existing_features != null){
             VehicleFeature::where('vehicle_id', $id)->delete();

             foreach($request->existing_features as $feature){

                if($feature != null){
                    VehicleFeature::create([
                        'vehicle_id' => $id,
                        'feature' => $feature,
                    ]);
                }
              }
         }

         /**
          * Add New features 
         */

         if($request->new_features != null){
             foreach($request->new_features as $feature){
                if($feature != null){
                    VehicleFeature::create([
                        'vehicle_id' => $id,
                        'feature' => $feature,
                    ]);
                }
              }
         }


         /**
          * Add Colors 
         */

        if($request->colors != null){
            VehicleColor::where('vehicle_id', $id)->delete();

              foreach($request->colors as $color){
                VehicleColor::create([
                    'vehicle_id' => $id,
                    'color' => $color,
                ]);
              }
        }

        return redirect('admin/vehicle/list')->with('success', 'Vehicle Updated Successfully');
    }

    /**
     * Feature delete
    */

    public function delete_features($id){
        VehicleFeature::whereId($id)->delete();
        return redirect()->back()->with('success', 'Features Deleted Successfully');      
    }
}
