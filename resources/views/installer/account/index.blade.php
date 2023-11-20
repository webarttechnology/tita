@extends('installer.layout.app')

@section('content')

    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Installer Profile</h1>
                </div>
            </div>
            <div class="card bg-white profile-content">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="profile-content-left profile-left-spacing">
                            <div class="text-center widget-profile px-0 border-0">
                                <div class="card-img mx-auto rounded-circle">
                                    @if (Auth::guard('installer')->user()->profile_img == null)
                                        <img src="{{ asset('assets/admin/img/user/u1.jpg') }}" alt="user image">
                                    @else
                                        <img src="{{ asset('uploads/installer/' . Auth::guard('installer')->user()->profile_img) }}"
                                            alt="user image">
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h4 class="py-2 text-dark">{{ Auth::guard('installer')->user()->name }}</h4>
                                    <p>{{ Auth::guard('installer')->user()->email }}</p>
                                </div>
                            </div>

                            <hr class="w-100">
                            <div class="contact-info pt-4">
                                <h5 class="text-dark">Contact Information</h5>
                                <p class="text-dark font-weight-medium pt-24px mb-2">Email address</p>
                                <p>{{ Auth::guard('installer')->user()->email }}</p>
                                <p class="text-dark font-weight-medium pt-24px mb-2">Phone Number</p>
                                <p>{{ Auth::guard('installer')->user()->phone_number }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-9">
                        <div class="profile-content-right profile-right-spacing py-5">
                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                        data-bs-target="#settings" type="button" role="tab" aria-controls="settings"
                                        aria-selected="false">Profile</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                        data-bs-target="#changePass" type="button" role="tab" aria-controls="settings"
                                        aria-selected="false">Change Password</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                        data-bs-target="#locationUpdate" type="button" role="tab"
                                        aria-controls="settings" aria-selected="false">Location</button>                                        
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                        data-bs-target="#zipCollector" type="button" role="tab"
                                        aria-controls="settings" aria-selected="false">Zip</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                        data-bs-target="#bankDetails" type="button" role="tab"
                                        aria-controls="settings" aria-selected="false">Bank Details</button>
                                </li>
                            </ul>
                            <div class="tab-content px-3 px-xl-5" id="myTabContent">

                                <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                    <div class="tab-pane-content mt-5">
                                        <form action="{{ url('installer/edit/profile') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{-- <div class="form-group row mb-6">
                                                <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                                                <div class="col-sm-8 col-lg-10">
                                                    <div class="custom-file mb-1">
                                                        <input type="file" name="img" class="custom-file-input"  id="coverImage">
                                                        <label class="custom-file-label" for="coverImage">Choose file...</label>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <div class="row mb-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="lastName">Name</label>
                                                        <input type="text" 
                                                            class="form-control" 
                                                            id="name" 
                                                            value="{{ Auth::guard('installer')->user()->name }}"
                                                            name="name">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group mb-4">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" value="{{ Auth::guard('installer')->user()->email }}" name="email">
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="phone_number">Phone</label>
                                                <input type="number" class="form-control" id="phone_number" value="{{ Auth::guard('installer')->user()->phone_number }}"
                                                    name="phone_number">
                                            </div>

                                            <div class="d-flex justify-content-end mt-5">
                                                <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="changePass" role="tabpanel" aria-labelledby="settings-tab">
                                    <div class="tab-pane-content mt-5">
                                        <form action="{{ url('installer/change/password') }}" method="post">
                                            @csrf

                                            <div class="row mb-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="lastName">Old Password</label>
                                                        <input type="password" class="form-control" id="old_password"
                                                            name="old_password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="lastName">New Password</label>
                                                        <input type="password" class="form-control" id="new_password"
                                                            name="new_password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="lastName">Confirm Password</label>
                                                        <input type="password" class="form-control" id="confirm_password"
                                                            name="confirm_password">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end mt-5">
                                                <button type="submit" class="btn btn-primary mb-2 btn-pill">Change
                                                    Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="locationUpdate" role="tabpanel" aria-labelledby="location-tab">
                                    <div class="tab-pane-content mt-5">
                                        @if ($location == null)
                                            <form action="{{ url('installer/location-save', 'save') }}" method="post" enctype="multipart/form-data">
                                                @else
                                            <form action="{{ url('installer/location-save', 'update') }}"method="post" enctype="multipart/form-data">
                                        @endif
                                        @csrf

                                            <div class="row mb-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="lastName">Street No *</label>
                                                        <input type="text" class="form-control" id="street_no" name="street_no"  value="@if ($location != null) {{ $location->street_no }} @endif">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="lastName">Block or Plot</label>
                                                        <input type="text" class="form-control" id="plot"name="plot" value="@if ($location != null) {{ $location->plot }} @endif">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="lastName">Street Name *</label>
                                                        <input type="text" class="form-control" id="street_name" name="street_name"  value="@if ($location != null) {{ $location->street_name }} @endif">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="lastName">State *</label>
                                                        <input type="text" class="form-control" id="state"
                                                            name="state"
                                                            value="@if ($location != null) {{ $location->state }} @endif">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="lastName">City *</label>
                                                        <input type="text" class="form-control" id="city"  name="city"  value="@if ($location != null) {{ $location->city }} @endif">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="lastName">Zip *</label>
                                                        <input type="text" class="form-control" id="zip" name="zip" value="@if ($location != null) {{ $location->zip }} @endif">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary mb-2 btn-pill">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="zipCollector" role="tabpanel" aria-labelledby="location-tab">
                                    <div class="tab-pane-content mt-5">
                                            <form action="{{ url('installer/zip-save') }}" method="post">
                                        @csrf
                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="Zip">Zip *</label>
                                                    <input type="text" class="form-control" id="zip_collector" name="zip" value='{{$zip_string}}' >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill"> Save</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="bankDetails" role="tabpanel" aria-labelledby="location-tab">
                                    <div class="tab-pane-content mt-5">
                                            @if ($bank_details == null)
                                                <form action="{{ url('installer/bank-save', 'save') }}" method="post">
                                                    @else
                                                <form action="{{ url('installer/bank-save', 'update') }}"method="post">
                                            @endif
                                        @csrf
                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="Zip">Card Holder Name *</label>
                                                    <input type="text" class="form-control" id="card_holder_name" name="card_holder_name" value="@if ($bank_details != null) {{ $bank_details->card_holder_name }} @endif" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Card Number *</label>
                                                    <input type="text" minlength="16" maxlength="16" class="form-control" id="card_number" name="card_number" value="@if ($bank_details != null){{ $bank_details->card_number }}@endif" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Cvv *</label>
                                                    <input maxlength="4" minlength="3" type="text" class="form-control" id="cvv" name="cvv" value="@if ($bank_details != null){{ $bank_details->cvv }}@endif" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Expiry Month *</label>
                                                    <select class="form-control" id="expiry_month" name="expiry_month">
                                                        <option value="01" {{ $bank_details != null && $bank_details->expiry_month == '01' ? 'selected' : '' }}  >January</option>
                                                        <option value="02" {{ $bank_details != null && $bank_details->expiry_month == '02' ? 'selected' : '' }} >February</option>
                                                        <option value="03" {{ $bank_details != null && $bank_details->expiry_month == '03' ? 'selected' : '' }} >March</option>
                                                        <option value="04" {{ $bank_details != null && $bank_details->expiry_month == '04' ? 'selected' : '' }} >April</option>
                                                        <option value="05" {{ $bank_details != null && $bank_details->expiry_month == '05' ? 'selected' : '' }} >May</option>
                                                        <option value="06" {{ $bank_details != null && $bank_details->expiry_month == '06' ? 'selected' : '' }} >June</option>
                                                        <option value="07" {{ $bank_details != null && $bank_details->expiry_month == '07' ? 'selected' : '' }} >July</option>
                                                        <option value="08" {{ $bank_details != null && $bank_details->expiry_month == '08' ? 'selected' : '' }} >August</option>
                                                        <option value="09" {{ $bank_details != null && $bank_details->expiry_month == '09' ? 'selected' : '' }} >September</option>
                                                        <option value="10" {{ $bank_details != null && $bank_details->expiry_month == '10' ? 'selected' : '' }} >October</option>
                                                        <option value="11" {{ $bank_details != null && $bank_details->expiry_month == '11' ? 'selected' : '' }} >November</option>
                                                        <option value="12" {{ $bank_details != null && $bank_details->expiry_month == '12' ? 'selected' : '' }} >December</option>
                                                    </select>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Expiry Year *</label>
                                                    <select class="form-control" id="expiry_year" name="expiry_year">
                                                        @php
                                                        $currentYear = date("Y");
                                                        
                                                        for ($year = $currentYear; $year <= $currentYear + 10; $year++) {
                                                            if( !empty($bank_details) && $bank_details->expiry_year == $year )
                                                            {
                                                                echo "<option selected value=\"$year\">$year</option>";
                                                            } else {
                                                                echo "<option value=\"$year\">$year</option>";
                                                            }
                                                        }
                                                        @endphp
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill"> Save</button>
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

@section('custom_js')
<script>
    var input = document.querySelector('#zip_collector');
    new Tagify(input);
</script>
@endsection
