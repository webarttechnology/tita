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
                      <form class="separate-form" method="POST" action="{{route ('admin.whyUs_update', ['id' => $data->id])}}" enctype="multipart/form-data">
                   @method('PUT') 
                   @csrf

                    <div class="col-md-6">
                      <label class="form-label">Title:</label>
                      <input type="text" class="form-control slug-title" name="heading" value="{{ old('heading', $data->title) }}">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Number:</label>
                      <input type="number" class="form-control slug-title" name="number" value="{{ old('number', $data->number) }}">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label">Image:</label>
                      <input class="form-control" type="file" name="image">
                      <img src="{{asset('images/WhyChooseUs/'. $data->image)}}" alt="">
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