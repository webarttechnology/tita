@extends('admin.layout.app')


@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Installers</h1>
                </div>

                <button class="btn btn-info"> <a href="{{ route('export') }}">Export</a> </button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>POC</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $installers)
                                            <tr>
                                                <td>{{ $installers->name }}</td>
                                                <td>{{ $installers->email }}</td>
                                                <td>{{ $installers->phone_number }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary details-view"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        data-id="{{ $installers->id }}">View</button>
                                                </td>
                                                <td class="status-column" data-installer-id="{{ $installers->id }}"
                                                    data-approvel-status="{{ $installers->approvel_by_admin }}">
                                                    @php
                                                        switch ($installers->approvel_by_admin) {
                                                            case 'inprogress':
                                                                echo 'Pending';
                                                                break;
                                                            case 'approve':
                                                                echo 'Approved';
                                                                break;
                                                            default:
                                                                echo 'Rejected';
                                                                break;
                                                        }
                                                    @endphp
                                                </td>
                                                <td>
                                                    @if ($installers->approvel_by_admin == 'inprogress')
                                                        <div class="btn-group mb-1">
                                                            <button type="button"
                                                                class="btn btn-outline-success">Info</button>
                                                            <button type="button"
                                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false" data-display="static">
                                                                <span class="sr-only">Info</span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-custom-button">
                                                                <a class="dropdown-item view" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal1"
                                                                    data-viewid="{{ $installers->id }}">View</a>
                                                                <a class="dropdown-item approve" href="#"
                                                                    data-action="approved">Approve</a>
                                                                <a class="dropdown-item reject" href="#"
                                                                    data-action="reject">Reject</a>
                                                            </div>
                                                        </div>
                                                    @endif
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title text-center mb-3" id="exampleModalLabel">Proof Of Concept</h5>
                    <ul class="dataList">
                        <li><label for="">Company name</label><span id="company_name">4561230987</span></li>
                        <li><label for="">Contact name</label><span
                                id="contact_name">soxiragaf@mailinator.com</span></li>
                        <li><label for="">Phone number</label><span id="phone_number">Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry</span></li>
                        <li><label for="">Email</label><span id="email">Hunt and Sweet Inc</span></li>
                        <li><label for="">Address</label><span id="address">Hunt and Sweet Inc</span></li>
                        <li><label for="">Vehicle Type</label><span id="vehicle_type">Hunt and Sweet Inc</span></li>
                        <li><label for="">Make</label><span id="make">4561230987</span></li>
                        <li><label for="">Model</label><span id="model">soxiragaf@mailinator.com</span></li>
                        <li><label for="">Year</label><span id="year">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry</span></li>
                        <li><label for="">Street no</label><span id="company_street_no">Hunt and Sweet Inc</span>
                        </li>
                        <li><label for="">Block or Plot</label><span id="company_block">Hunt and Sweet Inc</span>
                        </li>
                        <li><label for="">Street name</label><span id="company_street_name">4561230987</span></li>
                        <li><label for="">City</label><span id="company_city">soxiragaf@mailinator.com</span></li>
                        <li><label for="">State</label><span id="company_state">Lorem Ipsum is simply dummy text of
                                the printing and typesetting industry</span></li>
                        <li><label for="">Additional Details</label><span id="additional_details">Hunt and Sweet
                                Inc</span></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title text-center mb-3" id="exampleModalLabel">Details</h5>
                    <ul class="dataList">
                        <li><label for="">Company name</label><span id="company_name"></span></li>
                        <li><label for="">cac
                                registration</label><span id="cac_registration"></span></li>
                        <li><label for="">national identification
                                no</label><span id="national_identification_no"></span></li>
                        <li><label for="">ocupation</label><span id="ocupation"></span></li>
                        <li><label for="">residental
                                address</label><span id="residental_address"></span></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script>
    $(document).ready(function() {

        // {{-- Click on approve and reject button --}}
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('.approve, .reject').on('click', function(e) {
            e.preventDefault();

            var action = $(this).data('action');
            var installerId = $(this).closest('tr').find('.status-column').data('installer-id');
            var statusColumn = $(this).closest('tr').find('.status-column');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{ route('admin.registration.approve') }}',
                data: {
                    action: action,
                    installer_id: installerId,
                },
                success: function(response) {
                    if (response.success) {
                        statusColumn.text(response.status);
                        window.location.reload();
                    } else {
                        console.error('Failed to update status.');
                    }
                },
                error: function() {
                    console.error('Error while making the AJAX request.');
                },
            });
        });
        // {{-- Click on approve and reject button --}}

        $(".details-view").on('click', function() {
            var id = $(this).data('id');

            alert("details-view");

            $.ajax({
                url: '{{ url('admin/details') }}' + "/" + id,
                type: 'GET',
                dataType: 'json',
                success: function(details) {
                    if (details.reports.length > 0) {
                        $('#company_name').text(details.reports[0].company_name);
                    } else {
                        $('#company_name').text('Not available.');
                    }

                    if (details.reports.length > 0) {
                        $('#contact_name').text(details.reports[0].contact_name);
                    } else {
                        $('#contact_name').text('Not available.');
                    }

                    if (details.reports.length > 0) {
                        $('#phone_number').text(details.reports[0].phone_number);
                    } else {
                        $('#phone_number').text('Not available.');
                    }

                    if (details.reports.length > 0) {
                        $('#email').text(details.reports[0].email);
                    } else {
                        $('#email').text('Not available.');
                    }
                    if (details.reports.length > 0) {
                        $('#address').text(details.reports[0].address);
                    } else {
                        $('#address').text('Not available.');
                    }
                    if (details.reports.length > 0) {
                        $('#vehical_type').text(details.reports[0].vehical_type);
                    } else {
                        $('#vehical_type').text('Not available.');
                    }
                    if (details.reports.length > 0) {
                        $('#make').text(details.reports[0].make);
                    } else {
                        $('#make').text('Not available.');
                    }
                    if (details.reports.length > 0) {
                        $('#model').text(details.reports[0].model);
                    } else {
                        $('#model').text('Not available.');
                    }
                    if (details.reports.length > 0) {
                        $('#year').text(details.reports[0].year);
                    } else {
                        $('#year').text('Not available.');
                    }
                    if (details.reports.length > 0) {
                        $('#company_street_no').text(details.reports[0].company_street_no);
                    } else {
                        $('#company_street_no').text('Not available.');
                    }
                    if (details.reports.length > 0) {
                        $('#company_block').text(details.reports[0].company_block);
                    } else {
                        $('#company_block').text('Not available.');
                    }
                    if (details.reports.length > 0) {
                        $('#company_street_name').text(details.reports[0]
                            .company_street_name);
                    } else {
                        $('#company_street_name').text('Not available.');
                    }
                    if (details.reports.length > 0) {
                        $('#company_city').text(details.reports[0].company_city);
                    } else {
                        $('#company_city').text('Not available.');
                    }
                    if (details.reports.length > 0) {
                        $('#company_state').text(details.reports[0].company_state);
                    } else {
                        $('#company_state').text('Not available.');
                    }

                    if (details.reports.length > 0) {
                        $('#additional_details').text(details.reports[0]
                            .additional_details);
                    } else {
                        $('#additional_details').text('Not available.');
                    }
                },
                error: function(error) {
                    console.error('Ajax request failed: ', error);
                }
            });
        })

        $(".view").on('click', function() {
            var viewid = $(this).data('viewid');

            alert("view");

            $.ajax({
                url: '{{ url('admin/installer/details') }}' + "/" + viewid,
                type: 'GET',
                dataType: 'json',
                success: function(details) {
                    console.log(details.info);
                    if (details.info.length > 0) {
                        $('#company_name').text(details.info[0].company_name);
                    } else {
                        $('#company_name').text('Not available.');
                    }

                    if (details.info.length > 0) {
                        $('#cac_registration').text(details.info[0].cac_registration);
                    } else {
                        $('#cac_registration').text('Not available.');
                    }

                    if (details.info.length > 0) {
                        $('#national_identification_no').text(details.info[0]
                            .national_identification_no);
                    } else {
                        $('#national_identification_no').text('Not available.');
                    }

                    if (details.info.length > 0) {
                        $('#ocupation').text(details.info[0].ocupation);
                    } else {
                        $('#ocupation').text('Not available.');
                    }
                    if (details.info.length > 0) {
                        $('#residental_address').text(details.info[0].residental_address);
                    } else {
                        $('#residental_address').text('Not available.');
                    }

                },
                error: function(error) {
                    console.error('Ajax request failed: ', error);
                }
            });
        })

    });
</script>
