@extends('admin.layout.app')
@section('content')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Add Vehicle</h1>
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
                        <h2>Add Vehicle</h2>
                    </div>

                    <div class="card-body">
                        <div class="row ec-vendor-uploads">
                            <form action="{{ url('admin/vehicle/add-action') }}" method="post" class="row g-3" enctype="multipart/form-data">
                                @csrf

                                <div class="col-lg-4">
                                    <div class="ec-vendor-img-upload">
                                        <div class="ec-vendor-main-img">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" name="images[]"
                                                        class="ec-image-upload" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"><img
                                                            src="{{ asset('assets/admin/img/icons/edit.svg') }}"
                                                            class="svg_img header_svg" alt="edit" /></label>
                                                </div>
                                                <div class="avatar-preview ec-preview">
                                                    <div class="imagePreview ec-div-preview">
                                                        <img class="ec-image-preview"
                                                            src="{{ asset('assets/admin/img/products/vender-upload-preview.jpg') }}"
                                                            alt="edit" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="thumb-upload-set colo-md-12">
                                                <div class="thumb-upload">
                                                    <div class="thumb-edit">
                                                        <input type='file' id="thumbUpload01" name="images[]"
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
                                                        <input type='file' id="thumbUpload02" name="images[]"
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
                                                        <input type='file' id="thumbUpload03" name="images[]"
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
                                                        <input type='file' id="thumbUpload04" name="images[]"
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
                                                        <input type='file' id="thumbUpload05" name="images[]"
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
                                                        <input type='file' id="thumbUpload06" name="images[]"
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
                                                    id="inputEmail4" value="{{ old('name') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Year of Launch</label>
                                                <select name="launch_year" id="launch_year"
                                                    class="form-select"></select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="slug" class="col-12 col-form-label">Range</label>
                                                <div class="col-12">
                                                    <input id="range" name="range" class="form-control here set-slug"
                                                        type="number" value="{{ old('range') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Power</label>
                                                <input type="text" class="form-control slug-title" name="power"
                                                    id="inputEmail4" value="{{ old('power') }}">
                                            </div>

                                            <div class="col-md-12 mb-25">
                                                <label class="form-label">Color</label>
                                                <div class="form-checkbox-box">

                                                    <div class="row" id="color_div">
                                                        <div class=" col-md-6 form-check form-check-inline">
                                                            <input type="color" class="form-control form-control-color"
                                                                id="color" name="colors[]" value="#000000"
                                                                title="Choose your color">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <i class="fa fa-plus btn btn-primary" onclick="addMoreColors()"></i>
                                                        </div>
                                                    </div>

                                                    <div id="more_colors"></div>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Charging Time</label>
                                                <input type="text" class="form-control" name="charging_time" id="price1"
                                                    value="{{ old('charging_time') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Seating Capacity</label>
                                                <input type="number" class="form-control" name="seating_capacity"
                                                    value="{{ old('seating_capacity') }}" id="quantity1">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Distance</label>
                                                <input type="text" class="form-control" name="distance"
                                                    value="{{ old('distance') }}" id="price1">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Battery Capacity</label>
                                                <input type="text" class="form-control" name="battery_capacity"
                                                    value="{{ old('battery_capacity') }}" id="price1">
                                            </div>


                                            <div class="row mt-2">
                                                <div class="col-md-10">
                                                    <label class="form-label">Features</label>
                                                    <input type="text" class="form-control" id="features"
                                                        name="features[]" value="" placeholder=""
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

      for (var year = startYear; year <= endYear; year++) {
        var option = $('<option>', {
          value: year,
          text: year
        });

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
                                        name="features[]" value="" placeholder=""
                                        data-role="tagsinput" />
                                </div>
                                <div class="col-md-1">
                                <span class="btn btn-primary m-b-5 m-t-5" id="addrow"
                                    onclick="return addRows();" style="float: left;"><i class="fa fa-plus"></i></span>
                                </div>
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

<script>
    function addMoreColors(){
        var container = document.getElementById('more_colors');
        var row = document.createElement('div');
        row.classList.add('row');  

        row.innerHTML = `<div class=" col-md-6 form-check form-check-inline">
                                {{-- <input type="checkbox" name="new_colors[]"
                                    value="#000000"> --}}
                                <input type="color" class="form-control form-control-color"
                                    id="color" name="colors[]" value="#000000"
                                    title="Choose your color">
                                </div>
                                <div class="col-md-3">
                                    <span onclick="removeColorRow(this)">
                                        <i class="fa fa-trash btn btn-danger"></i>
                                    </span>
                            </div>`;
                
        container.appendChild(row);
    }

    function removeColorRow(button) {
        // Get the parent row and remove it
        var row = button.closest('.row');
        row.remove();
    }
</script>
@endsection