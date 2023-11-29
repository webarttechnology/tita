@extends('front.layouts.app')
@section('content')
<section class="request exam">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="instruction__widget">
                        <h3>Instructions</h3>

                        <div class="text-left">
                            {!! $instruction->instruction !!}
                            <a class="btn btn-primary" href="{{ url('exam', $code) }}">Start Exam</a>
                        </div>
                        
                    </div>        
                </div>
                
            </div>
        </div>
    </section>
@endsection