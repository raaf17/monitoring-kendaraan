<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	
	<!-- CSS Libraries -->
	<link rel="stylesheet" href="{{ asset('template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('template/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('template/node_modules/select2/dist/css/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('template/node_modules/selectric/public/selectric.css') }}">
	<link rel="stylesheet" href="{{ asset('template/node_modules/bootstrap-daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('template/node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
	
	<link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('template/assets/css/components.css') }}">
	{{-- <link href="{{ asset('assets/build/styles/ltr-core.css') }}" rel="stylesheet"> --}}
	{{-- <link href="{{ asset('assets/build/styles/ltr-vendor.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/apexcharts-bundle/dist/apexcharts.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	{{-- <link href="{{ asset('css/custome.css') }}" rel="stylesheet"> --}}
	<link href="{{ asset('images/vehicle-inspection.png') }}" rel="shortcut icon" type="image/x-icon">
	
	<!-- CDN Libraries Link -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	@stack('styles')
	<title>@yield('title', 'Title') | {{ config('app.name') }}</title>
</head>

<body>
	<div id="app">
		<div class="main-wrapper">
			@include('layouts.navbar')

			@include('layouts.sidebar')
			
			@include('layouts.container')

			@include('layouts.footer')
		</div>
	</div>
	
	<!-- General JS Script -->
	<script src="{{ asset('template/node_modules/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('template/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
	<script src="{{ asset('template/node_modules/tooltip.js') }}"></script>
	<script src="{{ asset('template/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js') }}"></script>
	<script src="{{ asset('template/assets/js/stisla.js') }}"></script>
	
	<!-- JS Libraries -->
	<script src="{{ asset('template/node_modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('template/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('template/node_modules/select2/dist/js/select2.full.min.js') }}"></script>
	<script src="{{ asset('template/node_modules/selectric/public/jquery.selectric.min.js') }}"></script>
	<script src="{{ asset('template/assets/js/page/modules-datatables.js') }}"></script>
	<script src="{{ asset('template/assets/js/page/forms-advanced-forms.js') }}"></script>
	<script src="{{ asset('template/assets/js/page/bootstrap-modal.js') }}"></script>
	<script src="{{ asset('template/node_modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('template/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
	<script src="{{ asset('template/node_modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/build/bootbox5/bootbox.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/apexcharts-bundle/dist/apexcharts.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	{{-- <script type="text/javascript" src="{{ asset('assets/build/scripts/mandatory.js') }}"></script> --}}
	{{-- <script type="text/javascript" src="{{ asset('assets/build/scripts/core.js') }}"></script> --}}
	{{-- <script type="text/javascript" src="{{ asset('assets/build/scripts/vendor.js') }}"></script> --}}
	{{-- <script type="text/javascript" src="{{ asset('assets/app/home.js') }}"></script> --}}
	{{-- <script type="text/javascript" src="{{ asset('assets/jquery-number/jquery.number.min.js') }}"></script> --}}
	{{-- <script type="text/javascript" src="{{ asset('js/build.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/locale.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/localization.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/apps.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script> --}}
	{{-- <script type="text/javascript" src="{{ asset('assets/qr/script.min.js') }}"></script> --}}
	
	<!-- Template JS File -->
	<script src="{{ asset('template/assets/js/scripts.js') }}"></script>
	<script src="{{ asset('template/assets/js/custom.js') }}"></script>
	{{-- <script type="text/javascript" src="https://unpkg.com/@zxing/library@latest"></script> --}}
	@stack('scripts')
</body>
</html>