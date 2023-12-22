@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <center>  <h1>Contact Page Banner Sections</h1> </center>
      </div>
      <div>
        <a href="{{route ('admin.contctUs')}}" class="btn btn-primary"> View All</a>
      </div>
    </div>

    <div class="append-row">
      <div class="row"> 
          <div class="card card-default">
            <div class="card-body">
              <div class="ec-vendor-uploads">
                <div class="col-lg-12">
                  <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{route ('admin.contctUs_update', ['id' => $data->id])}}" enctype="multipart/form-data">
                      @method('PUT')   @csrf
                      <div class="col-md-6">
                        <label class="form-label">Address:</label>
                        <input type="text" class="form-control slug-title" name="address" value="{{ old('address', $data->address) }}">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Phone:</label>
                        <input type="text" class="form-control slug-title" name="phone_one" value="{{ old('phone_one', $data->phone_one) }}">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Phone-2:</label>
                        <input type="text" class="form-control slug-title" name="phone_two" value="{{ old('phone_two', $data->phone_two) }}">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Email:</label>
                        <input type="text" class="form-control slug-title" name="email" value="{{ old('email', $data->email) }}">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Company Name:</label>
                        <input type="text" class="form-control slug-title" name="company_name" value="{{ old('company_name', $data->company_name) }}">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Company Address:</label>
                        <input type="text" class="form-control slug-title" name="company_address" value="{{ old('company_address', $data->company_address) }}">
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