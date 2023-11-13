@extends('front.layouts.app')
@section('content')

<!-- --------------Inner Banner Blog Details------------- -->

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Video</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Video</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------Video Section Start------------>
<section class="videosec py-5">
    <div class="container">
        <div class="vid-slider">
            <div class="vid-wrapper">
                <div class="row">
                    @foreach ( $videos as $video )
                    <div class="col-md-4">
                        <div class="vid item">
                            <iframe width="560" height="315" src="{{$video->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <h2 class="vid-head">{{ $video->title}}</h2>
                        </div>
                    </div> 
                    @endforeach              
                </div>
            </div>
        </div>
    </div>
</section>
<div class="video-popup">
    <div class="iframe-wrapper"><iframe width="400" height="300" src="" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <span class="close-video"></span>
    </div>
</div>


<!--------------Video Section End--------------->



<!--- footer -->
@endsection