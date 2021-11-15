<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UG Career | @yield('title')</title>
  <meta content="" name="description">

  <meta content="" name="keywords">
 
  <!-- Favicons -->
  <link href="{{ asset('assets') }}/img/favicongundar.png" rel="icon">
  <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/css/styless.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets') }}/sweetalert/sweetalert2.min.css">
  <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- FONT AWESOME -->
  <script src=" {{ asset('admin') }}/assets/js/plugin/webfont/webfont.min.js"></script>
  <script src=" {{ asset('admin') }}/assets/js/core/jquery.3.2.1.min.js"></script>
  <script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{ asset('admin') }}/assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

  
  @yield('css')
  <!-- =======================================================
  * Template Name: FlexStart - v1.5.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('dashboard.user') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets') }}/img/Gundar.png" alt="">
        <span>UG Career Center</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto @if (Request::segment(1) == '') active @endif" href="{{ route('dashboard.user') }}">Home</a></li>
          <li><a class="nav-link scrollto @if (Request::segment(1) == 'berita') active @endif" href="{{ route('beritaall') }}">Berita</a></li>
          <li><a class="nav-link scrollto @if (Request::segment(1) == '#contact') active @endif" href="{{ route('dashboard.user') }}/#contact">Kontak Kami</a></li>
          @if(isset(Auth::user()->level))
          @if(Auth::user()->level == "alumni")
          <li><a href="{{ route('isikuisioneralumni', Auth::user()->id) }}" class="nav-link scrollto @if (Request::segment(1) == 'isikuisioneralumni') active @endif">Isi Kuisioner</a></li>
          <li class="dropdown"><a href="#"><i class="fas fa-user-circle" style="color:#582971; font-size:30px; margin-top: 24px;" ></i></a>
            <ul class="kotak">
              <br>
              <li class="tombol"><a href="{{ route('editprofil_front', Auth::user()->id) }}"><button type="button" class="btn btn-primary" style="width : 100%;">Lihat Profil</button></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a href="{{url('log_out')}}" class="logout">Log out</a></li>
            </ul>
          @elseif(Auth::user()->level == "perusahaan")
          <li><a href="{{ route('isikuisionerperusahaan', Auth::user()->id) }}">Isi Kuisioner</a></li>
          <li class="dropdown"><div class=""><i class="fas fa-user-circle" style="color:#582971; font-size:30px; margin-top: 5px;" ></i></div>
            <ul class="kotak">
              <br>
              <li class="tombol"><a href="{{ route('editprofilperusahaan', Auth::user()->id) }}"><button type="button" class="btn btn-primary" style="width : 100%;">Lihat Profil</button></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a href="{{url('log_out')}}" class="logout">Log out</a></li>
            </ul>
          @endif
          @endif
          @guest
          <li><a class="getstarted scrollto" href="{{ route('login.index') }}">Login</a></li>
          @else
              <!-- <li class="dropdown"><a href="#"><i class="fas fa-user-circle" style="font-size:30px; margin-top: 2px;" ></i></a>
            <ul class="kotak">
              <br>
              <li class="tombol"><a href="{{ route('editprofil_front', Auth::user()->id) }}"><button type="button" class="btn btn-primary" style="width : 70%;">Lihat Profil</button></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a href="{{url('log_out')}}" class="logout">Log out</a></li>
            </ul> -->
          @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  @include('sweetalert::alert')
  @yield('content')
    

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>UG Career 2021</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Templated by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="{{ asset('assets') }}/vendor/sweetalert/sweetalert.all.js"></script>
	<script src="{{ asset('assets') }}/sweetalert/sweetalert2.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
  <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/purecounter/purecounter.js"></script>
  <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
  
  @yield('optionaljs')
  <!-- Template Main JS File -->
  <script src="{{ asset('assets') }}/js/main.js"></script>
  @yield('scripts')
</body>

</html>