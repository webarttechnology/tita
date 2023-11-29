@extends('front.layouts.app')
@section('content')
<section class="request exam">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form text-left">
                        <h2>Test</h2>
                        <hr>

                        <form action="{{ url('submit/exam') }}" method="post" id="exam-form">
                            @csrf
                            
                        <input type="hidden" name="exam_code_id" value="{{ $code }}">
                        @foreach ($questions as $key => $question)
                        <div class="qbox">
                            <h5 class="mb-2">{{ ($key + 1) }}. {{ $question->question }}</h5>
                            <input type="hidden" name="question_id[]" value="{{ $question->id }}">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="option[{{ $question->id }}]" value="{{ $question->option1 }}" required>{{ $question->option1 }}
                                        <label class="form-check-label" for="radio1"></label>
                                      </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="option[{{ $question->id }}]" value="{{ $question->option2 }}" required>{{ $question->option2 }}
                                        <label class="form-check-label" for="radio12"></label>
                                      </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="option[{{ $question->id }}]" value="{{ $question->option3 }}" required>{{ $question->option3 }}
                                        <label class="form-check-label" for="radio3"></label>
                                      </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="option[{{ $question->id }}]" value="{{ $question->option4 }}" required>{{ $question->option4 }}
                                        <label class="form-check-label" for="radio3"></label>
                                      </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        <button type="submit" class="btn btn-theme mt-3">Submit Your Answer</button>
                    </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar__widget">
                        <h3>Exam Details</h3>
                        <p class="d-flex justify-content-between"><strong>Total Question:</strong> {{ $totalQuestion }}</p>
                        <p class="d-flex justify-content-between"><strong>Time:</strong> <span class="time-left">1:00 min.</span></p>
                        <p class="d-flex justify-content-between"><strong>No. of Attempt:</strong> {{ ($noOfAttempt) }}</p>
                        <p class="d-flex justify-content-between"><strong>Attempt Left:</strong> {{ 3 - ($noOfAttempt) }}</p>
                    </div>        
                </div>
                
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script>
        var maxTime = {{ $timeLimit * 60 }};
        var currentTime = 0;

        function timer() {
            currentTime++;
            var remainingTime = maxTime - currentTime;

            if (remainingTime >= 0) {
                // Update the time-left span
                $(".time-left").text(formatTime(remainingTime));

                // Continue the timer
                return setTimeout(() => {
                    timer();
                }, 1000);
            }

            // Time is over, submit the form
            $("input").prop('required', false);
            $("#exam-form").trigger('submit');
        }

        function formatTime(seconds) {
            var minutes = Math.floor(seconds / 60);
            var remainingSeconds = seconds % 60;

            // Add leading zero if needed
            if (remainingSeconds < 10) {
                remainingSeconds = "0" + remainingSeconds;
            }

            return minutes + ":" + remainingSeconds + " min";
        }

        // Start the timer
        timer();
    </script>
@endsection