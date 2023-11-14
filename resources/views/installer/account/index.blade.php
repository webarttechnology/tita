@extends('installer.layout.app')
@section('content')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>Installer Profile</h1>
                <p class="breadcrumbs"><span><a href="{{ url('installer/') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Profile
                </p>
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
                                   <img src="{{ asset('uploads/installer/'.Auth::guard('installer')->user()->profile_img) }}" alt="user image">
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
                        </ul>
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">

                            <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form action="{{ url('installer/edit/profile') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row mb-6">
                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User
                                                Image</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <div class="custom-file mb-1">
                                                    <input type="file" name="img" class="custom-file-input" id="coverImage">
                                                    <label class="custom-file-label" for="coverImage">Choose
                                                        file...</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-2">

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="lastName">Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        value="{{ Auth::guard('installer')->user()->name }}"
                                                        name="name">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                value="{{ Auth::guard('installer')->user()->email }}" name="email">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="phone_number">Phone</label>
                                            <input type="number" class="form-control" id="phone_number"
                                                value="{{ Auth::guard('installer')->user()->phone_number }}"
                                                name="phone_number">
                                        </div>


                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update
                                                Profile</button>
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
                                                    <input type="password" class="form-control" id="old_password" name="old_password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="lastName">New Password</label>
                                                    <input type="password" class="form-control" id="new_password" name="new_password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="lastName">Confirm Password</label>
                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
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

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->

@endsection