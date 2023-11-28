@extends('front.layouts.app')
@section('content')
<section class="request exam">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="sidebar__widget">
                        <h3>{{ $msg }}</h3>
                        <h2>Please <a href="{{ url('installer/login') }}">Click Here</a> to login into Installer Panel</h2>
                    </div>        

                    <h2 class="mt-5">Test Results</h2>
                        <table class="table mt-1">
                            <thead class="thead-dark" style="background-color: black; color: white;">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Total Question</th>
                                <th scope="col">Correct Question</th>
                                <th scope="col">Percentage</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($examDetails as $key => $exam)                                
                              <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $exam->created_at->format('d-m-Y') }}</td>
                                <td>{{ $exam->total_question }}</td>
                                <td>{{ $exam->correct_question }}</td>
                                <td>{{ $exam->percent_obtain }}%</td>
                                <td>
                                    @if($exam->status == "Fail")
                                       <label class="badge bg-danger">{{ $exam->status }}</label>
                                    @else
                                       <label class="badge bg-success">{{ $exam->status }}</label>
                                    @endif
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>

                </div>
                
            </div>
        </div>
    </section>
@endsection