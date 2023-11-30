<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" Content="">
    <title>TITA</title>

    <!-- fav icon -->
    <link href="{{ asset('assets/images/I.png') }}" rel="icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- style CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="body">

    <!--- header -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('/')}}"><img class="" src="{{ asset('assets/images/I.png') }}"   alt="logo.png" />
            </a>           
            <button class="navbar-toggler navbar-light" data-bs-toggle="offcanvas" href="#offcanvasExample"
                role="button" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <nav>
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link actives" aria-current="page" href="{{route('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about_us')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('ev_listing')}}">EV listing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('products')}}">CNG KIT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('booking')}}">Booking</a>
                        </li>                       
                       
                        @if(!Auth::user())
                        <div class="btn-group nav-item">
                            <a class="btn dropdown-toggle nav-link" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                Registration
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="{{route('user_Registration')}}">User</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="{{route('registration')}}">Installer</a>
                                </li>                             
                            </ul>
                          </div>  
                        @endif
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('installer_Report')}}">Report</a>
                        </li>                  
                        <div class="btn-group nav-item">
                            <a class="btn dropdown-toggle nav-link" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                Blog
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                <li class="nav-item"><a class="dropdown-item nav-link" href="{{route('blog')}}">Blogs</a></li>
                              <li class="nav-item"><a class="dropdown-item nav-link" href="{{route('video')}}">Video</a></li>
                              <li class="nav-item"><a class="dropdown-item nav-link" href="{{route('pdf_download')}}">PDF</a></li>
                            </ul>
                        </div>  
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{route('quote')}}">Quote</a>
                        </li>                       --}}
                    </ul>
                </nav>
                <div class="icons">
                    {{-- <a href="#"><i class="bi bi-search text-dark me-5 h5"></i></a> --}}
                    {{-- <a class="text-dark text-decoration-none btns1 me-4">
                        <i class="bi bi-telephone-fill text-danger me-3"></i>033-0888588025
                    </a> --}}
                   
                    <a href="{{route('quote')}}" class="btn btn-dark btns2 rounded-0">Request a Quote</a>
                    @if($authLink == 'login')
                      <a href="{{ route('user_Login') }}"><img src="{{ asset('assets/images/login.png') }}" width="30px"></a>
                    @else 
                    <a href="{{ route('user_Details') }}"><img src="{{ asset('assets/images/log-in.png') }}" width="30px"></a>
                        <a href="{{ route('user_logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                             <img src="{{ asset('assets/images/shutdown.png') }}" width="30px">
                        </a>

                        <form id="logout-form" action="{{ route('user_logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!--- sidebar -->
    <div class="d-lg-none d-block">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link actives" aria-current="page" href="{{route('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about_us')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ev_listing')}}">EV listing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}">CNG KIT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('booking')}}">Booking</a>
                    </li>
                    <div class="btn-group nav-item">
                        <a class="btn dropdown-toggle nav-link" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            Registration
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                            <li class="nav-item"><a class="dropdown-item nav-link" href="{{route('user_Registration')}}">User Registration</a></li>                             
                        </ul>
                      </div> 
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('installer_Report')}}">Report</a>
                    </li>
                   
                    <div class="btn-group nav-item">
                        <a class="btn dropdown-toggle nav-link" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                            <li class="nav-item"><a class="dropdown-item nav-link" href="{{route('blog')}}">Blogs</a></li>
                          <li class="nav-item"><a class="dropdown-item nav-link" href="{{route('video')}}">Video</a></li>
                          <li class="nav-item"><a class="dropdown-item nav-link" href="{{route('pdf_download')}}">PDF</a></li>
                        </ul>
                      </div>
                </ul>
                <div class="icons">                   
                    <div class="mt-3">
                        <a href="{{ route('contactUs') }}" class="btn btn-dark btns2 rounded-0">Let's talk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!--- header -->

  <!--- Main Content -->
    @yield('content')
<!--- Main Content -->


<!--- Footer -->
    <footer class="footersec">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="ftr-cntct-hdng">
                        <h4>Contact Us</h4>
                    </div>
                    <div class="ftr-address">
                        <ul>
                            <li>
                                <p>IN Office Address : Matrix Tower <br>Block GP, Sector V, WB, Kol–700091</p>
                            </li>
                            <li><a href="#">Email : infoShopsee.com</a></li>
                            <li><a href="tel: 1 888-927-7332">Toll-Free : +1 888-927-7332</a></li>
                            <li><a href="tel:1 415 800 4429">USA Support : +1 415 800 4429</a>
                                <p></p>
                            </li>
                        </ul>
                    </div>
                    <div class="company">
                        <p>Company Name : Boise</p>
                        <p>Company Address : Zone Orlytech
                            Batiment 5161 allee du commandant
                            Mouchotte ORLY Paris ,91550 , France</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftrservice">
                        <div class="srvchdng">
                            <h4>Services</h4>
                        </div>
                        <ul>
                            <li><a href="{{route('/')}}">Home</a></li>
                            <li><a href="{{route('about_us')}}">About Us</a></li>
                            <li><a href="{{route('ev_listing')}}">EV listing</a></li>
                            <li><a href="product.php">CNG KIT</a></li>
                            <li><a href="{{route('booking')}}">Booking</a></li>
                            <li><a href="{{route('installer_Report')}}">Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftrservice">
                        <div class="srvchdng">
                            <h4>Quick Links</h4>
                        </div>
                        <ul>
                            <li><a href="{{route('/')}}">Home</a></li>
                            <li><a href="{{route('about_us')}}">About Us</a></li>
                            <li><a href="{{route('ev_listing')}}">EV listing</a></li>
                            <li><a href="product.php">CNG KIT</a></li>
                            <li><a href="{{route('booking')}}">Booking</a></li>
                            <li><a href="{{route('installer_Report')}}">Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-8">
                    <div class="ftrbtm">
                        <p>Copyright 2022 © Boise. Powered by WebArt Technology All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftrlogo">
                        <a><img src="{{ asset('assets/images/ftr-logo.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


        <!-- Optional JavaScript; choose one of the two! -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- custom -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        {{-- Toast --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    {{-- Toast --}}
    <script>
        toastr.options = {
        "closeButton": true,
        "progressBar": true
    }

        @if(Session::has('success'))
            toastr.success("{{ session('success') }}");
        @endif
        
        @if(Session::has('message'))
            toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>

    <script>
        var swiper = new Swiper(".mySwiper1", {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                loop: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper2 ", {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                loop: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>


    <script>
        var swiper = new Swiper(".brandslogos", {
            autoplay: {
                delay: 2500,
                loop: true,
                disableOnInteraction: false,
            },
            breakpoints: {
                '280': {
                    slidesPerView: 1,
                    spaceBetween: 50,
                },
                '600': {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
                '991': {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
                '1200': {
                    slidesPerView: 7,
                    spaceBetween: 50,
                },
            },

        });
    </script>

    <script>
        var swiper = new Swiper(".carlistingslider", {
            autoplay: {
                delay: 2500,
                loop: true,
                disableOnInteraction: false,
            },
            breakpoints: {
                '280': {
                    slidesPerView: 1,
                    spaceBetween: 50,
                },
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Video Popup -->
    <script>
        $(document).ready(function() {
            $('.vid-slider .vid').on('click', function() {
                // get required DOM Elements
                var iframe_src = $(this).children('iframe').attr('src'),
                    iframe = $('.video-popup'),
                    iframe_video = $('.video-popup iframe'),
                    close_btn = $('.close-video');
                iframe_src = iframe_src + '?autoplay=1&rel=0'; // for autoplaying the popup video

                // change the video source with the clicked one
                $(iframe_video).attr('src', iframe_src);
                $(iframe).fadeIn().addClass('show-video');

                // remove the video overlay when clicking outside the video
                $(document).on('click', function(e) {
                    if ($(iframe).is(e.target) || $(close_btn).is(e.target)) {
                        $(iframe).removeClass('show-video');
                        $(iframe_video).attr('src', '');
                    }
                });
            });
        });
    </script>

    @yield('custom_js')
</body>

</html>
