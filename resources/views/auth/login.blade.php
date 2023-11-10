<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 10:30:50 GMT -->
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Ekka - Admin Dashboard HTML Template.">

		<title>Tita - Admin Dashboard</title>
		
		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

		<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
		
		<!-- Ekka CSS -->
		<link id="ekka-css" rel="stylesheet" href="{{asset('assets/admin/css/ekka.css')}}">
		
		<!-- FAVICON -->
	</head>
	
	<body class="sign-inup" id="body">
		<div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="card">
						<div class="card-header bg-primary">
							<div class="ec-brand">
								<a href="index.html" title="Ekka">
									<img class="ec-brand-icon" src="{{asset('assets/admin/img/logo/ec-site-logo.png')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="card-body p-5">
							<h4 class="text-dark mb-5">Sign In</h4>
							
							<form action="{{route('login')}}" method="POST">
								@csrf
								<div class="row">
									<div class="form-group col-md-12 mb-4">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									</div>
									
									<div class="form-group col-md-12 ">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									</div>
									
									<div class="col-md-12">
										<div class="d-flex my-2 justify-content-between">
											<div class="d-inline-block mr-3">
												<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
												<label class="form-check-label" for="remember">
													{{ __('Remember Me') }}
												</label>
											</div>
											
											<p><a class="text-blue" href="{{ route('password.request') }}">Forgot Password?</a></p>
										</div>
										
										<button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>
										
										<p class="sign-upp">Don't have an account yet ?
											<a class="text-blue" href="{{ route('register') }}">Sign Up</a>
										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Javascript -->
		<script src="{{asset('assets/admin/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
		<script src="{{asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('assets/admin/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('assets/admin/plugins/slick/slick.min.js')}}"></script>
	
		<!-- Ekka Custom -->	
		<script src="{{asset('assets/admin/js/ekka.js')}}"></script>
	</body>
</html>