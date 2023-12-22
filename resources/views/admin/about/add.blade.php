@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <h1>Add</h1>
      </div>
      <div>
        <a href="{{route ('admin.about')}}" class="btn btn-primary"> View All</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card card-default">
          <div class="card-body">
            <div class="row ec-vendor-uploads">
              <div class="col-lg-12">
                <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{route ('admin.about_store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                      <label class="form-label">Heading:</label>
                      <input type="text" class="form-control slug-title" name="heading" value="{{ old('heading') }}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Description:</label>
                      <textarea class="form-control" name="description" rows="10" cols="100"></textarea>
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Image:</label>
                      <input class="form-control" type="file" name="image">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">we_are_heading:</label>
                        <input type="text" class="form-control slug-title" name="we_are_heading" value="{{ old('we_are_heading') }}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">we_are_description:</label>
                      <input type="text" class="form-control" name="we_are_description" value="{{ old('we_are_description') }}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">we_are_not_heading:</label>
                      <input type="text" class="form-control" name="we_are_not_heading" value="{{ old('we_are_not_heading') }}">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">we_are_not_description:</label>
                        <input type="text" class="form-control" name="we_are_not_description" value="{{ old('we_are_not_description') }}">
                      </div>
                      <div class="col-md-12">
                        <label class="form-label">what_we_do_heading:</label>
                        <input type="text" class="form-control" name="what_we_do_heading" value="{{ old('what_we_do_heading') }}">
                      </div>
                      <div class="col-md-12">
                        <label class="form-label">what_we_do_description:</label>
                        <input type="text" class="form-control" name="what_we_do_description" value="{{ old('what_we_do_description') }}">
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

@stop