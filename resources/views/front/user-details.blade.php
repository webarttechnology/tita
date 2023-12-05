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
                            <p style="word-wrap: break-word;">{{ $user->email}}</p>
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
                            <button class="nav-link @if($page == null) color @endif" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings"
                                type="button" role="tab" aria-controls="settings" aria-selected="false">Profile</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#changePass"
                                type="button" role="tab" aria-controls="settings" aria-selected="false">Change
                                Password</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if($page != null) color @endif" id="settings-tab" data-bs-toggle="tab" data-bs-target="#bookingHistory"
                                type="button" role="tab" aria-controls="settings" aria-selected="false">Booking History</button>
                        </li>
                    </ul>

                <div class="tab-content px-3 px-xl-5" id="myTabContent">
                    <div class="tab-pane fade @if($page == null) show active @else fade @endif" id="settings" role="tabpanel" aria-labelledby="settings-tab">
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

                        <div class="tab-pane @if($page != null) show active @else fade @endif" id="bookingHistory" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="tab-pane-content mt-5">
                                <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Zip</th>
                                        <th scope="col">Booking For</th>
                                        <th scope="col">Installer</th>
                                        <th scope="col">Payment Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    
                                     @foreach($bookings as $key => $booking)   
                                        <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $booking->date }}</td>
                                        <td>{{ $booking->time }}</td>
                                        <td>{{ $booking->zip }}</td>
                                        <td>{{ $booking->cng->title }}</td>
                                        <td>
                                            @if($booking->installer_id != null)
                                                <a href="javascript:void(0);" onclick="viewInstallerDetails({{ $booking->installer_id }});" class="btn btn-dark btn-sm" 
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">Details</a>
                                            @else
                                                 <p>N/A</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if($booking->status != null)
                                               <label class="badge bg-success">PAID</label>
                                            @else
                                               <label class="badge bg-danger">NOT PAID</label>
                                            @endif
                                        </td>
                                        </tr>
                                     @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-end">
                                {{ $bookings->links() }}
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="exampleModalLabel">Installer Details</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="p-2">
                <p class="fw-bold mb-0"><strong>Name:</strong> <span class="text-primary ms-2" id="installer_name"></span></p>
                <p class="fw-bold mb-0"><strong>Email:</strong> <span class="text-primary ms-2" id="installer_email"></span></p>
                <p class="fw-bold mb-0"><strong>Phone:</strong> <span class="text-primary ms-2" id="installer_phone"></span></p>
            </div>

            {{-- <form>
                <div class="mb-3">
                    <label for="installer_name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="installer_name" readonly>
                </div>
                <div class="mb-3">
                    <label for="installer_email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="installer_email" readonly>
                </div>
                <div class="mb-3">
                    <label for="installer_phone" class="form-label">Phone:</label>
                    <input type="tel" class="form-control" id="installer_phone" readonly>
                </div>
            </form> --}}
        </div>
      </div>
    </div>
  </div>

  <script>
    function viewInstallerDetails(id){
           $.ajax({
                url: '{{url('view/installer/details')}}' + "/" + id,
                type: 'GET',
                dataType: 'json',
                success: function (details) 
                {
                    $('#installer_name').html(details.name);
                    $('#installer_email').html(details.email);
                    $('#installer_phone').html(details.phone_number);
                },
                error: function (error) {
                    console.error('Ajax request failed: ', error);
                }
            });
    }
  </script>
@endsection