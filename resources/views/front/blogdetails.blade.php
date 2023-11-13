@extends('front.layouts.app')
@section('content')

<!-------- Blog Details Start --------------->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Blog Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog_details py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="pb-3 mb-0">{{ $singleBlog->title}}</h1>
                <div class="iconspb py-3">
                    <span class="text-new me-2"><i class="fas fa-user mr-2"></i>By </span>
                    <span><i class="fas fa-calendar-alt mr-2"></i> {{ $singleBlog->created_at->format('m.d.Y') }}</span>
                </div>
                <div class="blog_main">
                    <div class="blog_left">
                        <img src="{{ asset($singleBlog->image) }}" alt="">
                    </div>
                    <div class="blog_right">
                        <p class="mb-4">{!! $singleBlog->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------- Blog Details End --------------->

@endsection