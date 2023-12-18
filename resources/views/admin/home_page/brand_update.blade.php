@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <center> <h1> Home Page Brand Sections</h1> </center>
      </div>
      <div>
        <a href="{{route ('admin.home_brand')}}" class="btn btn-primary"> View All</a>
      </div>
    </div>
      <div class="row"> 
          <div class="card card-default">
            <div class="card-body">
              <div class="ec-vendor-uploads">
                <div class="col-lg-12">
                  <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{route ('admin.brand_update', ['id' => $data->id ])}}" enctype="multipart/form-data">
                     @method('PUT')
                      @csrf  
                      <div class="append-row">                    
                        <div class="col-md-6">
                          <label class="form-label">Image:</label>
                          <input class="form-control" type="file" name="image">
                          <img src="{{ asset('images/home/benifits/'. $data->image) }}" width="250px">
                        </div>
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
@stop

