@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <center>  <h1>Home Page Banner Sections</h1> </center>
      </div>
      <div>
        <a href="{{route ('admin.home_banner')}}" class="btn btn-primary"> View All</a>
      </div>
    </div>

    <div class="append-row">
      <div class="row"> 
          <div class="card card-default">
            <div class="card-body">
              <div class="ec-vendor-uploads">
                <div class="col-lg-12">
                  <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{route ('admin.home_banner_store')}}" enctype="multipart/form-data">
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
                        <label class="form-label">Estimated Range:</label>
                        <input type="text" class="form-control slug-title" name="range" value="{{ old('range') }}">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Timing:</label>
                        <input type="text" class="form-control slug-title" name="timing" value="{{ old('timing') }}">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Battery:</label>
                        <input type="text" class="form-control slug-title" name="battery" value="{{ old('battery') }}">
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {{-- <button type="submit" class="btn btn-success" id="add-new">Add New</button> --}}
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


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
   $(document).ready(function() {
    $("#add-new").on('click',  function(e)
    {
      e.preventDefault();
      var newAddRow =  $('.new-banner-row').html();
      $('.new-banner-row').html()
      $('.append-row').append(newAddRow);
      alert("click");
    });

        });
</script>