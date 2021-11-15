<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UG Career | @yield('title')</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

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

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('assets') }}/img/logo.png" alt="">
        <span>FlexStart</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a href="blog.html">Berita</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
          <li><a class="nav-link scrollto" href="#about">Isi Kuisioner</a></li>
          <li><button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#myModalLabel">Login</button></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
        
            <!--Modal: Login / Register Form-->
            <div class="modal fade" id="myModalLabel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog cascading-modal" role="document">
                <!--Content-->
                <div class="modal-content">

                  <!--Modal cascading tabs-->
                  <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                          Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                          Register</a>
                      </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                      <!--Panel 7-->
                      <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body mb-1">
                          <div class="md-form form-sm mb-5">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                            <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                          </div>

                          <div class="md-form form-sm mb-4">
                            <i class="fas fa-lock prefix"></i>
                            <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                            <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                          </div>
                          <div class="text-center mt-2">
                            <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                          </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                          <div class="options text-center text-md-right mt-1">
                            <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                            <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                          </div>
                          <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                      </div>
                      <!--/.Panel 7-->

                      <!--Panel 8-->
                      <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body">
                          <div class="md-form form-sm mb-5">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                            <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                          </div>

                          <div class="md-form form-sm mb-5">
                            <i class="fas fa-lock prefix"></i>
                            <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                            <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                          </div>

                          <div class="md-form form-sm mb-4">
                            <i class="fas fa-lock prefix"></i>
                            <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                            <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                          </div>

                          <div class="text-center form-sm mt-2">
                            <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                          </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                          <div class="options text-right">
                            <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                          </div>
                          <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      <!--/.Panel 8-->
                    </div>

                  </div>
                </div>
                <!--/.Content-->
              </div>
            </div>
            <!--Modal: Login / Register Form-->

            <div class="text-center">
              <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Launch
                Modal LogIn/Register</a>
            </div>
    </div>
  </header><!-- End Header -->
  @yield('konten')
  @yield('sidebarberita')


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
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.js"></script>
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