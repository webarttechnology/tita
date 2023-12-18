@extends('front.layouts.app')
@section('content')

@php
    $attempt = count(App\Models\InstallerTestResult::where('exam_link_id', $code)->get());
@endphp

<section class="request exam">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="sidebar__widget" style="height: auto">
                        <h3>{{ $msg }}</h3>

                        @if ($attempt < ($instruction->attempt_limit))
                          <h2><a href="{{ url('exam', $code) }}">Click Here</a> to give your Test Again</h2>
                        @else
                          <h2>Go to <a href="{{ url('/') }}">Home</a></h2>
                        @endif

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
                                <td>{{ number_format($exam->percent_obtain, 2) }}%</td>
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
        </div>
    </section>
@endsection