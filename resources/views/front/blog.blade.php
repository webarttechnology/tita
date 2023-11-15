@extends('front.layouts.app')
@section('content')

<!-- --------------Inner Banner Blog Details------------- -->

<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Blog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------Blog Section Start------------>

<section class="blogsec py-5">
    <div class="container">
        <div class="row mb-5">
            @foreach ( $blogs as $blog )
            <div class="col-md-4 mb-3">
                <a href="blogdetails.php">
                    <div class="blog-main">
                        <div class="blog-img">
                            <img src="{{ asset( 'uploads/blog/'. $blog->image) }}" alt="" width="250px">
                        </div>
                        <div class="card">
                            <h3>{{ $blog->title}}</h3>
                            <p><?php echo htmlspecialchars_decode(Str::limit($blog->description, 300, $end='..')) ?></p>
                            <div class="btnprt">
                                <a href="{{route('single_blog',['slug' => $blog->slug])}}" class="cmnbtn">Read More</a>
                            </div>
                            <div class="blog-date">
                                <p>{{ $blog->created_at->format('m.d.Y') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection