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
                        <div class="col-md-5 border-end pe-md-5 py-3">
                            <div class="date">
                                <input type="date" placeholder="date" class="form-control shadow-none">
                            </div>
                        </div>
                        <div class="col-md-5 ps-md-5 py-3">
                            <div class="time">
                                <input type="time" placeholder="time" class="form-control shadow-none">
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
                    <a href="#">Submit Booking <span><img src="assets/images/fast-forward-white.png"
                                class="ms-2"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection