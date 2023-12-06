@extends('admin.layout.app')
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
                                            <th>Customer Name</th>
                                            <th>Cng Kit</th>
                                            <th>Booking Date</th>
                                            <th>Time</th>
                                            <th>Zip</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $key => $booking)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $booking->user->name }}</td>
                                            <td>{{ $booking->cng->title }}</td>
                                            <td>{{ $booking->date }}</td>
                                            <td>{{ $booking->time }}</td>
                                            <td>{{ $booking->zip }}</td>
                                            <td>
                                                @if($booking->status == "payment_complete")
                                                    <label class="badge badge-success">PAID</label>
                                                @elseif($booking->status == "completed")
                                                    <label class="badge badge-dark">completed</label>
                                                @else
                                                    <label class="badge badge-danger">NOT PAID</label>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{ url('admin/booking/details', $booking->id) }}">Details</a>
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