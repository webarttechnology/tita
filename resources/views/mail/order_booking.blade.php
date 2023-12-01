@php
    $booking = App\Models\BookingRequest::with('user')->where('id', $detail)->first();
@endphp

<strong>{{ $booking->user->name }}</strong> sent you a Booking Request, <br>
<a href="{{ route('installer.login') }}">Click Here</a> to accept the Request