@extends('layouts.masterfrontend')
@section('title', 'Isi Kuisioner Perusahaan')
@section('css')
@endsection
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ route('dashboard.user') }}">Home</a></li>
        <li><a href="{{ route('isikuisionerperusahaan',Auth::user()->id) }}">Isi Kuisioner Perusahaan</a></li>
      </ol>
      <h2>Isi Kuisioner Perusahaan UG Career</h2>

    </div>
  </section><!-- End Breadcrumbs -->
  
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
    @php
    $responden = \App\Models\Jawabanresponden::where('id_user', Auth::user()->id)->count();
    @endphp
    @if($responden == 0)

      <form role="form" action="{{ route('kuisionerperusahaan.store') }}" method="POST">
       @csrf
       @method('POST')
       <article class="entry">
        <!-- Identitas -->
        <h2 class="entry-title">
          <a>Bagian 1: Identitas Perusahaan</a>
        </h2>
        
        <div class="col-md-12">
        @foreach($perusahaans as $perusahaan)
          <div class="form-group">
            <label for="largeInput">Nama Perusahaan</label>
            <input type="text" class="form-control form-control" id="nama_perusahaan" value="{{ $perusahaan->user->name }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Email Perusahaan</label>
            <input type="text" class="form-control form-control" id="email_perusahaan" value="{{ $perusahaan->user->email }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Nomor Telepon</label>
            <input type="text" class="form-control form-control" id="no_telp" value="{{ $perusahaan->no_telp }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">URL Web</label>
            <input type="text" class="form-control form-control"  id="url_web" value="{{ $perusahaan->url_web }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Alamat Perusahaan</label>
            <input type="text" class="form-control form-control" id="alamat_perusahaan" value="{{ $perusahaan->alamat }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Kontak Personal</label>
            <input type="text" class="form-control form-control"  id="kontak_person" value="{{ $perusahaan->nama_cp }}"readonly >
          </div>
          <div class="form-group">
            <label for="largeInput">Jabatan</label>
            <input type="text" class="form-control form-control" id="jabatan" value="{{ $perusahaan->jabatan }}"readonly>
          </div>
          <br>
          @endforeach
          <!-- Tracer Study -->
          <h2 class="entry-title"><a>Bagian 2: Tracer Perusahaan</a></h2>
          <!-- Kuisioner Wajib -->
          <h4><a style="color: red;">Kuisioner Wajib</a></h4>
          <br/>

        @foreach($pertanyaans as $pertanyaan)
        @if($pertanyaan->jenis_pertanyaan == 'text')
        <div class="form-group">
            <label for="{{ $pertanyaan->kd_pertanyaan }}"><b>{{ $loop->index+1 }}. {{ $pertanyaan->pertanyaan }}</b></label>
            <input type="text" class="form-control form-control" name = "{{ $pertanyaan->kd_pertanyaan }}" id="{{ $pertanyaan->kd_pertanyaan }}" value="">
            <br/>
        </div>
        @elseif($pertanyaan->jenis_pertanyaan == 'pilihan')
        <div class="form-group">
            <label for="{{ $pertanyaan->kd_pertanyaan }}" ><b>{{ $loop->index+1 }}. {{ $pertanyaan->pertanyaan }}</b></label>
            @if($pertanyaan->is_cabang == 'ya')
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="text"><b>Pertanyaan</b></th>
                  @foreach( $pertanyaan->pilihanjawaban as $pilihanjawaban)
                  <th scope="col" class="text" style="color: red;">{{ $pilihanjawaban->jawaban}}</th>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                @foreach( $pertanyaan->pertanyaan_cabang as $pertanyaan_cabang)
                <tr>
                  <th>{{ $pertanyaan_cabang->pertanyaan_cabang}}</th>
                  @foreach( $pertanyaan->pilihanjawaban as $pilihanjawaban)
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="{{$pertanyaan_cabang->kd_cabang}}" id="{{$pertanyaan_cabang->kd_cabang}}" value="{{$pilihanjawaban->jawaban}}">
                      <label class="form-check-label" for="{{$pertanyaan_cabang->kd_cabang}}"></label>
                    </div>
                  </td>
                  @endforeach
                </tr>
                @endforeach
              </tbody>
            </table>
            <br>
            @else
            @foreach($pertanyaan->pilihanjawaban as $pilihanjawaban)
            <div class="form-check">
              <input class="form-check-input" type="radio" name="{{ $pertanyaan->kd_pertanyaan }}" id="{{ $pertanyaan->kd_pertanyaan }}" value="{{$pilihanjawaban->jawaban}}">
              <label class="form-check-label" for="{{ $pertanyaan->kd_pertanyaan }}">
              {{ $pilihanjawaban->jawaban }}
              </label>
            </div>
            @endforeach
            @endif
            <br/>
        </div>
        @else
            <label for="{{ $pertanyaan->kd_pertanyaan }}">{{ $loop->index+1 }}. {{ $pertanyaan->pertanyaan }}</label>
        @foreach($pertanyaan->pilihanjawaban as $pilihanjawaban)
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="{{$pilihanjawaban->jawaban}}" name="{{ $pertanyaan->kd_pertanyaan }}" id="{{ $pertanyaan->kd_pertanyaan }}" >
              <label class="form-check-label" for="{{ $pertanyaan->kd_pertanyaan }}">
              {{ $pilihanjawaban->jawaban }}
              </label>
            </div>
            @endforeach
            <br/>
        @endif
        @endforeach
        
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
      </article><!-- End blog entry -->
    </form>
    @else
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Perusahaanmu Telah Mengisi Kuisioner!</h4>
    <p>Terima kasih atas kesediaannya untuk mengisi kuesioner.</p>
    <hr>
    <p class="mb-0"></p>
  </div>
    @endif
  </div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

@endsection