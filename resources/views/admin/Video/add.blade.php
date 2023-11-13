@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <h1>Add Video</h1>
      </div>
      <div>
        <a href="{{route ('video')}}" class="btn btn-primary"> View All</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card card-default">
          <div class="card-body">
            <div class="row ec-vendor-uploads">
              <div class="col-lg-12">
                <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{route ('video_store')}}" >
                    @csrf
                    <div class="col-md-12">
                      <label class="form-label">Title:</label>
                      <input type="text" class="form-control" name="heading" value="{{ old('heading') }}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Video link:</label>
                      <input class="form-control" name="video_link" value="{{ old('video_link') }}">
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