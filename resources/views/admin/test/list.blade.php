@extends('admin.layout.app')
@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Qestions</h1>
                    <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Question
                    </p>
                </div>
                <div>
                    <a href="#" class="btn btn-primary"> Add New</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Question</th>
                                            <th>Option 1</th>
                                            <th>Option 2</th>
                                            <th>Option 3</th>
                                            <th>Option 4</th>
                                            <th>Answer</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($tests as $key => $test)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $test->question }}</td>
                                                <td>{{ $test->option1 }}</td>
                                                <td>{{ $test->option2 }}</td>
                                                <td>{{ $test->option3 }}</td>
                                                <td>{{ $test->option4 }}</td>
                                                <td>{{ $test->answer }}</td>
                                                <td>{{ $test->status }}</td>
                                                <td>{{ $test->created_at->format('d/m/Y') }}</td>
                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <button type="button" class="btn btn-outline-success">Info</button>
                                                        <button type="button"
                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static">
                                                            <span class="sr-only">Info</span>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="#">Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"
                                                                onclick="displayAlert('error', 'Are You Sure, You want to Delete This?', ''">Delete</a>
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
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection
