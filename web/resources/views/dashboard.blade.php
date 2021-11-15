@extends('layouts.masterfrontend')
@section('title', 'Dashboard')
@section('css')
<style>
#frame-image img {
  max-height: 320px;
  position: absolute;
  left: -10px;
  top: -86px;
}
</style>
@endsection
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">UG Tracer</h1>
        @guest
        <h2 data-aos="fade-up" data-aos-delay="400">Bagi alumni dan perusahaan yang belum memiliki akun dapat melakukan registrasi melalui link berikut</h2>
        @endguest
        @if(isset(Auth::user()->level))
          @if(Auth::user()->level == "alumni" or Auth::user()->level == "perusahaan")
        <h2 data-aos="fade-up" data-aos-delay="400">Selamat Datang {{ Auth::user()->name }} ! Silahkan Isi Kuisioner dan Jelajahi Fitur Kami.</h2>
        @endif
        @endif
        <div data-aos="fade-up" data-aos-delay="600">
        @guest
          <div class="text-center text-lg-start">
            <a href="{{ route('daftar.registrasi') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Registrasi</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
          @endguest
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('assets') }}/img/gundarlogocopy.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
  <!-- ======= Clients Section ======= -->
<!-- <section id="clients" class="clients">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Kerjasama</h2>
      <p>Perusahaan Terdaftar</p>
    </header>

    <div class="clients-slider swiper-container">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-1.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-2.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-3.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-4.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-5.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-6.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-7.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="{{ asset('assets') }}/img/clients/client-8.png" class="img-fluid" alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

</section>End Clients Section -->

<!-- ======= Isi Kuisioner Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3>UG Career Center Universitas Gunadarma</h3>
          <h2>Selamat Datang Di Situs UG Career Center Universitas Gunadarma. </h2>
          <p>
          UG Career Merupakan Web Pendataan Alumni dan Mitra Perusahaan yang Berkerja Sama. Dalam rangka meningkatkan kualitas akademik Universitas Gunadarma, silahkan login dan register untuk membantu kami dalam melakukan pendataan Alumni dan Perusahaan.
          </p>
          @if(isset(Auth::user()->level))
          @if(Auth::user()->level == "alumni") 
          <div class="text-center text-lg-start">
            <a href="{{ route('isikuisioneralumni', Auth::user()->id) }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Isi Kuisioner Sekarang</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
          @elseif(Auth::user()->level == "perusahaan")
          <div class="text-center text-lg-start">
            <a href="{{ route('isikuisionerperusahaan', Auth::user()->id) }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Isi Kuisioner Sekarang</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
          @endif
          @endif
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('assets') }}/img/aboutcopy.png" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section><!-- End About Section -->

<!-- Berita -->
<section id="recent-blog-posts" class="recent-blog-posts">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Berita</h2>
      <p>Berita Terbaru</p>
    </header>

    <div class="row">

      @foreach($beritas as $berita)
      <div class="col-lg-4">
        <div class="post-box">
          <div class="post-img frame-image img"><img src="{{ asset('img/'. $berita->foto )}}" class="img-fluid rounded" width="300px"alt=""></div>
          <span class="post-date">{{ tanggal_indonesia($berita->created_at) }}</span>
          <h3 class="post-title">{{ $berita->judul_berita }}</h3>
          <a href="{{route('beritasingle.show', $berita->id)}}" class="readmore stretched-link mt-auto"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          <!-- <button class="readmore stretched-link mt-auto" type="button" id="{{ $berita->id }}" onclick="showberita(this.id)"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i>
									</button>
									<form id="show-form-{{ $berita->id }}" action="{{ route('beritasingle.show', $berita->id) }}" method="GET" style="display: none;">
										@csrf
										@method('GET')
									</form> -->
                </div>
              </div>
              @endforeach

            </div>

          </div>

        </section><!-- End Recent Blog Posts Section -->   
        <!-- ======= Recent Blog Posts Section ======= -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

          <div class="container" data-aos="fade-up">

            <header class="section-header">
              <h2>Hubungi</h2>
              <p>Kontak Kami</p>
            </header>
            @foreach($datawebs as $dataweb)
            <div class="row gy-4">

              <div class="col-lg-12">

                <div class="row gy-4">
                  <div class="col-md-4">
                    <div class="info-box">
                      <i class="bi bi-geo-alt"></i>
                      <h3>Alamat</h3>
                      <p>{{ $dataweb->alamat}}</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="info-box">
                      <i class="bi bi-envelope"></i>
                      <h3>Email</h3>
                      <p>{{ $dataweb->email }}</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="info-box">
                      <i class="bi bi-clock"></i>
                      <h3>Jam Pelayanan</h3>
                      <p>{{ $dataweb->jam_pelayanan }}</p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
 
           </div>
          </div>
        </section><!-- End Contact Section -->

      </main><!-- End #main -->
      @section('scripts')
      <script type="text/javascript">
        function showpertanyaan(id) {
         event.preventDefault();
         document.getElementById('show-form-'+id).submit();
       } 
     </script>
     @endsection
     @endsection