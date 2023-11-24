@extends('admin.layout.app')


@section('content')
	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Quotes</h1>
                </div>               
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $quote)
                                            <tr>
                                                <td>{{ $quote->contact_name}}</td>
                                                <td>{{ $quote->email}}</td>
                                                <td>{{ $quote->phone_number}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary details-view" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{$quote->id}}">View</button>

                                                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">Reports</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="dataList">
                                                                    <li><label for="">Company name</label><span id="company_name"></span></li>
                                                                    <li><label for="">Contact name</label><span id="contact_name"></span></li>
                                                                    <li><label for="">Phone number</label><span id="phone_number"></span></li>
                                                                    <li><label for="">Email</label><span id="email"></span></li>
                                                                    <li><label for="">Address</label><span id="address"></span></li>
                                                                    <li><label for="">Vehicle Type</label><span id="vehical_type"></span></li>
                                                                    <li><label for="">Make</label><span id="make"></span></li>
                                                                    <li><label for="">Model</label><span id="model"></span></li>
                                                                    <li><label for="">Year</label><span id="year"></span></li>
                                                                    <li><label for="">Street no</label><span id="company_street_no"></span></li>
                                                                    <li><label for="">Block or Plot</label><span id="company_block"></span></li>
                                                                    <li><label for="">Street name</label><span id="company_street_name"></span></li>
                                                                    <li><label for="">City</label><span id="company_city"></span></li>
                                                                    <li><label for="">State</label><span id="company_state"></span></li>
                                                                    <li><label for="">Additional Details</label><span id="additional_details"></span></li>
                                                                </ul>   
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@stop


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script>
       $(document).ready(function () 
       {

        // {{-- Click on approve and reject button --}}
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $(".details-view").on('click', function(){
            var id = $(this).data('id');

            //alert(id);

            $.ajax({
                url: '{{url('admin/quote/details')}}' + "/" + id,
                type: 'GET',
                dataType: 'json',
                success: function (details) 
                {
                    if( details.company_name != '' ) {
                        $('#company_name').text(details.company_name);
                    } else {
                        $('#company_name').text('Not available.');
                    }

                    if( details.contact_name != '' ) {
                        $('#contact_name').text(details.contact_name);
                    } else {
                        $('#contact_name').text('Not available.');
                    }

                    if (details.phone_number != '') {
                        $('#phone_number').text(details.phone_number);
                    } else {
                        $('#phone_number').text('Not available.');
                    }   
                    
                    if (details.email != '') {
                        $('#email').text(details.email);
                    } else {
                        $('#email').text('Not available.');
                    }  
                    if (details.address != '') {
                        $('#address').text(details.address);
                    } else {
                        $('#address').text('Not available.');
                    }  
                    if (details.vehical_type != '') {
                        $('#vehical_type').text(details.vehical_type);
                    } else {
                        $('#vehical_type').text('Not available.');
                    }  
                    if (details.make != '') {
                        $('#make').text(details.make);
                    } else {
                        $('#make').text('Not available.');
                    }  
                    if (details.model != '') {
                        $('#model').text(details.model);
                    } else {
                        $('#model').text('Not available.');
                    }  
                    if (details.year != '') {
                        $('#year').text(details.year);
                    } else {
                        $('#year').text('Not available.');
                    }  
                    if (details.company_street_no != '') {
                        $('#company_street_no').text(details.company_street_no);
                    } else {
                        $('#company_street_no').text('Not available.');
                    }  
                    if (details.company_block != '') {
                        $('#company_block').text(details.company_block);
                    } else {
                        $('#company_block').text('Not available.');
                    }  
                    if (details.company_street_name != '') {
                        $('#company_street_name').text(details.company_street_name);
                    } else {
                        $('#company_street_name').text('Not available.');
                    }  
                    if (details.company_city != '') {
                        $('#company_city').text(details.company_city);
                    } else {
                        $('#company_city').text('Not available.');
                    }  
                    if (details.company_state != '') {
                        $('#company_state').text(details.company_state);
                    } else {
                        $('#company_state').text('Not available.');
                    }  
                    
                    if (details.additional_details != '') {
                        $('#additional_details').text(details.additional_details);
                    } else {
                        $('#additional_details').text('Not available.');
                    }  
                },
                error: function (error) {
                    console.error('Ajax request failed: ', error);
                }
            });
        })

    });

    </script>



    

    








