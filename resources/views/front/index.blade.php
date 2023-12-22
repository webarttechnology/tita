@extends('front.layouts.app')
@section('content')

    <!-- banners -->
    <div class="banners">
        <!-- Swiper -->
        <div class="swiper mySwiper1">
            <div class="swiper-wrapper">
                @foreach ( $banners as $banner )      
                <div class="swiper-slide bg-img1" style="background-image: url('{{ asset('images/home/banner/'. $banner->image) }}')">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2>{{ $banner->heading}}<br/>
                                    <div class="d-flex justify-content-center mt-2"><span class="me-3">Are</span>
                                        <div class="spans">Coming Soon </div>
                                    </div>
                                </h2>
                            </div>
                        </div>
                        <div class="row bottom-part">
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="cols">
                                    <div class="d-flex justify-content-center">
                                        <img class="me-3" src="{{ asset('assets/images/specicon4.png') }}" width="50px">
                                        {{-- <h5 class="mb-0 align-self-center">450 ML</h5> --}}
                                    </div>
                                    <p>{{ $banner->range}} </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-5">
                                <div class="cols">
                                    <div class="d-flex justify-content-center">
                                        <img class="me-3" src="{{ asset('assets/images/time.png') }}" width="50px">
                                        {{-- <h5 class="mb-0 align-self-center">20 Min</h5> --}}
                                    </div>
                                    <p>{{ $banner->timing}} </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mt-5">
                                <div class="cols">
                                    <div class="d-flex justify-content-center">
                                        <img class="me-3" src="{{ asset('assets/images/specicon3.png')}}" width="50px">
                                        {{-- <h5 class="mb-0 align-self-center">25,000+</h5> --}}
                                    </div>
                                    <p>{{ $banner->battery}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>           
        </div>
    </div>


    <!-- sec1 -->
    <section class="sec1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5">
                    {{-- <h6>Quick And Easy</h6> --}}
                    <h2>{{ $information->heading}} <br />
                        <div class="d-flex mt-2"><span class="me-3">CAR</span>
                            <div class="spans me-2">EXPERIENCES </div> TO
                        </div> YOU
                    </h2>
                    <p>{{ $information->description}}</p>
                    <a href="{{route('about_us')}}" class="btns">
                        Learn More.
                    </a>
                </div>
                <div class="col-lg-5 text-lg-center mt-5">
                    <img class="imgs" src="{{ asset('images/home/banner/'. $information->image) }}">
                </div>
            </div>
        </div>
    </section>


    <!-- sec2 -->
    <section class="sec2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-end mt-5">
                    <h6>We Are Also</h6>
                    <h2> <div class="spans me-2">{{ $information->sub_heading}} </div> <br></h2>
                </div>
                <div class="col-lg-7 mt-5">
                    <img class="w-100" src="{{ asset('images/home/banner/'. $information->icon) }}">
                </div>
            </div>
        </div>
    </section>

    <!-- sec3 -->
    <section class="sec3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Why Choose Our Service</h2>
                </div>
                @foreach ( $whyus as $why_us )          
                <div class="col-lg-3 col-md-6 mt-5 pt-lg-4">
                    <img class="" src="{{ asset('images/WhyChooseUs/'. $why_us->image) }}">
                    <h6>{{ $why_us->title}}</h6>
                    <h3>{{ $why_us->number}}</h3>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>


    <!-- ======== Tanmoy ======== -->

    <!-- Why Choose -->
    <!-- <section class="why-choose">
              <div class="container-fluid">
                 <div class="row">
                    <div class="col-md-12">
                       <div class="sec-title text-center">
                          <h2>Why Choose Our Service</h2>
                       </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-3">
                       <div class="servitem">
                          <img src="./assets/images/Happycustomer.png" alt="">
                          <p>
                             <span>Happy Customers</span>
                          </p>
                          <p>
                             <span class="counter">5500</span>
                          </p>
                       </div>
                    </div>
                 </div>
              </div>
           </section> -->
    <!-- Why Choose END -->


    <!-- Kits -->
    <section class="cngbestkit">
        <div class="container-fluid">
            <div class="row">
                <div class="sec-title text-center">
                    <span>Kits For Everyone</span>
                    <h2>CNG Best Kits<br>
                        For You</h2>
                </div>
            </div>
            @foreach ($cngKit as $index => $cngKits)   
            <div class="contentbox {{$index % 2 == 0 ? '' : 'odd'}}">
                <div class="row">
                    <div class="col-md-6">
                        @if($index % 2 == 0)
                            <div class="ctnimg">
                                <img src="{{asset('uploads/cng/'. $cngKits->image)}}" width="100%">
                            </div>
                        @else
                            <div class="ctntext text-lg-end">
                                <h4>{{$cngKits->title}}</h4>
                                <p>{!! Illuminate\Support\Str::limit($cngKits->description, 150) !!}</p>
                                <div class="btnbox">
                                    <a href="#" class="btn btn-light">Learn More</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        @if($index % 2 == 0)
                            <div class="ctntext">
                                <h4>{{$cngKits->title}}</h4>
                                <p>{!! Illuminate\Support\Str::limit($cngKits->description, 150) !!}</p>
                                <div class="btnbox">
                                    <a href="#" class="btn btn-light">Learn More</a>
                                </div>
                            </div>
                        @else
                            <div class="ctnimg">
                                <img src="{{asset('uploads/cng/'. $cngKits->image)}}" alt="">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach                 
         </div>
    </section>
    <!-- Kits END  -->

    <!-- Benefits -->
    <section class="Benefits">
        <div class="container-fluid">       
            <div class="row">
                <div class="co-md-12">
                    <div class="sec-title text-center">
                        <h2>What Are The Benefits?</h2>
                    </div>
                </div>
            </div>          
            <div class="row">
                @foreach ( $benifits as $benifit )             
                <div class="col-md-2">
                    <div class="benitem">
                        <img src="{{ asset('images/home/benifits/'. $benifit->image) }}" alt="">
                        <p>{{ $benifit->heading}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Benefits  END -->

    <!-- Electric Car -->
    <section class="electric-car">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title text-center">
                        <span>Best Electric Car</span>
                        <h2>Which Electric Car is <br />
                            Right for You?</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="cars">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($cars as  $car )
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="car-card">
                            <img src="./assets/images/car1.png" alt="">
                            <div class="car-text">
                                <span>{{$car->name}}</span>
                                <h4>{{$car->name}}</h4>
                                <p class="price">$ 40,000.00</p>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach                    
                
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Electric Car  END -->

    <!-- Coolest Features -->
    <section class="coolest-features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title text-center">
                        <h2>Some Of The <br />
                            Coolest Features</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="fea">
                        <h3>No Gas Required</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fea">
                        <h3>Zero Emission</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fea">
                        <h3>Easy To Recharge</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fea">
                        <h3>Cost Effective</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Coolest Features END -->
    <!-- Appreciate Driving -->
    <section class="appreciate-driving" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="drivtext">
                        <span>{{ $features->small_heading}}</span>
                        <h4>{{ $features->heading}}</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="view-text">
                        <span>{{ $features->sub_heading}}</span>
                        <div class="btncon"><a href="{{route ('about_us')}}" class="btn btn-sec">View Cars</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appreciate Driving END -->

    <!-- Trusted Brands -->
    <section class="trusted-brands">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title text-center">
                        <h2>Trusted & Approved for <span>Leading Brands</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="trusted-brandslogos">
                        <div class="swiper mySwiper brandslogos">
                            <div class="swiper-wrapper">
                                @foreach ( $brands as $brand )
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/home/benifits/'. $brand->image) }}" alt="">
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trusted Brands END -->

    <!-- ======== Tanmoy END ======== -->


    <!-- Sohail work-->
    <section class="knwldg py-5 d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="hdng">
                        <h1>Knowledge</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="category">
                        <h4>Category1</h4>
                        <img src="assets/images/category1.png" alt="">
                    </div>
                    <div class="category-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category">
                        <h4>Category 2</h4>
                        <img src="assets/images/category1.png" alt="">
                    </div>
                    <div class="category-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category">
                        <h4>Category 3</h4>
                        <img src="assets/images/category1.png" alt="">
                    </div>
                    <div class="category-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category">
                        <h4>Category 4</h4>
                        <img src="assets/images/category1.png" alt="">
                    </div>
                    <div class="category-btn">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="knldge py-5">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="hdng">
                        <h1>Knowledge</h1>
                    </div>
                </div>
            </div>
            <div class="algnmnt">
                <div class="row">
                    <div class="col-md-3">
                        <div class="categbx">
                            <h4>Category1</h4>
                            <div class="ctimg">
                                <img src="assets/images/category1.png" alt="">
                                <div class="ctry_btn">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="categbx">
                            <h4>Category1</h4>
                            <div class="ctimg">
                                <img src="assets/images/category1.png" alt="">
                                <div class="ctry_btn">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="categbx">
                            <h4>Category1</h4>
                            <div class="ctimg">
                                <img src="assets/images/category1.png" alt="">
                                <div class="ctry_btn">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="categbx">
                            <h4>Category1</h4>
                            <div class="ctimg">
                                <img src="assets/images/category1.png" alt="">
                                <div class="ctry_btn">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hdng">
                        <h1>Latest News <strong>Updates & Blogs</strong></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mt-5">
                @foreach ( $blogs as $blog )            
                <div class="col-md-4">
                    <div class="blogbx">
                        <img src="{{ asset('uploads/blog/'. $blog->image) }}" alt="">
                    </div>
                    <div class="content">
                        <p>{{ $blog->created_at->format('F j, Y') }}</p>
                        <h5>{{ $blog->title}}</h5>
                    </div>
                    <div class="blogbtn">
                        <a href="{{route('single_blog',['slug' => $blog->slug])}}">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="contactus">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 px-0">
                    <div class="cntct-form">
                        <div class="cntct-hdng">
                            <h4>Contact Us</h4>
                            <h2>Write Email</h2>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-9">
                                <form action="{{ route ('email_Send')}}" method="post">
                                @csrf
                                <div class="cform">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                                                <div class="validation-error">
                                                    @error('name')
                                                        <p>{{ $message }}</p>
                                                    @enderror
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                                                <div class="validation-error">
                                                    @error('email')
                                                        <p>{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 justify-content-center align-items-center">
                                            <div class="mb-3">
                                                <input type="tel" class="form-control" placeholder="Contact Number" name="number" value="{{old('number')}}">
                                                <div class="validation-error">
                                                    @error('number')
                                                        <p>{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3 text">
                                                <textarea name="message" value="{{old('message')}}" id="" class="form-control area"></textarea>
                                                <div class="validation-error">
                                                        @error('message')
                                                        <p>{{ $message }}</p>
                                                    @enderror
                                                </div>     
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="mt-3">
                                                <div class="apntbtn">
                                                    <button type="submit" class="sbmtbtn btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                            @if(Session::has('message'))
                                                <p style="color: green">{{ Session::get('message') }}</p>
                                            @endif
                                        </center>
                                    </div>
                                </div>
                            </form>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 px-0">
                    <div class="address">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14736.291556012899!2d88.4236832353367!3d22.576377035318565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275b020703c0d%3A0xece6f8e0fc2e1613!2sSector%20V%2C%20Bidhannagar%2C%20Kolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1698312623276!5m2!1sen!2sin"
                            style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bg-clr">
                    <div class="bg-img1">
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <form action="">
                                    <div class="email-sbcrb">
                                        <input type="email" class="bg-transparent" placeholder="Enter Your Email">
                                        <input type="submit" value="Subscribe">
                                    </div>
                                    <div class="policy">
                                        <input type="checkbox">
                                        <label for="">I Agree To The <a href="#">Privacy Policy</a></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
