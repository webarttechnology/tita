@extends('front.layouts.app')
@section('content')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">User Registration</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Registration</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======== Tanmoy ======== -->
<!-- register  -->
<section class="registerSec">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <img src="{{asset('assets/images/report.jpg')}}" alt="" class="w-100">
            </div>
            <div class="col-md-6">
                <form action="{{ route ('user_Registration_Store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <input type="text" placeholder="Name" class="form-control shadow-none" name="name" value="{{old('name')}}">
                                <div class="validation-error">
                                    @error('name')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div> 
                        </div>

                        <div class="col-12">
                            <input type="email" placeholder="Email" class="form-control shadow-none" name="email" value="{{old('email')}}">
                                <div class="validation-error">
                                    @error('email')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div> 
                        </div> 
                        
                        <div class="col-12">
                            <input type="number" placeholder="Number" class="form-control shadow-none" name="number" value="{{old('number')}}">
                                <div class="validation-error">
                                    @error('number')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div> 
                        </div> 
                       
                        <div class="col-12">
                            <input type="password" placeholder="Password" class="form-control shadow-none" name="password">
                                <div class="validation-error">
                                    @error('password')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div> 
                        </div>

                        <div class="col-12">
                            <input class="form-control shadow-none" type="file" id="image" name="image">
                            <div class="validation-error">
                                @error('image')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div> 
                          </div>

                        <div class="col-12">
                            <input type="submit" value="Submit" class="submitBtn">
                        </div>

                        <div>
                            @if(Session::has('message'))
                                <p style="color: green">{{ Session::get('message') }}</p>
                            @endif
                        </div>
                    </div>

                </form>
            </div>
        </div>
            
        </div>
</section>


@endsection