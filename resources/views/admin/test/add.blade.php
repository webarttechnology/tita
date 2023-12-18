@extends('admin.layout.app')
@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <h1>Add Question</h1>
      </div>
      <div>
        <a href="{{ url('admin/exam/list') }}" class="btn btn-primary"> View All</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card card-default">
          <div class="card-body">
            <div class="row ec-vendor-uploads">
              <div class="col-lg-12">
                <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{ url('admin/exam/add/action') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12">
                      <label class="form-label">Question:</label>
                      <input type="text" class="form-control slug-title" name="question" value="{{old('question')}}">                      
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Option 1:</label>
                      <input type="text" class="form-control slug-title" name="option1" value="{{old('option1')}}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Option 2:</label>
                      <input type="text" class="form-control slug-title" name="option2" value="{{old('option2')}}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Option 3:</label>
                      <input type="text" class="form-control slug-title" name="option3" value="{{old('option3')}}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Option 4:</label>
                      <input type="text" class="form-control slug-title" name="option4" value="{{old('option4')}}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Answer:</label>
                      <select name="answer" class="form-control slug-title" id="answer">
                        <option value="">Select Answer</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                        <option value="option4">Option 4</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Status:</label>
                      <select name="status" class="form-control slug-title" id="status">
                        <option value="">Select Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                      </select>
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
@endsection