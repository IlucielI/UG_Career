@section('title','Lupa Password')
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>UG Career | @yield('title')</title>

   <!-- Favicons -->
   <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
   <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
   <link rel="stylesheet" href="{!! asset('login_fe/assets/styles.css') !!}">
   <link rel="stylesheet" href="{{ asset('assets') }}/sweetalert/sweetalert2.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   @include('sweetalert::alert')
   <div class="wrapper">
      <div class="title-text">
         <div class="title alumni">
            Lupa Password
         </div>
      </div>
      <div class="form-container">
         <div class="form-inner">
            <form action="{{ route('post_lupa_password') }}" class="alumni" method="POST">
               @csrf
               @method('POST')
               <div class="field">
                  <input type="email" name="email" placeholder="Masukkan Email" value="{{ old('email') }}" required>
                  @if($errors->any('email'))
                  <span class="text-danger">{{ $error->first('email') }}</span>
                  @endif
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Request Password">
               </div>
               <br>
               <div class="" align="center">
                  <a style="color:red;" href="{{ route('dashboard.user') }}"><h4>Kembali</h4></a>
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
