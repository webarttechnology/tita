@extends('front.layouts.app')
@section('content')


<!-- register  -->
<section class="registerSec">
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Request Proof of Concept</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Request Proof of Concept</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <section class="request">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form">
                        <h2>Request Proof of Concept</h2>
                        <form action="{{ route ('report_Store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="c-name" class="form-label">Installer name</label>
                                <select class="form-select" aria-label="vehicle-type" id="installer_id" name="installer_id">
                                  <option selected>Selected</option>
                                   @foreach ($data as $installers)
                                    <option value="{{$installers->id}}">{{ $installers->name}}</option>
                                    @endforeach
                                </select>    
                            </div>
                            <div class="mb-3">
                                <label for="c-name" class="form-label">Company name</label>
                                <input type="text" class="form-control" id="c-name" name="company_name">
                            </div>
                            <div class="mb-3">
                                <label for="contact-name" class="form-label">Contact name</label>
                                <input type="text" class="form-control" id="contact-name" name="contact_name">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone number</label>
                                <input type="text" class="form-control" id="phone" name="phone_number">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="Address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="Address" name="address">
                            </div>
                            <div class="mb-3">
                                <label for="vehicle-type " class="form-label">Vehicle Type</label>
                                <select class="form-select" aria-label="vehicle-type" id="vehicle-type" name="vehical_type">
                                    <option selected>Select number range</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="make " class="form-label">Make</label>
                                <select class="form-select" aria-label="make" id="make" name="make">
                                    <option selected>Select make</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Model" class="form-label">Model</label>
                                <input type="text" class="form-control" id="Model" name="model">
                            </div>
                            <div class="mb-3">
                                <label for="Year" class="form-label">Year</label>
                                <input type="text" class="form-control" id="Year" name="year">
                            </div>   
    
                           
                            <div class="mb-3">
                                <label for="street-no" class="form-label">Street no</label>
                                <input type="text" class="form-control" id="street-no" name="company_street_no">
                            </div>
                            <div class="mb-3">
                                <label for="block-or-plot" class="form-label">Block or Plot</label>
                                <input type="text" class="form-control" id="block-or-plot" name="company_block">
                            </div>
                            <div class="mb-3">
                                <label for="street-name" class="form-label">Street name</label>
                                <input type="text" class="form-control" id="street-name" name="company_street_name">
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="company_city">
                            </div>
                            <div class="mb-3">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control" id="state" name="company_state">
                            </div>
                            <div class="mb-3">
                                <label for="additional" class="form-label">Additional Details</label>
                                <textarea class="form-control" id="additional" rows="3" name="additional_details"></textarea>
                            </div>    
                            <div class="mb-3">
                                <button type="submit" class="btn btn-theme">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection