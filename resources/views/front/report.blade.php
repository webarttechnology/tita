@extends('front.layouts.app')
@section('content')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Report</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Report</li>
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
                <form action="{{ route ('report_Store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                                <input type="text" placeholder="Name" class="form-control shadow-none" name="name">
                                <div class="validation-error">
                                    @error('name')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div> 
                        </div>
                      
                        <div class="col-12">
                                <select class="form-control shadow-none form-select" name="installer_id">
                                    <option selected>Choose from here</option>
                                    @foreach ($data as $installers)
                                    <option value="{{$installers->id}}">{{ $installers->name}}</option>
                                    @endforeach
                                </select>                                
                        </div>
                        <div class="validation-error">
                            @error('installer_id')
                                <p>{{ $message }}</p>
                            @enderror
                        </div> 
                       
                        <div class="col-12">
                                <textarea name="message" cols="0" rows="0" class="form-control shadow-none" placeholder="Message"></textarea>
                                <div class="validation-error">
                                    @error('message')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div> 
                        </div>
                        <div class="col-12">
                            <div class="">
                            <input type="submit" value="Submit" class="submitBtn">
                            </div>
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