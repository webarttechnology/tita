@extends('admin.layout.app')


@section('content')
	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Home Banner</h1>
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
                                            <th>Sub Heading</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Image-2</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $information as $informations )                                        
                                        <tr>
                                            <td>{{ $informations->heading}}</td>
                                            <td>{{ $informations->sub_heading}}</td>
                                            <td>{{ $informations->description}}</td>
                                            <td><img src="{{ asset('images/home/banner/'. $informations->icon) }}" alt="Your Image" width="100px"></td>
                                            <td><img src="{{ asset('images/home/banner/'. $informations->image) }}" alt="Your Image" width="100px"></td>
                                        
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
                                                        <a class="dropdown-item" href="{{ url ('admin/information/edit/'.$informations->id)}}">Edit</a>
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

