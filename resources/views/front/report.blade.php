@extends('front.layouts.app')
@section('content')


<!-- register  -->
<section class="registerSec">
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Request Proof of Concept</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Request Proof of Concept</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <section class="request">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form">
                        <h2>Request Proof of Concept</h2>
                        <form action="{{ route('report_Store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="c-name" class="form-label">Inspector ID</label>
                                <input type="number" class="form-control" id="c-name" name="inspector_id" value="{{ old('inspector_id') }}">
                            </div>

                            <div class="mb-3">
                                <label for="c-name" class="form-label">Installer</label>
                                <select class="form-select" aria-label="vehicle-type" id="installer_id" onchange="installerDetails()" name="installer_id">
                                  <option value="" selected>Selected</option>
                                   @foreach ($data as $installers)
                                    <option value="{{$installers->id}}">{{ $installers->name}}</option>
                                    @endforeach
                                </select>  
                                <p id="installer_code"></p>  
                            </div>
                            
                            <h3 class="my-3 text-center">Inspector Feedback</h3>
                            <div class="mb-3">
                                <label for="contact-name" class="form-label">Applicant workshop is confirmed?</label>
                                <input type="radio" class="form-check-input ml-2" value="Yes" id="contact-name" name="application_conformation"> &nbsp; Yes &nbsp;
                                <input type="radio" class="form-check-input ml-2" value="No" id="contact-name" name="application_conformation"> &nbsp; No
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Workshop Type</label>
                                <input type="text" class="form-control" id="phone" name="workshop_type">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Workshop Size</label>
                                <input type="email" class="form-control" id="email" name="workshop_size">
                            </div>
                            <div class="mb-3">
                                <label for="Address" class="form-label">Prescence of Hazards or Risks of damages to vehicles</label>
                                <input type="text" class="form-control" id="Address" name="risk_management">
                            </div>
                            
                            <h3 class="my-3 text-center">Upload Photos of the Workshop</h3>
                            <div class="mb-3">
                                <label for="city" class="form-label">Front section</label>
                                <input type="file" class="form-control" id="city" name="front_image">
                            </div>
                            <div class="mb-3">
                                <label for="state" class="form-label">Work area</label>
                                <input type="file" class="form-control" id="state" name="work_area">
                            </div>
                            <div class="mb-3">
                                <label for="additional" class="form-label">Wide shot from the Street</label>
                                <input type="file" class="form-control" id="state" name="wideshot_street">
                            </div>    
                            <div class="mb-3">
                                <button type="submit" class="btn btn-theme">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection


    @section('custom_js')
    <script>
        function installerDetails(){
            let installer = jQuery('#installer_id').val();
            
            if(installer != ''){
                jQuery.ajax({
                url: '{{ url('installer/details/fetch') }}' + "/" + installer,
                type: 'GET',
                dataType: 'json',
                success: function(details) {
                     jQuery('#installer_code').html('Installer Code - '+details.inst_code);
                },
                error: function(error) {
                    console.error('Ajax request failed: ', error);
                }
            });
          }else{
            jQuery('#installer_code').html('');
          }
        }
    </script>
@endsection