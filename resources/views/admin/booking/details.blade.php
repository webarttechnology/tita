@extends('admin.layout.app')
@section('content')

	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Booking Details</h1>
                </div>
                <div>
                    @if(!$bookings->isEmpty() && $bookings[0]->booking->status != "completed")
                       <a href="javascript:void(0)" onclick="taskModalOpen()" class="btn btn-primary">Assign Installer</a>
                    @elseif($bookings->isEmpty())
                       <a href="javascript:void(0)" onclick="taskModalOpen()" class="btn btn-primary">Assign Installer</a>
                    @endif
                </div>
            </div>
            <div class="row">

                <h5 class="mt-2">Customer Details</h5>
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table"
                                    style="width:100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Field</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name: </td>
                                            <td>{{ $customerDetails->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email: </td>
                                            <td>{{ $customerDetails->user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone: </td>
                                            <td>{{ $customerDetails->user->phone_number }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- -->
                <h5 class="mt-2">CNG Kits Details</h5>
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Field</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name: </td>
                                            <td>{{ $cngDetails->cng->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Price: </td>
                                            <td>${{ $cngDetails->cng->price }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kit Type: </td>
                                            <td>{{ $cngDetails->cng->kit_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Vehicle Name: </td>
                                            <td>{{ $cngDetails->cng->vehicle_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Vehicle Type: </td>
                                            <td>{{ $cngDetails->cng->vehicle_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Image: </td>
                                            <td>
                                                <a href="{{ asset('uploads/cng/'.$cngDetails->cng->image) }}" target="_blank"><img src="{{ asset('uploads/cng/'.$cngDetails->cng->image) }}" 
                                                alt="image" height="150" width="100"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="mt-2">Installer & Booking Details</h5>
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <th>Booking Date</th>
                                            <th>Time</th>
                                            <th>Zip</th>
                                            <th>Installer Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $key => $booking)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $booking->date }}</td>
                                            <td>{{ $booking->time }}</td>
                                            <td>{{ $booking->zip }}</td>
                                            <td>{{ $booking->installer->name }}</td>
                                            <td>{{ $booking->installer->email }}</td>
                                            <td>
                                              @if($booking->status == "approved")
                                                <label class="badge bg-success">{{ ucfirst($booking->status) }}</label>
                                              @elseif($booking->status == "rejected")
                                                <label class="badge bg-danger">{{ ucfirst($booking->status) }}</label>
                                              @elseif($booking->status == "pending")
                                                <label class="badge bg-warning">{{ ucfirst($booking->status) }}</label>
                                              @elseif($booking->status == "completed")
                                                <label class="badge bg-primary">Completed</label>
                                              @elseif($booking->status == "in_progress")
                                                <label class="badge bg-info">Accepted</label>
                                              @endif
                                            </td>
                                            <td>
                                                @if($booking->status == "in_progress" || $booking->status == "approved")    
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
                                                        <a class="dropdown-item" href="javascript:void(0);" onclick="displayAlert('warning', 'Are you sure you want to Approve this request?', '{{ url('admin/booking/status', ['booking_id' => $booking_id, 'installer_id' => $booking->installer->id, 'status' => 'approved']) }}', 'Accept', 'Cancel')">Approve</a>
                                                        <a class="dropdown-item" href="javascript:void(0);" onclick="displayAlert('warning', 'Are you sure you want to Reject this request?', '{{ url('admin/booking/status', ['booking_id' => $booking_id, 'installer_id' => $booking->installer->id, 'status' => 'rejected']) }}', 'Reject', 'Cancel')">Reject</a>
                                                    </div>
                                                </div>
                                                @else
                                                   N/A
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

    <!-- Task Modal -->
    <div class="modal" id="taskModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Assign Installer</h5>
              <button type="button" class="close" data-dismiss="modal" onclick="taskModalClose();" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ url('admin/booking/assign/installer') }}" class="separate-form" method="post" id="installerForm">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <label class="form-label mb-2">Installers:</label>
                        
                        <input type="hidden" name="booking_id" id="booking_id" value="{{ $booking_id }}">
                        
                        @if(count($bookings) > 0)
                        <select class="form-control" name="installer" id="installer">
                            <option value="">Select  A Installer</option>

                            @foreach ($bookings as $booking)    
                               @if($booking->installer->approvel_by_admin == "approved")
                                   <option value="{{ $booking->installer->id }}">{{ $booking->installer->name }}</option>
                               @endif
                            @endforeach
                        </select>
                        @else
                               <strong>No Installer Found</strong>
                        @endif
                    </div>

                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="assignButton">Assign</button>
            </div>
          </div>
        </div>
      </div>

    <script>
        function taskModalOpen(){
            $('#taskModal').modal('show');
        }

        function taskModalClose(){
            $('#taskModal').modal('hide');
        }
    </script>

    <!-- submit installer form -->
    <script>
        $(document).ready(function() {
            $('#assignButton').on('click', function() {
                $('#installerForm').submit();
            });
        });
    </script>
@endsection