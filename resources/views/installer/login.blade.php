@extends('installer.layout.guest')
@section('content')
<div class="card-body p-5">
	<h4 class="text-dark mb-5">Sign In</h4>

	<form action="{{ url('installer/login-action') }}" method="POST">
		@csrf

		<div class="row">
			<div class="form-group col-md-12 mb-4">
				<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
			</div>

			<div class="form-group col-md-12 ">
				<input type="password" class="form-control" id="password" placeholder="Password" name="password">
			</div>

			<div class="col-md-12">
				{{-- <div class="d-flex my-2 justify-content-between">
					<div class="d-inline-block mr-3">
						<div class="control control-checkbox">Remember me
							<input type="checkbox" />
							<div class="control-indicator"></div>
						</div>
					</div>

					<p><a class="text-blue" href="#">Forgot Password?</a></p>
				</div> --}}

				<button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>

				<p class="sign-upp">Don't have an account yet ?
					<a class="text-blue" href="#">Sign Up</a>
				</p>
			</div>
		</div>
	</form>
</div>
@endsection