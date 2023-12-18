@extends('admin.layout.app')


@section('content')
	<!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Home Feature</h1>
                </div>
                {{-- <div>
                    <a href="{{route ('admin.feature_add')}}" class="btn btn-primary"> Add</a>
                  </div> --}}
              
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
                                            <th>Small Heading</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $benifits as $benifit )                                        
                                        <tr>
                                            <td>{{ $benifit->heading}}</td>
                                            <td>{{ $benifit->sub_heading}}</td>
                                            <td>{{ $benifit->small_heading}}</td>
                                            <td><img src="{{ asset('images/home/feature/'. $benifit->image) }}" alt="Your Image" width="100px"></td>
                                        
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
                                                        <a class="dropdown-item" href="{{ url ('admin/feature/edit/'.$benifit->id)}}">Edit</a>
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

