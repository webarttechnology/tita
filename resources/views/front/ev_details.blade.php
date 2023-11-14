@extends('front.layouts.app')
@section('content')

<section class="carlisting">
    <div class="carlistbanner">
        <div class="container-fluid">
            <h1><span>Say Hello to</span> <br />
                {{ $vehicle->name }} Buying Bliss</h1>
        </div>
    </div>


    <div class="card-slider col-md-8 mx-auto">
        <!-- Swiper -->
        <div class="swiper mySwiper2" style="top: -95px;margin-bottom: -154px;">
            <div class="swiper-wrapper">

                @foreach($vehicle->gallery as $gallery)
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar w-75"></div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('uploads/vehicle_gallery/'.$gallery->img) }}" alt="">
                            </div>
                            <div class="col-md-2 align-self-center pt-5 mt-4">
                                <div class="d-flex justify-content-end me-4 mb-4"
                                    style="top: -20px; z-index: 99; position: relative; margin-bottom: -10px;">
                                    <div class="bi bi-chevron-left swiper-button-black"></div>
                                    <div class="bi bi-chevron-right swiper-button-black ms-4"></div>

                                </div>
                            </div>
                        </div>
                        <div class="caritem-bottom">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="itemtext">
                                        <h4>{{ $vehicle->name }}<span>{{ $vehicle->year_of_launch }}</span></h4>
                                        <p>{{ $vehicle->distance }} <span class="dividing">|</span> <span class="bold">{{ $vehicle->range }}</span>
                                        </p>
                                        <span class="range">Range</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form action="">
                                        <div class="choice">
                                            <ul>

                                                @foreach($vehicle->color as $color)
                                                <li>
                                                    <label style="background-color: {{ $color->color }}" class="c1">
                                                        <input type="radio" />
                                                    </label>
                                                </li>
                                                @endforeach
                                              
                                            </ul>
                                            <div class="btnbox">
                                                <a href="#" type="button" class="btn-red">Enquiry Now <i
                                                        class="bi bi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- Car Listing END -->

<!-- View Car -->
<section class="viewcar">
    <div class="container-fluid">
        <div class="row">

            @foreach($vehicle->gallery as $gallery)
            <div class="col-md-3">
                <div class="viewcarimg">
                    <img src="{{ asset('uploads/vehicle_gallery/'.$gallery->img) }}" alt="" class="img-fluid">
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- View Car END -->

<!-- Key spec -->
<section class="keyspec">
    <div class="container-fluid">
        <hr />
        <div class="keytitle">
            <h2>Key Specs of <span>{{ $vehicle->name }}</span></h2>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="spec-item">
                    <img src="{{ asset('/assets/images/specicon1.png') }}" alt="">
                    <p class="name">Range</p>
                    <p class="data">{{ $vehicle->range }}</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="spec-item">
                    <img src="{{ asset('/assets/images/specicon2.png')}}" alt="">
                    <p class="name">Power</p>
                    <p class="data">{{ $vehicle->power }}</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="spec-item">
                    <img src="{{ asset('assets/images/specicon3.png')}}" alt="">
                    <p class="name">Charging Time</p>
                    <p class="data">{{ $vehicle->charging_time }}</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="spec-item">
                    <img src="{{ asset('assets/images/specicon4.png')}}" alt="">
                    <p class="name">Seating Capacity</p>
                    <p class="data">{{ $vehicle->seating_capacity }}</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="spec-item">
                    <img src="{{ asset('assets/images/specicon5.png')}}" alt="">
                    <p class="name">Distance</p>
                    <p class="data">{{ $vehicle->distance }}</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="spec-item">
                    <img src="{{ asset('assets/images/specicon6.png')}}" alt="">
                    <p class="name">Battery Capacity</p>
                    <p class="data">{{ $vehicle->battery_capacity }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Key spec END -->
<!-- Key Features -->
<section class="key-fetures">
    <div class="container-fluid">
        <hr />
        <div class="keytitle">
            <h2>Key Features of <span>{{ $vehicle->name }}</span></h2>
        </div>
        <div class="row">

            @foreach($vehicle->feature as $key => $feature)
            @if(($key+1)%2 == 0)
            <div class="col-md-6" style="height: 42px !important">
                <ul>
                    <li>
                        <p>{{ $feature->feature }}</p> <i class="bi bi-check"></i>
                    </li>
                </ul>
            </div>
            @else
            <div class="col-md-6" style="height: 42px !important">
                <ul>
                    <li>
                        <p>{{ $feature->feature }}</p> <i class="bi bi-check"></i>
                    </li>
                </ul>
            </div>
            @endif
            @endforeach      


            <div class="col-md-12 mt-5">
                <div class="btnbox" >
                    <a href="#">Enquiry Now <img src="./assets/images/fast-forward-red.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection