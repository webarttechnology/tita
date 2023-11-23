@extends('admin.layout.app')


@section('content')

<div class="ec-content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
      <div>
        <h1>Update Details</h1>
      </div>
      <div>
        <a href="{{route ('admin.user')}}" class="btn btn-primary"> View All</a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card card-default">
          <div class="card-body">
            <div class="row ec-vendor-uploads">
              <div class="col-lg-12">
                <div class="ec-vendor-upload-detail">
                      <form class="separate-form" method="POST" action="{{route ('user_update', ['id' => $data->id])}}" enctype="multipart/form-data">
                        @method('PUT')
                    @csrf
                    <div class="col-md-12">
                      <label class="form-label">Name:</label>
                      <input type="text" class="form-control slug-title" name="name" value="{{old('name', $data->name)}}">                      
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Email:</label>
                      <input type="email" class="form-control slug-title" name="email" value="{{old('email', $data->email)}}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Number:</label>
                      <input type="text" class="form-control slug-title" name="number" value="{{old('number', $data->phone_number)}}">
                    </div>
                    {{-- <div class="col-md-12">
                      <label class="form-label">Password:</label>
                      <span> <input type="checkbox" id="showPassword"></span>                
                      <input type="password" class="form-control slug-title" id="password"  name="password" value="{{old('password')}}">                      
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Confirmed Password:</label>
                      <span> <input type="checkbox" id="showConfirmedPassword"></span>                
                      <input type="password" class="form-control slug-title" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
                    </div> --}}
                    <div class="col-md-12">
                      <label class="form-label">Image:</label>
                      <input class="form-control" type="file" name="image">
                      <img src="{{ asset('uploads/user/'. $data->image) }}" alt="Your Image" width="100px">
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

@section('custom_js')
<script>
     $(document).ready(function() {
        $('#showPassword').change(function() {
            var passwordField = $('#password');
            var fieldType = passwordField.attr('type');

            // Toggle password visibility
            if (fieldType === 'password') {
                passwordField.attr('type', 'text');
            } else {
                passwordField.attr('type', 'password');
            }
        });

        $('#showConfirmedPassword').change(function() {
            var passwordField2 = $('#password_confirmation');
            var fieldType2 = passwordField2.attr('type');

            // Toggle password visibility
            if (fieldType2 === 'password') {
                passwordField2.attr('type', 'text');
            } else {
                passwordField2.attr('type', 'password');
            }
        });
    });
</script>
@endsection