@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <h1>Update Product</h1>
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
                      <form class="separate-form" method="POST" action="{{ route('blog_update', ['id' => $data->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                    <div class="col-md-12">
                      <label class="form-label">Title:</label>
                      <input type="text" class="form-control slug-title" name="heading" value="{{ old('heading', $data->title) }}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Sub Description:</label>
                      <textarea class="form-control" name="sub_description" rows="10" cols="100">{{old('sub_description', $data->sub_description)}}</textarea>
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Image:</label>
                      <input class="form-control" type="file" name="image">
                      <img src="{{ asset($data->image) }}" alt="Your Image" width="100px">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Select Categories</label>
                      <select id="Categories" class="form-select" name="category">
                        {{-- <optgroup label="Electronic"> --}}
                          <option value="">Select</option>
                          <option value="phone">I Phone</option>
                          <option value="laptop">Laptop</option>
                        {{-- </optgroup> --}}
                      </select>
                    </div>
     
                    <div class="col-md-12">
                      <label class="form-label">Description</label> 
                      <textarea class="form-control" name="description" id="file-picker" rows="15" cols="150">{{old('sub_description', $data->description)}}</textarea>
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Meta Title:</label>
                      <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title',$data->meta_title) }}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Meta Description:</label>
                      <input type="text" class="form-control" name="meta_description" value="{{ old('meta_description',$data->meta_description) }}">
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