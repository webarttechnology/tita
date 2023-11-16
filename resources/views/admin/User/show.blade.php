@extends('admin.layout.app')


@section('content')
	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Blog</h1>
                </div>
                <div>
                    <a href="{{ route ('user_add')}}" class="btn btn-primary"> Add User</a>
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
                                            <th>Phone Number</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $data as $users )                                        
                                        <tr>
                                            <td>{{ $users->name}}</td>
                                            <td>{{ $users->email}}</td>
                                            <td>{{ $users->phone_number}}</td>
                                            <td><img src="{{ asset('uploads/user/'. $users->image) }}" alt="Your Image" width="100px"></td>
                                           
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
                                                        <a class="dropdown-item" href="{{ url ('admin/user/edit/'.$users->id)}}">Edit</a>
                                                        <a class="dropdown-item" href="{{ url ('admin/user/delete/'.$users->id)}}" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
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

