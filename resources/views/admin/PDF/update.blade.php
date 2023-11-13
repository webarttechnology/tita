@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <h1>Update Video</h1>
      </div>
      <div>
        <a href="{{route ('admin.pdf')}}" class="btn btn-primary"> View All</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card card-default">
          <div class="card-body">
            <div class="row ec-vendor-uploads">
              <div class="col-lg-12">
                <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{route ('pdf_update', ['id' => $data->id])}}" >
                        @method('PUT')
                    @csrf
                    
                    <div class="col-md-12">
                      <label class="form-label">Title:</label>
                      <input type="text" class="form-control" name="heading" value="{{ old('heading', $data->title) }}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">PDF:</label>
                      <input class="form-control" type="file" name="image">
                      <img src="{{ asset($data->pdf) }}" alt="{{ asset($data->title) }}" width="100px">
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