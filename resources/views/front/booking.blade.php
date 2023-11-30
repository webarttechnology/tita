@extends('front.layouts.app')
@section('content')

<section class="bookingsec">
    <div class="innerhdng">
        <div class="container">
            <h1>Products Bookings</h1>
        </div>
    </div>
    <div class="bookdate">
        <div class="container">
            <div class="cards col-lg-10 mx-auto">
                <form action="">
                    <div class="row datetime">
                        <div class="col-md-3 border-end pe-md-5 py-3">
                            <div class="date">
                                <input type="date" placeholder="date" name="date" id="date" min="{{ date('Y-m-d') }}" value="{{ old('date') }}" class="form-control shadow-none">
                            </div>
                        </div>
                        <div class="col-md-3 ps-md-5 py-3">
                            <div class="time">
                                <input type="time" placeholder="time" name="time" id="time" value="{{ old('time') }}" class="form-control shadow-none">
                            </div>
                        </div>
                        <div class="col-md-3 ps-md-5 py-3">
                            <div class="zip">
                                <input type="number" placeholder="Zip" name="zip" id="zip" value="{{ old('zip') }}" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-md-12">
                <div class="bookmaps">
                    <div class="address">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14736.291556012899!2d88.4236832353367!3d22.576377035318565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275b020703c0d%3A0xece6f8e0fc2e1613!2sSector%20V%2C%20Bidhannagar%2C%20Kolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1698312623276!5m2!1sen!2sin"
                            style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="bookbtn">
                    <a href="javascript:void(0)" onclick="bookingSubmit()">Submit Booking <span><img src="assets/images/fast-forward-white.png"
                                class="ms-2"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function bookingSubmit(){
            let date = $('#date').val();
            let time = $('#time').val();
            let zip = $('#zip').val();

            // Check if any of the fields are empty
            if (date === '' || time === '' || zip === '') {
                alert('Date, Time & Zip Fields are Required');
                return;
            }

            window.location.href = "booking/action/"+date+'/'+time+'/'+zip;
    }
</script>
@endsection