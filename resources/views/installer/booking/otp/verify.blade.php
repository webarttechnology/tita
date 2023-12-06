@extends('installer.layout.app')
@section('content')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>Verify Otp</h1>
            </div>
        </div>
        <div class="card bg-white profile-content">
            <div class="row">

                <div class="col-lg-12 col-xl-12">
                    <div class="profile-content-right profile-right-spacing py-5">
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="changePass" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form action="{{ url('installer/otp/check/action') }}" method="post">
                                        @csrf

                                        <input type="hidden" name="booking_id" value="{{ $booking_id }}">
                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="lastName">Enter Otp</label>
                                                    <input type="number" class="form-control" id="otp"
                                                        name="otp" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Verify</button>
                                            <a href="{{ url('installer/otp/resend', $booking_id) }}" class="btn btn-link text-decoration-none">Resend OTP</a>
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