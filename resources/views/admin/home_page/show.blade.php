@extends('admin.layout.app')


@section('content')
	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Home Banner</h1>
                </div>
                <div>
                    {{-- <a href="{{ route ('admin.home_banner_add')}}" class="btn btn-primary"> Add Banner</a> --}}
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
                                            <th>Heading</th>
                                            <th>Icon</th>
                                            <th>Image</th>
                                            <th>Range</th>
                                            <th>Timing</th>
                                            <th>Battery</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $banners as $banner )                                        
                                        <tr>
                                            <td>{{ $banner->heading}}</td>
                                            <td><img src="{{ asset('images/home/banner/'. $banner->icon) }}" alt="Your Image" width="100px"></td>
                                            <td><img src="{{ asset('images/home/banner/'. $banner->image) }}" alt="Your Image" width="100px"></td>
                                            <td>{{ $banner->range}}</td>
                                            <td>{{ $banner->timing}}</td>
                                            <td>{{ $banner->battery}}</td>
                                        
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
                                                        <a class="dropdown-item" href="{{ url ('admin/home/edit/'.$banner->id)}}">Edit</a>
                                                        <a class="dropdown-item" href="{{ url ('admin/home/delete/'.$banner->id)}}" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
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

