@extends('admin.layout.app')


@section('content')
	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>About Section</h1>
                </div>
                <div>
                    {{-- <a href="{{ route ('admin.about_add')}}" class="btn btn-primary"> Add Blog</a> --}}
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
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $data as $about )                                        
                                        <tr>
                                            <td>{{ $about->heading}}</td>
                                            <td>{{ $about->description}}</td>
                                            {{-- <td>{{ $about->we_are_heading}}</td>
                                            <td>{{ $about->we_are_description}}</td>
                                            <td>{{ $about->we_are_not_heading}}</td>
                                            <td>{{ $about->we_are_not_description}}</td>
                                            <td>{{ $about->what_we_do_heading}}</td>
                                            <td>{{ $about->what_we_do_description}}</td> --}}
                                            <td><img src="{{ asset('images/about/'. $about->image) }}" alt="Your Image" width="100px"></td>
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
                                                        <a class="dropdown-item" href="{{ url ('admin/about-page/edit/'.$about->id)}}">Edit</a>                                                       
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

