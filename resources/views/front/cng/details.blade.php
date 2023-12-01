@extends('front.layouts.app')
@section('content')

<!-- Product Details -->
<section class="prdctsec">
    <div class="innerhdng">
        <div class="container">
            <h1><span class="">{{ $detail->vehicle_name }} Repair</span> <br />
                Tools & Equipments > CNG Kit</h1>
        </div>
    </div>
    <div class="card-slider col-md-8 mx-auto">
        <!-- Swiper -->
        <div class="swiper mySwiper2" style="top: -95px;margin-bottom: -154px;">
            <div class="swiper-wrapper">
                {{-- <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="assets/images/Layer 5.png" alt="">
                            </div>
                            <div class="col-md-7 align-self-center pt-5  mt-4">
                                <h5>Petrol Vehicles <span>Conventional
                                        CNG Kit, For Automobiles, Car</span></h5>
                                <h6>Rs 1XXX, <span>Get Latest Price Updates</span></h6>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset('uploads/cng/'.$detail->image) }}" alt="">
                            </div>
                            <div class="col-md-7 align-self-center pt-5 mt-4">
                                <h5>{{ $detail->vehicle_type }} Vehicles <span>Conventional
                                        CNG Kit, For {{ $detail->application }}, Car</span></h5>
                                <h6>${{ $detail->price }}, <span>Get Latest Price Updates</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end me-4 mb-4"
                style="top: -40px; z-index: 99; position: relative; margin-bottom: -10px;">
                <div class="bi bi-chevron-left swiper-button-black"></div>
                <div class="bi bi-chevron-right swiper-button-black ms-4"></div>

                <!-- <div class="swiper-button-next swiper-button-black"></div>
                    <div class="swiper-button-prev swiper-button-black"></div> -->
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
    </div>
    <div class="container-fluid mt-4 pt-2">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="prdcthdng">
                            <h3>Product<span> Specification</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="prdcttitle">
                            <ul class="m-0 p-0">
                                <li>Kit Type</li>
                                <li>Vehicle Name</li>
                                <li>Usage/Application</li>
                                <li>Vehicle Type</li>
                                <li>Brand</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prdcttitle2">
                            <ul class="m-0 p-0">
                                <li>{{ $detail->kit_type }}</li>
                                <li>{{ $detail->vehicle_name }}</li>
                                <li>{{ $detail->application }}</li>
                                <li>{{ $detail->vehicle_type }}</li>
                                <li>{{ $detail->brand }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="cardhdng">
                        <h3>Book An Appointment</h3>
                    </div>
                    <div class="cntnthdng">
                        <h3>{{ $detail->title }}</h3>
                    </div>
                    <div class="cntnt">
                            {!! $detail->description !!}
                    </div>
                    <div class="bookbtn">
                        <a href="{{route('booking', ['id' => $detail->id, 'price' => $detail->price])}}">Book My Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
        </div>
    </div>
</section>

<section class="prdctdtls mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="prdctdtls-hdng">
                    <h2>Product <span> Details</span></h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($detail->product as $key => $prod)
            @if(($key+1)%2 == 0)

            <div class="col-md-6">
                <div class="dtls-title">
                    <ul class="m-0 p-0">
                        <li>{{ $prod->features }}</li>
                    </ul>
                </div>
            </div>
            @else
            <div class="col-md-6">
                <div class="dtls-title">
                    <ul class="m-0 p-0">
                        <li>{{ $prod->features }}</li>
                    </ul>
                </div>
            </div>
            @endif
            @endforeach
            
            
        </div>
        <div class="container">
            <hr>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="prdctdtls-hdng">
                    <h2>View<span> Similar Products</span></h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($similarProducts as $similar)    
            <div class="col-md-4">
                <div class="card">
                    <div class="title-hdng">
                        <h4>{{ $similar->title }}</h4>
                    </div>
                    <div class="title-img">
                        <img src="{{ asset('uploads/cng/'.$similar->image) }}" alt="img">
                    </div>
                    <div class="qute-button">
                        <a href="{{ url('cng/details', $similar->slug) }}">Get Quote <img class="icons" src="{{ asset('assets/images/fast-forward.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="enquerybtn">
                    <a href="#">Enquiry Now <img src="assets/images/fast-forward.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--- footer -->
@endsection