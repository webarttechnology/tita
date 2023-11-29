@extends('admin.layout.app')
@section('content')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Add Kits</h1>
            </div>
            <div>
                <a href="{{ url('admin/clg/list') }}" class="btn btn-primary"> View All</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row ec-vendor-uploads">
                            <div class="col-lg-12">
                                <div class="ec-vendor-upload-detail">
                                    <form class="separate-form" method="POST" action="{{route ('blog_store')}}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <label class="form-label">Title:</label>
                                            <input type="text" class="form-control slug-title" name="heading"
                                                value="{{ old('heading') }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Description:</label>
                                            <textarea class="form-control" name="description" id="description" rows="10"
                                                cols="100">{!! old('description') !!}</textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Image:</label>
                                            <input class="form-control" type="file" name="image">
                                        </div>



                                        <div class="col-md-12">
                                            <label class="form-label">Kit Type:</label>
                                            <input type="text" class="form-control slug-title" name="kit_type"
                                                value="{{ old('kit_type') }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Vehicle Name:</label>
                                            <input type="text" class="form-control slug-title" name="vehicle_name"
                                                value="{{ old('vehicle_name') }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Useage/Application:</label>
                                            <input type="text" class="form-control slug-title" name="application"
                                                value="{{ old('application') }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Vehicle Type:</label>

                                            <select class="form-control slug-title" name="vehicle_type">
                                                <option value="">Select</option>
                                                @foreach ($vehicleType as $type)
                                                    <option value="{{ $type->type }}">{{ $type->type }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Brand:</label>
                                            <input type="text" class="form-control slug-title" name="brand"
                                                value="{{ old('brand') }}">
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-10">
                                                <label class="form-label">Feature:</label>
                                                <input type="text" class="form-control slug-title" name="brand"
                                                    value="{{ old('brand') }}">
                                            </div>
                                            <div class="col-md-2 mt-2">
                                                <a href="javascript:void(0)" id="add-row"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>


                                        <div class="row" id="row-template" style="display: none;">
                                            <div class="col-md-10">
                                                <input type="text" class="form-control slug-title" name="brand[]" value="{{ old('brand') }}">
                                            </div>
                                            <div class="col-md-2 mt-2">
                                                <a href="#" class="remove-row"><i class="fa fa-minus"></i></a>
                                            </div>
                                        </div>

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
            var newRow = $('#row-template').clone().removeAttr('id').show();

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