@extends('admin.layout.app')
@section('content')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Edit Kits</h1>
            </div>
            <div>
                <a href="{{ url('admin/cng/list') }}" class="btn btn-primary"> View All</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row ec-vendor-uploads">
                            <div class="col-lg-12">
                                <div class="ec-vendor-upload-detail">
                                    <form class="separate-form" method="POST" action="{{ url('admin/cng/edit/action', $cng->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-md-12">
                                            <label class="form-label">Title:</label>
                                            <input type="text" class="form-control slug-title" name="title"
                                                value="{{ $cng->title }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Description:</label>
                                            <textarea class="form-control" name="description" id="description" rows="10"
                                                cols="100">{!! $cng->description !!}</textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Price:</label>
                                            <input type="number" class="form-control slug-title" name="price"
                                                value="{{ $cng->price }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Image:</label>
                                            <img src="{{ asset('uploads/cng/'.$cng->image) }}" class="mb-2" alt="img" height="150" width="125">
                                            <input class="form-control" type="file" name="image">
                                        </div>


                                        <div class="col-md-12">
                                            <label class="form-label">Kit Type:</label>
                                            <input type="text" class="form-control slug-title" name="kit_type"
                                                value="{{ $cng->kit_type }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Vehicle Name:</label>
                                            <input type="text" class="form-control slug-title" name="vehicle_name"
                                                value="{{ $cng->vehicle_name }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Useage/Application:</label>
                                            <input type="text" class="form-control slug-title" name="application"
                                                value="{{ $cng->application }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Vehicle Type:</label>

                                            <select class="form-control slug-title" name="vehicle_type">
                                                <option value="">Select</option>
                                                @foreach ($vehicleType as $type)
                                                    <option value="{{ $type->type }}" @if($type->type == $cng->vehicle_type) selected @endif>{{ $type->type }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Brand:</label>
                                            <input type="text" class="form-control slug-title" name="brand"
                                                value="{{ $cng->brand }}">
                                        </div>
                                        
                                        @foreach ($cng->product as $key => $prod)    
                                        <div class="row">
                                            <div class="col-md-10">
                                                @if($key == 0)
                                                  <label class="form-label">Feature:</label>
                                                @endif
                                                <input type="text" class="form-control slug-title" name="features[]"
                                                    value="{{ $prod->features }}">
                                            </div>
                                            <div class="col-md-2 mt-2">
                                                @if($key == 0)
                                                <a href="javascript:void(0)" id="add-row"><i class="fa fa-plus"></i></a>
                                                @endif
                                                <a href="{{ url('admin/cng/delete/features', $prod->id) }}" onclick="return confirm('Are you sure you want to delete this record?')" id="delete-row"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        @endforeach


                                        <div class="rows-container">
                                            <!-- Existing rows go here -->
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('description');
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Handle click on "plus" icon
        $('#add-row').on('click', function (e) {
            e.preventDefault();

            // Clone the template row
            var newRow = '\
                <div class="row" id="row-template">\
                    <div class="col-md-10">\
                        <input type="text" class="form-control slug-title" name="newFeatures[]" >\
                    </div>\
                    <div class="col-md-2 mt-2">\
                        <a href="#" class="remove-row"><i class="fa fa-minus"></i></a>\
                    </div>\
                </div>';

            // var newRow = $('#row-template').clone().removeAttr('id').show();

            // Append the new row to the container
            $('.rows-container').append(newRow);
        });

        // Handle click on "minus" icon
        $('.rows-container').on('click', '.remove-row', function (e) {
            e.preventDefault();

            // Remove the clicked row
            $(this).closest('.row').remove();
        });
    });
</script>
@stop