@extends('layouts.masterfrontend')
@section('title', 'Edit Profil')
@section('css')
@endsection
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard.user') }}">Home</a></li>
        <li><a href="#">Edit Profil</a></li>
      </ol>
      <h2>Edit Profil</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">
      
        <div class="col-lg-12 entries">
          <article class="entry entry-single">
            @foreach ($alumnis as $alumni)
                <div class="col-lg-12">
                  <form role="form" action="{{ route('updateprofil', $alumni->id) }}" method="POST">
                    <div class="form-group">
                      @csrf
                      @method('POST')
                        <label for="largeInput">NPM</label>
                        <input type="text" class="form-control form-control" name ="npm" id="npm" value="{{ $alumni->npm }}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Nama Lengkap</label>
                        <input type="text" class="form-control form-control" name ="name" id="name" value="{{ $alumni->user->name }}">
                    </div>
                    <br>
                    
                    <div class="form-group">
                      <label for="largeInput">Program Studi/Jurusan</label>
                      <select class="form-control" name="id_prodi" required="required" style="">
                      <option disabled selected>-- Daftar Prodi --</option>
                      @foreach ($prodis as $prodi)
                      <option value="{{ $prodi->id }}">{{ $prodi->jenjang }} - {{ $prodi->nama_prodi }}</option>
                      @endforeach
                      @foreach($prodis as $prodi)
                      <option 
                      @if($alumni->id_prodi ==  $prodi->id)
                      selected="selected" 
                      @endif
                      value="{{ $prodi->id }}">{{ $prodi->jenjang }} - {{ $prodi->nama_prodi }}</option>
                      @endforeach
                      </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Tahun Masuk</label>
                        <input type="text" class="form-control form-control" name ="tahun_masuk" id="tahun_masuk" value="{{ $alumni->tahun_masuk }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Tahun Lulus</label>
                        <input type="text" class="form-control form-control" name ="tahun_lulus" id="tahun_lulus" value="{{ $alumni->tahun_lulus }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">No. Telepon/HP</label>
                        <input type="text" class="form-control form-control" name ="no_telp" id="no_telp" value="{{ $alumni->no_telp }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Email</label>
                        <input type="text" class="form-control form-control" name ="email" id="email" value="{{ $alumni->user->email }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">NIK</label>
                        <input type="text" class="form-control form-control" name ="nik" id="nik" value="{{ $alumni->nik }}">
                    </div>
                    </br>
                    <div class="form-group">
                        <label for="largeInput">NPWP</label>
                        <input type="text" class="form-control form-control" name ="npwp" id="npwp" value="{{ $alumni->npwp }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="largeInput">Username</label>
                        <input type="text" class="form-control form-control" name ="username" id="username" value="{{ $alumni->user->username }}">
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
