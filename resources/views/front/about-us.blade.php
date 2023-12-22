@extends('front.layouts.app')
@section('content')

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">{{ $about->heading}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $about->heading}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About  -->
<section class="aboutsec">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="aboutimg">
                    <img src="{{asset('images/about/'. $about->image)}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <h2>{{ $about->heading}}</h2>
                    <p>{{ $about->description}}</p>
                </div>
            </div>
        </div>
        <div class="row what ">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <h4>{{ $about->we_are_heading}}</h4>
                    <p>{{ $about->we_are_description}}</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <h4>{{ $about->we_are_not_heading}}</h4>
                    <p>{{ $about->we_are_not_description}}</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <h4>{{ $about->what_we_do_heading}}</h4>
                    <p>{{ $about->what_we_do_description}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About END -->
<!-- ======== Tanmoy END ======== -->


@endsection