@extends('layouts.masterfrontend')
@section('title', 'Berita')
@section('css')
@endsection
@section('content')
<style type="text/css">
.gambar {
  width: 100%;
  height: 50%;
}
</style>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard.user') }}">Home</a></li>
        <li><a href="{{ route('beritaall') }}">Berita</a></li>
      </ol>
      <h2>Berita UG Career</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">
          <article class="entry entry-single">
            @foreach($beritas as $berita)

            <div class="entry-img">
              <img src="{{ asset('img/'. $berita->foto )}}" alt="" class="img-fluid gambar">
            </div>

            <h2 class="entry-title">
              <a href="{{route('beritasingle.show', $berita->id)}}">{{ $berita->judul_berita }}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{route('beritasingle.show', $berita->id)}}"><time datetime="2020-01-01">{{ tanggal_indonesia($berita->created_at) }}</time></a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                {{ $berita->preview_berita}}
              </p>
              <div class="read-more">
                <a href="{{route('beritasingle.show', $berita->id)}}">Selengkapnya</a>
              </div>
            </div>

          </article>
          @endforeach<!-- End blog entry -->

          <div class="blog-pagination">
            <ul class="justify-content-center">
            {!! $beritas->appends(['sort' => 'science-stream'])->links() !!}
            </ul>
          </div>

          <!-- <div class="d-flex justify-content-center">
            {!! $beritas->appends(['sort' => 'science-stream'])->links() !!}
          </div>  -->

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">
          <h3 class="sidebar-title">Kategori</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="{{ route('beritakategori', 'Pengumuman') }}">Pengumuman <span> ({{ $count_pengumuman }})</span></a></li>
              </ul>
              <ul>
                <li><a href="{{ route('beritakategori', 'Loker') }}">Lowongan Kerja<span> ({{ $count_loker }})</span></a></li>
              </ul>
              <ul>
                <li><a href="{{ route('beritakategori', 'Internship') }}">Internship <span> ({{ $count_intern }})</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->


            <h3 class="sidebar-title">Berita Terbaru</h3>
            <div class="sidebar-item recent-posts">
              @foreach( $listberitas as $listberita)
              <div class="post-item clearfix">
                <img src="{{ asset('img/'. $listberita->foto )}}" alt="">
                <h4><a href="/UG_Career/berita/{{$listberita->id}}">{{ $listberita->judul_berita }}</a></h4>
                <time datetime="2020-01-01 12:00">{{ tanggal_indonesia($listberita->created_at) }}</time>
              </div>
              @endforeach

            </div><!-- End sidebar recent posts-->


          </div><!-- End sidebar -->

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

  $(document).ready(function() {
		$('#select_category').change(function() {
			var val = $(this).val(); 
			window.location = "/UG_Career/berita" +"/" +val;

		});
	});

</script>

@endsection
@endsection
