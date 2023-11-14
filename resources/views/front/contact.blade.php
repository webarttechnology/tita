@extends('front.layouts.app')
@section('content')

<!-------- Contact us section --------------->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contactsec py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h2><a href="tel:1234567892">Phone No: 1234567892</a></h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h2><a href="email:info@email.com">Email: info@gmail.com</a></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-contact-area pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="inner-contact-img">
                    <img src="assets/images/contact_img.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="inner-contact-info">
                    <h2 class="title">Our Office Address</h2>
                    <div class="contact-info-item">
                        <h5 class="title-two">USA Office</h5>
                        <ul class="list-wrap">
                            <li>100 Wilshire Blvd, Suite 700 Santa <br> Monica, CA 90401, USA</li>
                            <li>+1 (310) 620-8565</li>
                            <li>info@gmail.com</li>
                        </ul>
                    </div>
                    <div class="contact-info-item">
                        <h5 class="title-two">Australia Office</h5>
                        <ul class="list-wrap">
                            <li>100 Wilshire Blvd, Suite 700 Santa <br> Monica, CA 90401, USA</li>
                            <li>+1 (310) 620-8565</li>
                            <li>info@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cntctfrmsct">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="cform">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-md-12 justify-content-center align-items-center">
                            <div class="mb-3">
                                <label>Contact Number</label>
                                <input type="tel" class="form-control" placeholder="Contact Number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 text">
                                <label>Send Message</label>
                                <textarea name="" id="" class="form-control area"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="mt-3">
                                <div class="apntbtn">
                                    <a href="#" class="sbmtbtn">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bookmaps">
                    <div class="address">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14736.291556012899!2d88.4236832353367!3d22.576377035318565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275b020703c0d%3A0xece6f8e0fc2e1613!2sSector%20V%2C%20Bidhannagar%2C%20Kolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1698312623276!5m2!1sen!2sin"
                            style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------- Contact us section End--------------->



<!--- footer -->
@endsection