@extends('admin.layout.app')


@section('content')
	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>CNG Kits</h1>
                </div>
                <div>
                    <a href="{{ url('admin/cng/add') }}" class="btn btn-primary">Add Kits</a>
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
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Kit Type</th>
                                            <th>Vehicle Type</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kits as $key => $kit)                                  
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $kit->title}}</td>
                                            <td><img src="{{ asset('uploads/blog/'. $kit->image) }}" alt="Your Image" width="100px"></td>
                                            <td><?php echo htmlspecialchars_decode(Str::limit($kit->description, 200, $end='..')) ?></td>
                                            <td>{{ $kit->kit_type}}</td>
                                            <td>{{ $kit->vehicle_type}}</td>
                                            <td>{{ $kit->created_at->format('F j, Y') }}</td>
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

                                                    <div class="dropdown-menu dropdown-custom-button">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="{{ url ('admin/blog/delete/'.$kit->id)}}" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
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