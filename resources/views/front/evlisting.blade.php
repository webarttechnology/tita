@extends('front.layouts.app')
@section('content')

<!-- ======== Tanmoy ======== -->

<section class="carlisting listpage">
    <div class="carlistbanner">
        <div class="container-fluid">
            <h1>Car Listing</h1>
        </div>
    </div>
</section>

<!-- ======== Tanmoy ======== -->
<!-- car listing  -->
<section class="carList">
    <div class="container">
        <div class="row">

         @foreach($vehicles as $vehicle)
            <div class="col-sm-6 col-md-3">
                <div class="viewcarimg">
                    <a href="{{ url('ev-listing/details', $vehicle->id) }}">
                        <img src="{{ asset('uploads/vehicle_gallery/'.$vehicle->gallery[0]->img) }}" alt="" class="img-fluid">
                        <h4>{{ $vehicle->name }} <span>{{ $vehicle->year_of_launch }}</span></h4>
                        <p>{{ $vehicle->distance }} <span class="dividing">|</span> <span class="bold">{{ $vehicle->range }}</span> </p>
                        <div class="btnbox btn-red"> 
                            Enquiry Now <i class="bi bi-chevron-double-right"></i>
                        </div>
                    </a>
                </div>
            </div>
         @endforeach


            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li>{{ $vehicles->links() }}</li>
                    {{-- <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- car listing END -->
<!-- ======== Tanmoy END ======== -->

@endsection