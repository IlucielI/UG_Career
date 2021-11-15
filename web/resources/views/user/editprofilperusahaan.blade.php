@extends('layouts.masterfrontend')
@section('title', 'Edit Profil Perusahaan')
@section('css')
@endsection
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard.user') }}">Home</a></li>
        <li><a href="#">Edit Profil Perusahaan</a></li>
      </ol>
      <h2>Edit Profil Perusahaan</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">
      
        <div class="col-lg-12 entries">
          <article class="entry entry-single">
            @foreach ($perusahaans as $perusahaan)
                <div class="col-lg-12">
                  <form role="form" action="{{ route('updateprofilperusahaan', $perusahaan->id) }}" method="POST">
                    <div class="form-group">
                      @csrf
                      @method('POST')
                        <label for="largeInput">Nama Instansi</label>
                        <input type="text" class="form-control form-control" name ="name" id="name" value="{{ $perusahaan->user->name }}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Email Perusahaan</label>
                        <input type="text" class="form-control form-control" name ="email" id="email" value="{{ $perusahaan->user->email }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Nomor Telepon</label>
                        <input type="text" class="form-control form-control" name ="no_telp" id="no_telp" value="{{ $perusahaan->no_telp }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">URL Web</label>
                        <input type="text" class="form-control form-control" name ="url_web" id="url_web" value="{{ $perusahaan->url_web }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Alamat Perusahaan</label>
                        <input type="text" class="form-control form-control" name ="alamat" id="alamat" value="{{ $perusahaan->alamat }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Nama Contact Person</label>
                        <input type="text" class="form-control form-control" name ="nama_cp" id="nama_cp" value="{{ $perusahaan->nama_cp }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Jabatan</label>
                        <input type="text" class="form-control form-control" name ="jabatan" id="jabatan" value="{{ $perusahaan->jabatan }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Email Contact Person</label>
                        <input type="text" class="form-control form-control" name ="email_cp" id="email_cp" value="{{ $perusahaan->email_cp }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Username</label>
                        <input type="text" class="form-control form-control" name ="username" id="username" value="{{ $perusahaan->user->username }}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Ubah Password</label>
                        <input type="text" class="form-control form-control" name ="password" id="password" placeholder="*********">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-warning" style="margin-left: 500px;">Ubah data</button>
              @endforeach
          </form>

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@section('scripts')

<script>
  $(document).ready(function() {
    $('.flex.justify-between.flex-1').remove();
    $('.text-sm.text-gray-700.leading-5').remove();
  });
</script>

@endsection
@endsection
