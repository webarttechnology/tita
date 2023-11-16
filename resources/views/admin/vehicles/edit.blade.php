@extends('admin.layout.app')
@section('content')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Edit Vehicle</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Vehicle
                </p>
            </div>
            <div>
                <a href="{{ url('admin/vehicle/list') }}" class="btn btn-primary"> View All
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Edit Vehicle</h2>
                    </div>

                    <div class="card-body">
                        <div class="row ec-vendor-uploads">
                            <form action="{{ url('admin/vehicle/edit-action', $detail->id) }}" method="post" class="row g-3" enctype="multipart/form-data">
                                @csrf

                                <div class="col-lg-4">
                                    <div class="ec-vendor-img-upload">
                                        <div class="ec-vendor-main-img">
  
                                            <!-- Existing Image -->
                                            <input type="hidden" name="existing_feature_id[0]" value="{{ $detail->gallery[0]->id }}">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" name="existing_images[]"
                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"><img
                                                            src="{{ asset('assets/admin/img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="avatar-preview ec-preview">
                                                    <div class="imagePreview ec-div-preview">
                                                        <img class="ec-image-preview"
                                                            src="{{ asset('uploads/vehicle_gallery/'.$detail->gallery[0]->img) }}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="thumb-upload-set colo-md-12">
                                                @foreach ($detail->gallery as $key => $gal)
                                                @if($key > 0)
                                                <input type="hidden" name="existing_feature_id[{{ $key }}]" value="{{ $detail->gallery[$key]->id }}">
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' id="thumbUpload01" name="existing_images[]"
                                                            class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('assets/admin/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('uploads/vehicle_gallery/'.$detail->gallery[$key]->img) }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div>

                                            <!-- New Image -->
                                            <div class="thumb-upload-set colo-md-12">
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' id="thumbUpload01" name="new_images[]"
                                                            class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('assets/admin/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('assets/admin/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' id="thumbUpload02" name="new_images[]"
                                                            class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('assets/admin/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('assets/admin/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' id="thumbUpload03" name="new_images[]"
                                                            class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('assets/admin/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('assets/admin/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' id="thumbUpload04" name="new_images[]"
                                                            class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('assets/admin/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('assets/admin/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' id="thumbUpload05" name="new_images[]"
                                                            class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('assets/admin/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('assets/admin/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' id="thumbUpload06" name="new_images[]"
                                                            class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"><img
                                                                src="{{ asset('assets/admin/img/icons/edit.svg') }}"
                                                                class="svg_img header_svg" alt="edit" /></label>
                                                    </div>
                                                    <div class="thumb-preview ec-preview">
                                                        <div class="image-thumb-preview">
                                                            <img class="image-thumb-preview ec-image-preview"
                                                                src="{{ asset('assets/admin/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                alt="edit" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-8">
                                    <div class="ec-vendor-upload-detail row">
                                        
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Name</label>
                                                <input type="text" class="form-control slug-title" name="name"
                                                    id="inputEmail4" value="{{ $detail->name }}">
                                            </div>


                                            <input type="hidden" value="{{ $detail->year_of_launch }}" id="existingLaunchYear">
                                            <div class="col-md-6">
                                                <label class="form-label">Year of Launch</label>
                                                <select name="launch_year" id="launch_year"
                                                    class="form-select">
                                                     <option value="{{ $detail->year_of_launch }}" selected>{{ $detail->year_of_launch }}</option>
                                                </select>
                                            </div>


                                            <div class="col-md-12">
                                                <label for="slug" class="col-12 col-form-label">Range</label>
                                                <div class="col-12">
                                                    <input id="range" name="range" class="form-control here set-slug"
                                                        type="number" value="{{ $detail->range }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Power</label>
                                                <input type="text" class="form-control slug-title" name="power"
                                                    id="inputEmail4" value="{{ $detail->power }}">
                                            </div>

                                            <div class="col-md-12 mb-25">
                                                <label class="form-label">Color</label>
                                                <div class="form-checkbox-box">

                                                    @php
                                                        $max = 6;
                                                        $colorSelected = count($detail->color);
                                                    @endphp

                                                    @foreach($detail->color as $key => $color)
                                                        <div class="form-check form-check-inline">
                                                            <input checked type="checkbox" 
                                                                value="{{ $color->color }}" @if(isset(old('colors')[$key]) && (old('colors')[$key] == $color->color)) checked @endif>
                                                            <input type="color" name="colors[{{ $key }}]" class="form-control form-control-color"
                                                                value="{{ $color->color }}"
                                                                title="Choose your color">
                                                        </div>
                                                    @endforeach
                                                    @if($max!=$colorSelected)
                                                    @for($i = count($detail->color); $i < $max; $i++)
                                                        <div class="form-check form-check-inline">
                                                            <input type="checkbox" 
                                                                value="{{ $colors_to_choose[$i]->color }}" >
                                                            <input name="colors[{{ $i }}]" type="color" class="form-control form-control-color"
                                                                value="{{ $colors_to_choose[$i]->color }}"
                                                                title="Choose your color">
                                                        </div>
                                                    @endfor
                                                    @endif      

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Charging Time</label>
                                                <input type="text" class="form-control" name="charging_time" id="price1"
                                                    value="{{ $detail->charging_time }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Seating Capacity</label>
                                                <input type="number" class="form-control" name="seating_capacity"
                                                    value="{{ $detail->seating_capacity }}" id="quantity1">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Distance</label>
                                                <input type="text" class="form-control" name="distance"
                                                    value="{{ $detail->distance }}" id="price1">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Battery Capacity</label>
                                                <input type="text" class="form-control" name="battery_capacity"
                                                    value="{{ $detail->battery_capacity }}" id="price1">
                                            </div>


                                            <!-- Existing Features -->
                                            <h3 class="mt-5">Existing Features</h3>
                                           @foreach ($detail->feature as $feature)    
                                            <div class="row mt-2">
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" id="features"
                                                        name="existing_features[]" placeholder=""
                                                        data-role="tagsinput" value="{{ $feature->feature }}" />
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="javascript:void(0)" onclick="displayAlert('error', 'Are You Sure, you want to delete this Feature?', '{{ url('admin/vehicle/delete/features', $feature->id) }}')">
                                                    <span class="btn btn-danger m-b-5 m-t-5" id="addrow"
                                                         style="float: left;"><i class="fa fa-trash"></i></span></a>
                                                </div>
                                            </div>
                                           @endforeach


                                            <!-- New features -->
                                            <h3 class="mt-5">Add New Features</h3>
                                            <div class="row mt-2">
                                                <div class="col-md-10">
                                                    <label class="form-label">Features</label>
                                                    <input type="text" class="form-control" id="features"
                                                        name="new_features[]" value="" placeholder=""
                                                        data-role="tagsinput" />
                                                </div>
                                                <div class="col-md-1">
                                                    <br>
                                                    <span class="btn btn-primary m-b-5 m-t-5" id="addrow"
                                                        onclick="return addRows();" style="float: left;"><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>

                                            <div class="row" id="outerdiv">
                                                <div style="padding:10px;" id="more_features"></div>
                                            </div>
                                            <br>

                                            <div class="col-md-12 mt-5">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->

<!-- add year of 50 years after & before current year -->
<script>
    $(document).ready(function() {
      var currentYear = new Date().getFullYear();
      var startYear = currentYear - 50;
      var endYear = currentYear + 50;

      var dropdown = $('#launch_year');
      var existingYear = $('#existingLaunchYear').val();

      for (var year = startYear; year <= endYear; year++) {
        if(year != existingYear){
            var option = $('<option>', {
              value: year,
              text: year
            });
        }

        dropdown.append(option);
      }
    });
</script>

<script>
    $(document).ready(function() {
      $('#launch_year').select2();
    });
</script>


<!-- dynamically add features section -->
<script>
    function addRows(){
        var container = document.getElementById('more_features');
        var row = document.createElement('div');
        row.classList.add('row');  

        row.innerHTML = `<div class="row mt-2">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="features"
                                        name="new_features[]" value="" placeholder=""
                                        data-role="tagsinput" />
                                </div>
                                <!--div class="col-md-1">
                                <span class="btn btn-primary m-b-5 m-t-5" id="addrow"
                                    onclick="return addRows();" style="float: left;"><i class="fa fa-plus"></i></span>
                                </div-->
                                <div class="col-md-1">
                                <span class="btn btn-danger m-b-5 m-t-5" id="addrow"
                                    onclick="removeRow(this)" style="float: left;"><i class="fa fa-trash"></i></span>
                                </div>
                        </div>`;
                
        container.appendChild(row);
    }

    function removeRow(button) {
        // Get the parent row and remove it
        var row = button.closest('.row');
        row.remove();
    }
</script>
@endsection