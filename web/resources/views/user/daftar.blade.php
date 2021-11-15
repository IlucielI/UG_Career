@section('title', 'Registrasi')
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
   <link rel="stylesheet" href="{{ asset('assets') }}/sweetalert/sweetalert2.min.css">
   {{-- CDN --}}
   <link href="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
   {{-- CDN       --}}
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   @include('sweetalert::alert')
   <div class="wrapper">
      <div class="title-text">
         <div class="title alumni">
            Registrasi
         </div>
         <div class="title perusahaan">
            Registrasi
         </div>
      </div>
      <div class="form-container">
         <div class="slide-controls">
            <input type="radio" name="slide" id="alumni" checked>
            <input type="radio" name="slide" id="perusahaan">
            <label for="alumni" class="slide alumni">Alumni</label>
            <label for="perusahaan" class="slide perusahaan">Perusahaan</label>
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">
            <form action="{{ route('store') }}" class="alumni" method="POST">
               @csrf
               @method('POST')
               <div class="field mb-0">
                  <input type="text" placeholder="Masukkan NPM" name="npm" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <div class="field ">
                  <input type="text" class="form-control datepicker" name="tahun_masuk" placeholder="Masukkan Tahun Masuk" maxlength="4">
               </div>
               <div class="field">
                  <input type="text" class="form-control datepicker" name="tahun_lulus" placeholder="Masukkan Tahun Lulus" maxlength="4">
               </div>
               <div class="field">
                  <!-- <label style="color : #999;"><h4><b>Program Studi/Jurusan</b></h4></label> -->
                  <select class="form-control field" name="id_prodi" required="required">
                     <option disabled selected>-- Daftar Prodi --</option>
                     @foreach ($prodis as $prodi)
                     <option value="{{ $prodi->id }}">{{ $prodi->jenjang }} - {{ $prodi->nama_prodi }}</option>
                     @endforeach
                  </select>
               </div>
               <br>
               <div class="field">
                  <input type="text" placeholder="Masukkan Nama Lengkap" name="name" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div> 
               <div class="field">
                  <input type="number" placeholder="Masukkan No.Telepon/handphone" name="no_telp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <input type="email" placeholder="Masukkan Email" name="email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <input type="text" placeholder="Masukkan NIK" name="nik" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <small style="color:red"><b>  *NPWP Opsional untuk diisi</b></small></span>
                  <input type="text" placeholder="Masukkan NPWP" name="npwp">
               </div>
               <br>
               <div class="field">
                  <input type="text" placeholder="Masukkan Username atau NPM" name="username" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <small style="color:red"><b>  *Password minimal 8 karakter</b></small></span>
                  <input type="password" placeholder="Password" name="password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <br>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Submit">
               </div>
               <div class="perusahaan-link">
                  Sudah memiliki akun ? <a href="{{ route('login.index') }}">Log in</a>
               </div>
               <div class="" align="center">
                  <a style="color:red;" href="{{ route('dashboard.user') }}"><h4>Kembali</h4></a>
               </div>
            </form>
            <form action="{{ route('simpanregistrasi') }}" class="perusahaan" method="POST">
               @csrf
               @method('POST')
               <div class="field">
                  <input type="text" placeholder="Masukkan Nama Perusahaan" name="name" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <input type="email" placeholder="Masukkan Email Perusahaan" name="email" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <input type="number" placeholder="Masukkan No. Telepon/Handphone" name="no_telp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <input type="text" placeholder="Masukkan URL Perusahaan" name="url_web" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                  <h6 style="color: #999;">*jika tidak memiliki URL perusahaan silahkan isi "-"</h6>
               </div>
               <br>
               <br>
               <div class="field">
                  <label style="color : #999;"><h4>Alamat Perusahaan</h4></label>
                  <textarea class="form-control" aria-label="With textarea" name="alamat" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
               </div>
               <br>
               <br>
               <br>
               <div class="field">
                  <input type="text" placeholder="Masukkan Nama Kontak Personal" name="nama_cp" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <input type="email" placeholder="Masukkan Email Kontak Personal" name="email_cp" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <input type="text" placeholder="Masukkan Jabatan" name="jabatan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <input type="text" placeholder="Masukkan Username" name="username" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <div class="field">
                  <input type="password" placeholder="Password" name="password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Submit">
               </div>
               <div class="perusahaan-link">
                  Sudah memiliki akun ? <a href="{{ route('login.index') }}">Log in</a>
               </div>
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
         // const perusahaanLink = document.querySelector("form .perusahaan-link a");
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

    {{-- CDN --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <script>
      $(document).ready(function(){
       $(".datepicker").datepicker({
          format: "yyyy",
          viewMode: "years", 
          minViewMode: "years",
          autoclose:true
       });   
    })
 </script>
 {{-- END CDN    --}}
</body>
</html>
