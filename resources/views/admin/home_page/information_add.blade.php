@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <center>  <h1>Home Page Information Sections</h1> </center>
      </div>
      <div>
        <a href="{{route ('admin.home_information')}}" class="btn btn-primary"> View All</a>
      </div>
    </div>

    <div class="append-row">
      <div class="row"> 
          <div class="card card-default">
            <div class="card-body">
              <div class="ec-vendor-uploads">
                <div class="col-lg-12">
                  <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{route ('admin.information_store')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="col-md-6">
                        <label class="form-label">Heading:</label>
                        <input type="text" class="form-control slug-title" name="heading" value="{{ old('heading') }}">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Image:</label>
                        <input class="form-control" type="file" name="image">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Icon:</label>
                        <input class="form-control" type="file" name="icon">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Sub Heading:</label>
                        <input type="text" class="form-control slug-title" name="sub_heading" value="{{ old('sub_heading') }}">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Description:</label>
                        <textarea type="text" class="form-control slug-title" name="description" >{{ old('description') }}</textarea>
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
