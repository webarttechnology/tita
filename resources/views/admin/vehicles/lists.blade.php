@extends('admin.layout.app')
@section('content')

<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Vehicle</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Vehicle</p>
            </div>
            <div>
                <a href="{{ url('admin/vehicle/add') }}" class="btn btn-primary"> Add New</a>
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
                                        <th>#</th>
                                        <th>Vehicle Img</th>
                                        <th>Name</th>
                                        <th>Year of Launch</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($vehicles as $key => $vehicle)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/vehicle_gallery/'.$vehicle->gallery[0]->img) }}" height="50px" width="60px" alt="">
                                        </td>
                                        <td>{{ $vehicle->name }}</td>
                                        <td>{{ $vehicle->year_of_launch }}</td>
                                        <td>{{ $vehicle->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                <button type="button"
                                                    class="btn btn-outline-success">Info</button>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ url('admin/vehicle/edit', $vehicle->id) }}">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);" onclick="displayAlert('error', 'Are You Sure, You want to Delete This?', '{{ url('admin/vehicle/delete', $vehicle->id) }}')">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div>
                            {{ $vehicles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->

@endsection