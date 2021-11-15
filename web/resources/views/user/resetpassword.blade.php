@section('title', 'Log in')
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
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title alumni">
               Lupa Password
            </div>
         </div>
         <div class="form-container">
            <div class="form-inner">
               <form action="{{ route('password_update') }}" class="alumni" method="POST">
                   {{ csrf_field() }}
                   @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  <input type="hidden" name="token" value="{{ $token }}">
                  <div class="field">
                     <input type="email" name="email" placeholder="Masukkan Email" value="{{ $email ?? old('email') }}" required>
                     <span class="text-danger">@error('email'){{ 'message'}} @enderror</span>
                  </div>
                  <div class="field">
                     <input type="password" name="password_baru" placeholder="Password baru" required>
                     <span class="text-danger">@error('password'){{ 'message'}} @enderror</span>
                  </div>
                  <div class="field">
                     <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
                     <span class="text-danger">@error('confirm_password'){{ 'message'}} @enderror</span>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Reset Password">
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
   </body>
</html>
