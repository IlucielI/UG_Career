@extends('layouts.masterfrontend')
@section('title', 'Isi Kuisioner Alumni')
@section('css')
@endsection
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard.user') }}">Home</a></li>
        <li><a href="{{ route('isikuisioneralumni', Auth::user()->id) }}">Isi Kuisioner Alumni</a></li>
      </ol>
      <h2>Isi Kuisioner Alumni UG Career</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
    @php
    $hasil_perusahaan = \App\Models\HasilPerusahaan::where('email', Auth::user()->email)->count();
    @endphp
    @if($hasil_perusahaan == 0)
      <form role="form" action="" method="POST">
       @csrf
       @method('POST')
       <article class="entry">
        <!-- Identitas -->
        <h2 class="entry-title">
          <a>Bagian 1: Identitas Alumni</a>
        </h2>
        @foreach($alumnis as $alumni)
        <div class="col-md-12">
          <div class="form-group">
            <label for="largeInput">NPM</label>
            <input type="text" class="form-control form-control" name = "nomormahasiswa" id="nomormahasiswa" value="{{ $alumni->user->name }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Tahun Masuk</label>
            <input type="text" class="form-control form-control" name = "kodept" id="kodept" value="{{ $alumni->tahun_masuk }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Tahun Lulus</label>
            <input type="text" class="form-control form-control" name = "tahunlulus" id="tahunlulus" value="{{ $alumni->tahun_lulus }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Program Studi/Jurusan</label>
            <input type="text" class="form-control form-control" name = "kodeprodi" id="kodeprodi" value="{{ $alumni->prodi->nama_prodi }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Nama</label>
            <input type="text" class="form-control form-control" name = "nama" id="nama" value="{{ $alumni->user->name }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Nomor Telepon/HP</label>
            <input type="text" class="form-control form-control" name = "nomortelepon" id="nomortelepon" value="{{ $alumni->no_telp }}"readonly >
          </div>
          <div class="form-group">
            <label for="largeInput">Email</label>
            <input type="text" class="form-control form-control" name = "email" id="email" value="{{ $alumni->user->email }}"readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">NIK</label>
            <input type="text" class="form-control form-control" name = "nik" id="nik" value="{{ $alumni->nik }}"readonly>
          </div>
          <br>
          @endforeach

          <!-- Tracer Study -->
          <h2 class="entry-title"><a>Bagian 2: Tracer Study</a></h2>
          <!-- Kuisioner Wajib -->
          <h4><a style="color: red;">Kuisioner Wajib</a></h4>

          <b>1. Jelaskan status Anda saat ini?</b>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
              Bekerja (full time/part time)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              Belum memungkinkan bekerja
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              Wiraswasta
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              Melanjutkan pendidikan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
              Tidak kerja tapi sedang mencari kerja
            </label>
          </div>
          <br>

          <b>2. Apakah anda telah mendapatkan pekerjaan <= 6 bulan / termasuk bekerja sebelum lulus?</b>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Ya
              </label>
              <div class="form-group">
                <label for="largeInput">Dalam berapa bulan anda mendapatkan pekerjaan?</label>
                <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
              </div>
              <div class="form-group">
                <label for="largeInput">Berapa rata-rata pendapatan anda per bulan? (take home pay)?</label>
                <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
              </div>
            </div>
            
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Tidak
              </label>
              <div class="form-group">
                <label for="largeInput">Dalam berapa bulan anda mendapatkan pekerjaan?</label>
                <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
              </div>
            </div>

            <br>

            <b>3. Dimana lokasi tempat Anda bekerja?</b>
            <div class="form-group">
              <label for="largeInput">Provinsi</label>
              <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
            </div>
            <div class="form-group">
              <label for="largeInput">Kab/Kota</label>
              <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
            </div>
            <br>

            <b>Silahkan download data referensi wilayah</b>
            <div><a href="#" class="link-primary">Data referensi Provinsi</a></div>
            <div><a href="#" class="link-primary">Data referensi Kab/Kota</a></div>
            <br>

            <b>4. Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</b>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Instansi pemerintah 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Organisasi non-profit/Lembaga Swadaya Masyarakat 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Perusahaan swasta
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Wiraswasta/perusahaan sendiri
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lainnya, tuliskan:
              </label>
              <div class="form-group">
                <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
              </div>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                BUMN/BUMD
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Institusi / Organisasi Multirateral
              </label>
            </div>
            <br>

            <div class="form-group">
              <b>5. Apa nama perusahaan/kantor tempat Anda bekerja?</b>
              <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
            </div>
            <br>

            <b>6. Bila berwiraswasta, apa posisi/jabatan Anda saat ini ?</b>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Founder 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Co-Founder 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Staff
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Freelance/Kerja Lepas
              </label>
            </div>
            <br>

            <b>7. Apa tingkat tempat kerja Anda?</b>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lokal/Wilayah/Wiraswasta tidak berbadan hukum 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Nasional/Wiraswasta berbadan hukum 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Multinasional/Internasional 
              </label>
            </div>
            <br>
            
            <b>8. Pertanyaan studi lanjut</b>
            <br>
            <a>Sumber Biaya:</a>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Biaya Sendiri 
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Beasiswa
              </label>
            </div>
            <div class="form-group">
              <label for="largeInput">Perguruan Tinggi:</label>
              <input type="text" class="form-control form-control" name = "nomormahasiswa" id="nomormahasiswa" placeholder="Pilih Kode PT" value="">
            </div>
            <div class="form-group">
              <label for="largeInput">Program Studi:</label>
              <input type="text" class="form-control form-control" name = "nomormahasiswa" id="nomormahasiswa" placeholder="Pilih Kode PT" value="">
            </div>
            <div class="form-group">
              <label for="largeInput">Tanggal Masuk:</label>
              <input type="date" class="form-control" name="tgl_terdaftar_npwp" id="tgl_terdaftar_npwp" placeholder="mm/dd/yy" value="" />
            </div>
            <br>
            
            <b>9. Sebutkan sumberdana dalam pembiayaan kuliah?</b>
            <br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Biaya Sendiri / Keluarga
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Beasiswa ADIK
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Beasiswa BIDIKMISI
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Beasiswa PPA
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Beasiswa AFIRMASI
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Beasiswa Perusahaan/Swasta
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Lainnya, tuliskan:
              </label>
              <input type="text" class="form-control form-control" name = "nomormahasiswa" id="nomormahasiswa" value="">
            </div>
            <br>

            <b>10. Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</b>
            <br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Sangat Erat
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Erat
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Cukup Erat
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Tidak sama sekali
              </label>
            </div>
            <br>

            <b>11. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</b>
            <br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Setingkat Lebih Tinggi
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Tingkat Yang Sama
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Setingkat Lebih Rendah
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Tidak Perlu Pendidikan Tinggi
              </label>
            </div>
            <br>

            <b>12. Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?</b>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="text"><b>Sangat Rendah</b></th>
                  <th scope="col" class="text"><b>Rendah</b></th>
                  <th scope="col" class="text"><b>Biasa</b></th>
                  <th scope="col" class="text"><b>Tinggi</b></th>
                  <th scope="col" class="text"><b>Sangat Tinggi</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <br>

            <b>13. Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?</b>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="text"><b>No.</b></th>
                  <th scope="col" class="text"><b>Sangat Rendah</b></th>
                  <th scope="col" class="text"><b>Rendah</b></th>
                  <th scope="col" class="text"><b>Biasa</b></th>
                  <th scope="col" class="text"><b>Tinggi</b></th>
                  <th scope="col" class="text"><b>Sangat Tinggi</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1. Etika</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>2. Keahlian berdasarkan bidang ilmu</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>3. Bahasa Inggris</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>4. Penggunaan Teknologi Informasi</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>5. Komunikasi</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>6. Kerja Sama Tim</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>7. Pengembangan Diri</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <br>
            
            <b>14. Jabatan anda pada waktu pertama bekerja</b>
            <br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Staff
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Operator/Pelaksana
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Administrasi
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Pengawas/Supervisor
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Kepala Bagian/Departemen
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Manajer
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Direktur
              </label>
            </div>
            <br>

            <b>15. Tingkat kesesuaian antara Prodi asal saudara dengan pekerjaan yang saudara tekuni saat ini</b>
            <br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Sangat sesuai dengan bidang keilmuan (kompetensi)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Agak sesuai bidang keilmuan (sifatnya lebih pada keahlian tambahan misalnya bidang IT bagi lulusan non IT)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Tidak sesuai bidang keilmuan (di luar bidang keilmuan misalnya Sarjana Ekonomi jadi Public Relation)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Tidak berkaitan sama sekali (misalnya menjadi guru Agama, Rohaniawan, Relawan, dsb)
              </label>
            </div>
            <br>

            <h4><a style="color: black;">Kuisioner Opsional</a></h4>

            <b>1. Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?</b>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="text"><b>No.</b></th>
                  <th scope="col" class="text"><b>Tidak Sama Sekali</b></th>
                  <th scope="col" class="text"><b>Kurang</b></th>
                  <th scope="col" class="text"><b>Cukup Besar</b></th>
                  <th scope="col" class="text"><b>Besar</b></th>
                  <th scope="col" class="text"><b>Sangat Besar</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1. Perkuliahan</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>2. Demonstrasi</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>3. Partisipasi dalam proyek riset</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>4. Magang</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>5. Praktikum</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>6. Kerja lapangan</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>7. Diskusi</th>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <br>

            <b>2. Kapan anda mulai mencari pekerjaan?Mohon pekerjaan sambilan tidak dimasukkan</b>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked> 
              <label for="exampleRadios1">Kira-kira</label>
              <input type="text" name="firstname" id="inputZip" placeholder="Bulan"> bulan sebelum lulus     
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked> 
            <label for="exampleRadios1">Kira-kira</label>
            <input type="text" name="firstname" id="inputZip" placeholder="Bulan"> bulan sesudah lulus     
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Saya tidak mencari kerja
          </label>
        </div>
        <br>

        <b>3. Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu</b>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Melalui iklan di koran/majalah, brosur
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Melamar ke perusahaan tanpa mengetahui lowongan yang ada
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Pergi ke bursa/pameran kerja
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Mencari lewat internet/iklan online/milis
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Dihubungi oleh perusahaan
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Menghubungi Kemenakertrans
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Menghubungi agen tenaga kerja komersial/swasta
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Menghubungi kantor kemahasiswaan/hubungan alumni
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Membangun jejaring (network) sejak masih kuliah
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Membangun bisnis sendiri
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Melalui penempatan kerja atau magang
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Bekerja di tempat yang sama dengan tempat kerja semasa kuliah
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="exampleRadios1">
            Lainnya, tuliskan:
          </label>
          <input type="text" class="form-control form-control" name = "nomormahasiswa" id="nomormahasiswa" value="">
        </div>
        <br>

        <b>4. Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?</b>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" class="form-control form-control" name = "kodeprodi" id="kodeprodi" value="">
          </div>
        </div>
        <br>

        <b>5. Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?</b>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" class="form-control form-control" name = "kodeprodi" id="kodeprodi" value="">
          </div>
        </div>
        <br>

        <b>6. Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?</b>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" class="form-control form-control" name = "kodeprodi" id="kodeprodi" value="">
          </div>
        </div>
        <br>

        <b>7. Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?</b>
        <br>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Ya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
        <br>

        <b>8. Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? Pilihlah Satu Jawaban.</b>
        <br>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Tidak
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Tidak, tapi saya sedang menunggu hasil lamaran kerja
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Ya, saya akan mulai bekerja dalam 2 minggu ke depan
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Lainnya, tuliskan:
          </label>
          <div class="form-group">
            <input type="text" class="form-control form-control" name = "nama" id="nama" value="">
          </div>
        </div>
        <br>

        <b>9. Tempat anda bekerja saat ini bergerak di bidang apa? (Klasifikasi Baku Lapangan Usaha Indonesia, Kemnakertrans, 2009)</b>
        <div class="form-group col-md-12">
          <select class="form-control" id="inlineFormCustomSelect">
            <option selected>Choose...</option>
            <option value="1">Pertanian tanaman, peternakan, perburuan dan kegiatan yang berhubungan dengan itu</option>  
          </select>
        </div>
        <br>

        <b>10. Berdasarkan pengalaman pada pekerjaan Anda  saat ini,  apa saran yang anda berikan  untuk peningkatan kualitas pembelajaran di Universitas Gunadarma?</b>
        <br>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Penambahan bahan pustaka
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Pengembangan softskill
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Menjaga rasio dosen: mahasiswa yang ideal
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Bimbingan karir
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Bahan kuliah yang lebih kini
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Peningkatan  kualitas SDM
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Peningkatan Sarana/prasarana
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Membangun jejaring dengan industri
          </label>
        </div>
        <br>
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