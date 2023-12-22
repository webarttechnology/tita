@extends('admin.layout.app')


@section('content')
	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Why Choose Us Section</h1>
                </div>
                <div>
                    <a href="{{ route ('admin.whyUs_add')}}" class="btn btn-primary"> Add</a>
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
                                            <th>Title</th>
                                            <th>Number</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $data as $whyus )                                        
                                        <tr>
                                            <td>{{ $whyus->title}}</td>
                                            <td>{{ $whyus->number}}</td>
                                            <td><img src="{{ asset('images/WhyChooseUs/'. $whyus->image) }}" alt="Your Image" width="100px"></td>
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
                                                        <a class="dropdown-item" href="{{ url ('admin/why-choose-us/edit/'.$whyus->id)}}">Edit</a>     
                                                        <a class="dropdown-item" href="{{ url ('admin/why-choose-us/delete/'.$whyus->id)}}" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                                                                                                    
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

