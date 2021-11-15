<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>UG Career Administrator | @yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<!-- <link rel="icon" href=" {{ asset('admin') }}/assets/img/icon.ico" type="image/x-icon"/> -->
	<link href="{{ asset('assets') }}/img/favicongundar.png" rel="icon">
	
	<!-- Fonts and icons -->
	<script src=" {{ asset('admin') }}/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{ asset('admin') }}/assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href=" {{ asset('admin') }}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href=" {{ asset('admin') }}/assets/css/azzara.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/sweetalert/sweetalert2.min.css">
	@yield('css')

</head>
<body>
	<div class="wrapper">
		<!-- Navbar Header -->
        @include('layouts.komponen.navbar')
		<!-- End Navbar -->
		<!-- Sidebar -->
        @include('layouts.komponen.sidebar')
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					@include('sweetalert::alert')	
                    @yield('content')
				</div>
			</div>	
		</div>
		<!-- End Custom template -->
<footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>UG Career 2021</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

	</div>
	<!--   Core JS Files   -->
	<script src=" {{ asset('admin') }}/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src=" {{ asset('admin') }}/assets/js/core/popper.min.js"></script>
	<script src=" {{ asset('admin') }}/assets/js/core/bootstrap.min.js"></script>
	<script src="{{ asset('assets') }}/vendor/sweetalert/sweetalert.all.js"></script>
	<script src="{{ asset('assets') }}/sweetalert/sweetalert2.min.js"></script>
	<script src="{{ asset('assets') }}/tinymce/js/tinymce/tinymce.min.js"></script>
	<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
	<script src="{{ asset('admin') }}/assets/js/plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<!-- jQuery UI -->
	<script src=" {{ asset('admin') }}/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src=" {{ asset('admin') }}/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src=" {{ asset('admin') }}/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src=" {{ asset('admin') }}/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src=" {{ asset('admin') }}/assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Azzara JS -->
	<script src=" {{ asset('admin') }}/assets/js/ready.min.js"></script>
    @yield('customjs')
		<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
</body>
</html>