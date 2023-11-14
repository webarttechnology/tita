@extends('front.layouts.app')
@section('content')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Register</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
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
                <form action="{{ route ('installer_registration')}}" method="POST">
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
                            <input type="email" placeholder="Email" class="form-control shadow-none" name="email">
                                <div class="validation-error">
                                    @error('email')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-12">
                            <input type="number" placeholder="Phone No." class="form-control shadow-none" name="number">
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
                            <input type="submit" value="Submit" class="submitBtn">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/images/register.jpg')}}" alt="" class="w-100">
            </div>
        </div>
            
        </div>
</section>
<!-- register END -->
<!-- ======== Tanmoy END ======== -->


@endsection