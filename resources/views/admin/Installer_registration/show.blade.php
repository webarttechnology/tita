@extends('admin.layout.app')


@section('content')
	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Admin Approval</h1>
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
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $installers)
                                            <tr>
                                                <td>{{ $installers->name}}</td>
                                                <td>{{ $installers->email}}</td>
                                                <td>{{ $installers->phone_number}}</td>
                                                <td>
                                                    <a class="btn btn-primary text-white my-1 mx-1 details-view"  data-id="{{$installers->id}}">View</a>
                                                    {{-- @foreach ($installers->reports as $report)
                                                        {{ $report->message }}
                                                    @endforeach --}}
                                                </td>
                                                <td class="status-column" data-installer-id="{{ $installers->id }}" data-approvel-status="{{ $installers->approvel_by_admin }}">
                                                    {{ $installers->approvel_by_admin}}
                                                </td>
                                                <td>
                                                    @if($installers->approvel_by_admin == 'unapproved')
                                                        <div class="btn-group mb-1">
                                                            <button type="button" class="btn btn-outline-success">Info</button>
                                                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                                <span class="sr-only">Info</span>
                                                            </button>                                                       
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item approve" href="#" data-action="approved">Approve</a>
                                                                <a class="dropdown-item reject" href="#" data-action="reject">Reject</a>
                                                            </div>                                                       
                                                        </div>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>

                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="modal-body">
                                        <div clss="row">
                                            <div class="col-md-12 mb-3">
                                                <strong> Name:</strong>
                                                <span id="name"></span>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <strong>Email:</strong> 
                                                <span id="email"></span>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <strong>Message:</strong> 
                                                <span id="message"></span>
                                            </div>                                                           
                                        </div>
                                    </div>
                                  </div>
                            </div>

                                <!-- The modal HTML structure -->
                                @foreach ($data as $installers)
                                <div id="myModal-{{ $installers->id }}" class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <p>Some text in the Modal..</p>
                                    </div>
                                </div>
                            @endforeach
                                
                                
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

        $('.approve, .reject').on('click', function (e) {
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
                url: '{{route('admin.registration.approve')}}', 
                data: {
                    action: action,
                    installer_id: installerId,
                },
                success: function (response) {
                    if (response.success) {
                        statusColumn.text(response.status);
                        window.location.reload();
                    } else {
                        console.error('Failed to update status.');
                    }
                },
                error: function () {
                    console.error('Error while making the AJAX request.');
                },
            });
        });
        // {{-- Click on approve and reject button --}}
    });

    </script>


<!-- ... (your HTML code) ... -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var buttons = document.querySelectorAll('.details-view');
    
        // Attach click event listeners to each button
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                var modalId = this.getAttribute('data-id');    
                var modal = document.getElementById('myModal-' + modalId);
                modal.style.display = 'block';
            });
        });
    
        // Get all elements with the class 'modal'
        var modals = document.querySelectorAll('.modal');
    
        // Attach click event listeners to each modal's close button
        modals.forEach(function(modal) {
            var closeButton = modal.querySelector('.close');
    
            if (closeButton) {
                closeButton.addEventListener('click', function() {
                    // Close the modal when the close button is clicked
                    modal.style.display = 'none';
                });
            }
    
            // Attach click event listener to close the modal when clicking outside of it
            window.addEventListener('click', function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            });
        });
    });
    </script>
    
    <!-- ... (rest of your HTML code) ... -->
    

    








