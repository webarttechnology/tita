@extends('installer.layout.app')
@section('content')

	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Booking</h1>
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
                                            <td>#</td>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Cng Kit</th>
                                            <th>Kit Price</th>
                                            <th>Kit Type</th>
                                            <th>Booking Date</th>
                                            <th>Time</th>
                                            <th>Zip</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $key => $booking)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $booking->user->name }}</td>
                                            <td>{{ $booking->user->email }}</td>
                                            <td>{{ $booking->cng->title }}</td>
                                            <td>${{ $booking->cng->price }}</td>
                                            <td>{{ $booking->cng->kit_type }}</td>
                                            <td>{{ $booking->date }}</td>
                                            <td>{{ $booking->time }}</td>
                                            <td>{{ $booking->zip }}</td>
                                            <td>
                                                @if($booking->status == "pending")
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Action</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Action</span>
                                                    </button>

                                                    <div class="dropdown-menu dropdown-custom-button">
                                                            <a class="dropdown-item" onclick="return confirm('Are you sure you want to Approve?')" href="{{ url('installer/booking/status', ['id' => $booking->id, 'status' => 'in_progress']) }}">Approve</a>
                                                            <a class="dropdown-item" onclick="return confirm('Are you sure you want to Reject?')" href="{{ url('installer/booking/status', ['id' => $booking->id, 'status' => 'rejected']) }}">Reject</a>                       
                                                    </div>
                                                </div>
                                                @else
                                                @if($booking->status == "in_progress" || $booking->status == "Accept")
                                                    <a class="badge bg-success">Accept</a>
                                                @else
                                                    <a class="badge bg-danger">Reject</a>
                                                @endif
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
@endsection