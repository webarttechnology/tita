<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 10:30:17 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">

	<title>Tita - Installer Dashboard</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet"> 

	<link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.3.67/css/materialdesignicons.min.css"
        integrity="sha512-nRzny9w0V2Y1/APe+iEhKAwGAc+K8QYCw4vJek3zXhdn92HtKt226zHs9id8eUq+uYJKaH2gPyuLcaG/dE5c7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Include TinyMCE library -->
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<!-- Include TinyMCE library -->

	<!-- PLUGINS CSS STYLE -->
	<link href="{{asset('assets/admin/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
	<link href="{{asset('assets/admin/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
	<link href='{{asset('assets/admin/plugins/data-tables/datatables.bootstrap5.min.css')}}' rel='stylesheet'>
	<link href='{{asset('assets/admin/plugins/data-tables/responsive.datatables.min.css')}}' rel='stylesheet'>

	<!-- Ekka CSS -->
	<link id="ekka-css" href="{{asset('assets/admin/css/ekka.css')}}" rel="stylesheet" />

	<!-- FAVICON -->
	<link href="{{ asset('assets/admin/img/favicon.png') }}" rel="shortcut icon" />

	{{-- Toast --}}
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<!-- Include Select2 CSS and JS files -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<!-- tagify for tags -->
	<link href="tagify.css" rel="stylesheet">

	<!-- sweetalert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>


	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<!--  WRAPPER  -->
	<div class="wrapper">
		
		<!-- LEFT MAIN SIDEBAR -->
		<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<a href="{{ url('installer/dashboard') }}" title="Ekka">
						<img class="ec-brand-icon" src="{{asset('assets/admin/img/logo/ec-site-logo.png')}}" alt="" />
					</a>
				</div>

				<!-- begin sidebar scrollbar -->
				<div class="ec-navigation" data-simplebar>
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<li class="active">
							<a class="sidenav-item-link" href="{{ url('installer/dashboard') }}">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Dashboard</span>
							</a>
							<hr>
						</li>


						<!-- Other Pages -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="{{ url('installer/my-account') }}">
								<i class="mdi mdi-account"></i>
								<span class="nav-text">My Account</span> <b class="caret"></b>
							</a>
                        </li>

						<li class="has-sub">
							<a class="sidenav-item-link" href="{{ url('installer/booking/list') }}">
								<i class="mdi mdi-briefcase"></i>
								<span class="nav-text">Booking Request</span> <b class="caret"></b>
							</a>
                        </li>
					</ul>
				</div>
			</div>
		</div>

		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">
		<!-- Header -->
		<header class="ec-main-header" id="header">
			<nav class="navbar navbar-static-top navbar-expand-lg">
				<div class="search-form d-lg-inline-block">
					<div class="input-group">
						<input type="text" name="query" id="search-input" class="form-control"
							placeholder="search.." autofocus autocomplete="off" />
						<button type="button" name="search" id="search-btn" class="btn btn-flat">
							<i class="mdi mdi-magnify"></i>
						</button>
					</div>
					<div id="search-results-container">
						<ul id="search-results"></ul>
					</div>
				</div>

				<div class="navbar-right">
					<ul class="nav navbar-nav">
						<li class="dropdown user-menu">
							<a class="nav-link" href="{{ route('installer.logout') }}">
									{{ __('Logout') }}
							</a>							
						</li>
					
						<li class="right-sidebar-in right-sidebar-2-menu">
							<i class="mdi mdi-settings-outline mdi-spin"></i>
						</li>
					</ul>
				</div>
			</nav>
		</header>

			<!-- CONTENT WRAPPER -->
			@yield('content')

            <!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright &copy; <span id="ec-year"></span><a class="text-primary"
						href="https://webart.technology/" target="_blank"> WebArt Technology</a>. All Rights Reserved.
					  </p>
				</div>
			</footer>

		</div> 
	</div> 

	<!-- Common Javascript -->
	<script src="{{asset('assets/admin/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/admin/plugins/simplebar/simplebar.min.js')}}"></script>
	<script src="{{asset('assets/admin/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('assets/admin/plugins/slick/slick.min.js')}}"></script>

	<!-- Option Switcher -->
	<script src="{{asset('assets/admin/plugins/options-sidebar/optionswitcher.js')}}"></script>

	<!-- Ekka Custom -->
	<script src="{{asset('assets/admin/js/ekka.js')}}"></script>

	
	{{-- Toast --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<!-- select2 -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<!-- Multi-select -->
	<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
	<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

	<script>
		toastr.options = {
		"closeButton": true,
		"progressBar": true
	}

	@if(Session::has('success'))
		toastr.success("{{ session('success') }}");@endif
	@if(Session::has('message'))
		toastr.success("{{ session('message') }}");
	@endif

	@if(Session::has('error'))
		toastr.error("{{ session('error') }}");
	@endif

	@if(Session::has('info'))
		toastr.info("{{ session('info') }}");
	@endif

	@if(Session::has('warning'))
		toastr.warning("{{ session('warning') }}");
	@endif

	@if ($errors->any())
		@foreach ($errors->all() as $error)
			toastr.error("{{ $error }}");
		@endforeach
	@endif
	</script>

<!-- warning alert -->
<script>
    function displayAlert(type, message, url, confirmBtnText = 'Delete', denyBtnText = 'Cancel', deniedMSg = 'Your Data is Safe') {
        Swal.fire({
            icon: type,
            title: message,
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: confirmBtnText,
            denyButtonText: denyBtnText,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                    window.location.href = url;
            } else if (result.isDenied) {
                Swal.fire(deniedMSg, '', 'info')
            }
        })
    }
</script>

	<!-- Multi-select -->
     @yield('custom_js')
	<!-- Multi-select -->
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v35/ekka-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 10:30:32 GMT -->
</html>