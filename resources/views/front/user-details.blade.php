@extends('front.layouts.app')
@section('content')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">User Profile</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="user">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="user-content">
                    <div class="user-profile">
                        <img src="{{ asset( $user->image) }}">
                        <h5 class="pt-3">{{ $user->name}}</h5>
                    </div>
                    <div class="user-deatils">
                        <h5 class="pb-4">Contact Information</h5>
                        <div class="mail pb-3">
                            <h6>Email Adress</h6>
                            <p>{{ $user->email}}</p>
                        </div>
                        <div class="number">
                            <h6>Phone Number</h6>
                            <p>{{ $user->phone_number}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-xl-9">
                <div class="profile-content-right profile-right-spacing py-5">
                    <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link color" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings"
                                type="button" role="tab" aria-controls="settings" aria-selected="false">Profile</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#changePass"
                                type="button" role="tab" aria-controls="settings" aria-selected="false">Change
                                Password</button>
                        </li>

                    </ul>

                <div class="tab-content px-3 px-xl-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="tab-pane-content mt-5">
                            <form action="{{route('user_Details_Update', ['id' => $user->id])}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group row mb-6">
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Default file input example</label>
                                            <input class="form-control" type="file" name="image">
                                            <img src="{{ asset($user->image) }}" alt="Your Image" width="100px">
                                        </div>
                                    </div>
                                </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="lastName">Name</label>
                                                <input type="text" class="form-control" id="name" value="{{old('name',$user->name)}}" name="name">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" value="{{old('email',$user->email )}}" name="email" placeholder="Enter Email">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="phone_number">Phone</label>
                                        <input type="number" class="form-control" id="phone_number" value="{{old('number', $user->phone_number)}}" name="number" placeholder="Phone Number">
                                    </div>

                                    <div class="d-flex justify-content-end mt-5">
                                        <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="changePass" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="tab-pane-content mt-5">
                                <form action="{{ route('user_change_Password') }}" method="post">
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="lastName">Old Password</label>
                                                <input type="password" class="form-control" id="old_password"
                                                    name="old_password" placeholder="Enter Old Password" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="lastName">New Password</label>
                                                <input type="password" class="form-control" id="new_password"
                                                    name="new_password" placeholder="Enter New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="lastName">Confirm Password</label>
                                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end mt-5">
                                        <button type="submit" class="btn btn-primary mb-2 btn-pill">Change Password</button>
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
</section>


@endsection