@extends('front.layouts.app')
@section('content')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Installer Register</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- register  -->
<section class="registerSec">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <form action="{{ route ('installer_registration')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    <p><strong>Applicant Personal Detail</strong></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fname" class="form-label">First name</label>
                                <input type="text" class="form-control" id="fname" name="f_name" value="{{old('f_name')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="mname" class="form-label">Mid name</label>
                                <input type="text" class="form-control" id="mname" name="m_name" value="{{old('m_name')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lname" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lname" name="l_name" value="{{old('l_name')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phoneno" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phoneno" name="number" value="{{old('number')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="natid" class="form-label">National Identification No</label>
                                <input type="text" class="form-control" id="natid" name="national_identification_no" value="{{old('national_identification_no')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="resiaddress" class="form-label">Residential Address</label>
                                <input type="text" class="form-control" id="resiaddress" name="residental_address" value="{{old('residental_address')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="occupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="occupation" name="ocupation" value="{{old('ocupation')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" id="password" name="password" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="passport" class="form-label">Upload Passport Photo</label>
                                <input class="form-control" type="file" id="passport" name="passport_photo" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="idcard" class="form-label">Upload National ID Card</label>
                                <input class="form-control" type="file" id="idcard" name="national_id_card">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="driverlicense" class="form-label">Upload Valid Drivers License</label>
                                <input class="form-control" type="file" id="driverlicense" name="drivers_license">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p><strong>Applicant Company Detail</strong></p>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="companyname" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="companyname" name="company_name" value="{{old('company_name')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="cacreg" class="form-label">CAC Registration #</label>
                                <input type="text" class="form-control" id="cacreg" name="cac_registration" value="{{old('cac_registration')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="streetno" class="form-label">Street no</label>
                                <input type="text" class="form-control" id="streetno" name="street_no" value="{{old('street_no')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="blockorplot" class="form-label">Block or Plot</label>
                                <input type="text" class="form-control" id="blockorplot" name="plot" value="{{old('plot')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="streetname" class="form-label">Street name</label>
                                <input type="text" class="form-control" id="streetname" name="street_name" value="{{old('street_name')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Zip" class="form-label">Zip</label>
                                <input type="number" class="form-control" id="zip" name="zip" value="{{old('zip')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-theme">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            {{-- <div class="col-md-6">
                <img src="{{asset('assets/images/register.jpg')}}" alt="" class="w-100">
            </div> --}}
        </div>
            
        </div>
</section>
@endsection