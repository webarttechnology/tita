@extends('front.layouts.app')
@section('content')

<!-- ======== Tanmoy ======== -->

<section class="carlisting listpage">
    <div class="carlistbanner">
        <div class="container-fluid">
            <h1>Cng Kits</h1>
        </div>
    </div>
</section>

<!-- ======== Tanmoy ======== -->
<!-- car listing  -->
<section class="carList">
    <div class="container">
        <div class="row">

         @foreach($kits as $kit)
            <div class="col-sm-6 col-md-3">
                <div class="viewcarimg">
                    <a href="{{ url('cng/details', $kit->slug) }}">
                        <img src="{{ asset('uploads/cng/'.$kit->image) }}" alt="" class="img-fluid">
                        <h4>{{ $kit->title }} <span>{{ $kit->vehicle_type }}</span></h4>
                        <p>{{ $kit->vehicle_name }} <span class="dividing">|</span> <span class="bold">{{ $kit->brand }}</span> </p>
                        <div class="btnbox btn-red"> 
                            Enquiry Now <i class="bi bi-chevron-double-right"></i>
                        </div>
                    </a>
                </div>
            </div>
         @endforeach


            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li>{{ $kits->links() }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- car listing END -->
<!-- ======== Tanmoy END ======== -->

@endsection