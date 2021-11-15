@section('title', 'Log in')
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>UG Career | @yield('title')</title>

   <!-- Favicons -->
   <link href="{{ asset('assets') }}/img/favicongundar.png" rel="icon">
   <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
   <link rel="stylesheet" href="{!! asset('login_fe/assets/styles.css') !!}">
   <link rel="stylesheet" href="{!! asset('login_fe/assets/styles.css') !!}">
   <link rel="stylesheet" href="{{ asset('assets') }}/sweetalert/sweetalert2.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color:purple !important;">
   @include('sweetalert::alert')
   <div class="wrapper">
      <div class="title-text">
         <div class="title alumni">
            Login
         </div>
      </div>
      <div class="form-container">
         <div class="form-inner">
            <form action="{{ route('postlogin') }}" class="alumni" method="POST">
               @csrf
               @method('POST')
               <div class="field">
                  <input id="username" placeholder="Masukkan Username" type="username" class="form-control form-control-xl @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div><br>
               <div class="field">
                  <input type="password" name="password" placeholder="Password" required>
               </div>
               <div class="pass-link">
                  <a href="{{ route('lupapassword.lupa_password') }}">Lupa password ?</a>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Login">
               </div>
               <div class="perusahaan-link">
                  Belum memiliki akun ? <a href="{{ route('daftar.registrasi') }}">Registrasi Akun</a>
               </div>
               <div class="" align="center">
                  <a style="color:red;" href="{{ route('dashboard.user') }}" class="btn btn-primary"><h4>Kembali</h4></a>
               </div>
               
            </form>
         </div>
      </div>
   </div>
   <script>
      const alumniText = document.querySelector(".title-text .alumni");
      const alumniForm = document.querySelector("form.alumni");
      const alumniBtn = document.querySelector("label.alumni");
      const perusahaanBtn = document.querySelector("label.perusahaan");
      const perusahaanLink = document.querySelector("form .perusahaan-link a");
      perusahaanBtn.onclick = (()=>{
       alumniForm.style.marginLeft = "-50%";
       alumniText.style.marginLeft = "-50%";
    });
      alumniBtn.onclick = (()=>{
       alumniForm.style.marginLeft = "0%";
       alumniText.style.marginLeft = "0%";
    });
      perusahaanLink.onclick = (()=>{
       perusahaanBtn.click();
       return false;
    });
 </script>
 <script src="{{ asset('assets') }}/vendor/sweetalert/sweetalert.all.js"></script>
 <script src="{{ asset('assets') }}/sweetalert/sweetalert2.min.js"></script>
</body>
</html>
