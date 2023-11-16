@extends('front.layouts.app')
@section('content')

<!-- ======== Tanmoy ======== -->
<!-------- Contact us section --------------->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">PDF Download</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">PDF Download</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pdf-download-sec">
    <div class="container-fluid">
        <div class="row">
            @foreach ($pdfs as $pdf)
            <div class="col-md-3 mb-3">
                <div class="pdf-card">
                    <div class="pdf-thumb">
                        <img src="./assets/images/PDF_icon.png" alt="">
                    </div>
                    <h3>{{ $pdf->title}}</h3>
                    <a download="{{$pdf->title}}.pdf" href="{{ asset( 'uploads/pdf/'. $pdf->pdf) }}" class="btn btn-theme" download>Download <i
                            class="bi bi-file-earmark-arrow-down"></i></a>
                </div>
            </div>
            @endforeach
       </div>
    </div>
</section>
<!-- ======== Tanmoy END ======== -->

@endsection