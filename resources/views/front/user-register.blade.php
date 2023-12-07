@extends('front.layouts.app')
@section('content')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">User Register</h2>
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
                    <p><strong>Customer Details</strong></p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Customer Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="number" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="number" name="number" value="{{old('number')}}">
                            </div>
                        </div>
                        
                        
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="number" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" value="{{old('address')}}"></textarea>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="natid" class="form-label">Customer Drivers ID and NIM</label>
                                <input type="text" class="form-control" id="natid" name="driver_id" value="{{old('driver_id')}}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="proof_of_vehicle" class="form-label">Upload Proof of Vehicle Ownership</label>
                                <input type="file" class="form-control" id="proof_of_vehicle" name="proof_of_vehicle">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" id="password" name="password" >
                            </div>
                        </div>
                        
                        
                       
                        <div class="col-md-12">
                            <p><strong>Vehicle Details</strong></p>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="vehicle_type" class="form-label">Vehicle Type</label>

                                <select name="vehicle_type" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Heavy Duty Trucks">Heavy Duty Trucks</option>
                                    <option value="Mini Truck">Mini Truck</option>
                                    <option value="Bus">Bus</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Sedan">Sedan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="vehicle_year" class="form-label">Year</label>
                                <input type="text" class="form-control" id="vehicle_year" name="vehicle_year" value="{{old('vehicle_year')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="vehicle_make" class="form-label">Make</label>
                                <input type="text" class="form-control" id="vehicle_make" name="vehicle_make" value="{{old('vehicle_make')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="vehicle_model" class="form-label">Model</label>
                                <input type="text" class="form-control" id="vehicle_model" name="vehicle_model" value="{{old('vehicle_model')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="engine_power" class="form-label">Engine Power</label>
                                <input type="text" class="form-control" id="engine_power" name="engine_power" value="{{old('engine_power')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="engine_capacity" class="form-label">Engine Capacity</label>
                                <input type="text" class="form-control" id="engine_capacity" name="engine_capacity" value="{{old('engine_capacity')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="injection_type" class="form-label">Injection Type</label>
                                <input type="text" class="form-control" id="injection_type" name="injection_type" value="{{old('injection_type')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Zip" class="form-label">VIN number</label>
                                <input type="number" class="form-control" id="vin_number" name="vin_number" value="{{old('vin_number')}}">
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