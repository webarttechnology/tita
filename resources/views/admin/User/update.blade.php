@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <h1>Add Product</h1>
      </div>
      <div>
        <a href="{{route ('blog')}}" class="btn btn-primary"> View All</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card card-default">
          <div class="card-body">
            <div class="row ec-vendor-uploads">
              <div class="col-lg-12">
                <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{route ('user_store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                      <label class="form-label">Name:</label>
                      <input type="text" class="form-control slug-title" name="name" value="{{old('name')}}">                      
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Email:</label>
                      <input type="email" class="form-control slug-title" name="email" value="{{old('email')}}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Number:</label>
                      <input type="text" class="form-control slug-title" name="number" value="{{old('number')}}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Password:</label>
                      <input type="password" class="form-control slug-title" name="password" value="{{old('password')}}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Confirmed Password:</label>
                      <input type="password" class="form-control slug-title" name="password_confirmation" value="{{old('password_confirmation')}}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Image:</label>
                      <input class="form-control" type="file" name="image">
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