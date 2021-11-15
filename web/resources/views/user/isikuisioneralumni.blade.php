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
    $responden = \App\Models\Jawabanresponden::where('id_user', Auth::user()->id)->count();
    $i=1;
    @endphp
    @if($responden == 0)
      <form role="form" action="{{ route('kuisioneralumni.store') }}" method="POST">
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
            <input type="text" class="form-control form-control" id="nomormahasiswa" value="{{ $alumni->npm }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Tahun Masuk</label>
            <input type="text" class="form-control form-control"  id="kodept" value="{{ $alumni->tahun_masuk }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Tahun Lulus</label>
            <input type="text" class="form-control form-control" id="tahunlulus" value="{{ $alumni->tahun_lulus }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Program Studi/Jurusan</label>
            <input type="text" class="form-control form-control" id="kodeprodi" value="{{ $alumni->prodi->jenjang }} - {{ $alumni->prodi->nama_prodi }} | {{ $alumni->prodi->kd_prodi }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Nama</label>
            <input type="text" class="form-control form-control" id="nama" value="{{ $alumni->user->name }}" readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">Nomor Telepon/HP</label>
            <input type="text" class="form-control form-control" id="nomortelepon" value="{{ $alumni->no_telp }}"readonly >
          </div>
          <div class="form-group">
            <label for="largeInput">Email</label>
            <input type="text" class="form-control form-control" id="email" value="{{ $alumni->user->email }}"readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">NIK</label>
            <input type="text" class="form-control form-control"  id="nik" value="{{ $alumni->nik }}"readonly>
          </div>
          <div class="form-group">
            <label for="largeInput">NPWP<span><small style="color:red"><b>  *Silahkan isi/edit pada edit profile</b></small></span></label>
            <input type="text" class="form-control form-control"  id="npwp" value="{{ $alumni->npwp }}"readonly>
          </div>
          <br>
          @endforeach

          <!-- Tracer Study -->
          <h2 class="entry-title"><a>Bagian 2: Tracer Study</a></h2>
          <!-- Kuisioner Wajib -->
          <h4><a style="color: red;">Kuisioner Wajib</a></h4>
          <br/>

        @foreach($pertanyaans as $pertanyaan)
        @if($pertanyaan->jenis_pertanyaan == 'text')
        <div class="form-group">
            <label for="{{ $pertanyaan->kd_pertanyaan }}"><b>{{ $i++ }}. {{ $pertanyaan->pertanyaan }}</b></label>
            <input type="text" class="form-control form-control" name = "{{ $pertanyaan->kd_pertanyaan }}[{{ $pertanyaan->kd_pertanyaan }}]" id="{{ $pertanyaan->kd_pertanyaan }}" value="">
            <br/>
        </div>
        @elseif($pertanyaan->jenis_pertanyaan == 'pilihan')
        <div class="form-group">
            <label for="{{ $pertanyaan->kd_pertanyaan }}" ><b>{{ $i++ }}. {{ $pertanyaan->pertanyaan }}</b></label>
            @if($pertanyaan->is_cabang == 'ya')
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="text"><b>No.</b></th>
                  @foreach( $pertanyaan->pilihanjawaban as $pilihanjawaban)
                  <th scope="col" class="text" style="color: red;"><b>{{ $pilihanjawaban->jawaban}}</b></th>
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
            @if($pertanyaan->kd_pertanyaan == "UG2")
            <select class="form-control" name="{{ $pertanyaan->kd_pertanyaan }}[{{$pertanyaan->kd_pertanyaan}}]" id="{{ $pertanyaan->kd_pertanyaan }}">
                <option selected>--Pilih Bidang Kerja--</option>
            @foreach($pertanyaan->pilihanjawaban as $pilihanjawaban)
            <option value="{{ $pilihanjawaban->jawaban }}">{{$pilihanjawaban->jawaban}}</option>  
            @endforeach
            </select>
            @else
            @foreach($pertanyaan->pilihanjawaban as $pilihanjawaban)
            <div class="form-check">
              <input class="form-check-input @if($pilihanjawaban->jawaban == 'Lainnya, tuliskan:')lainnya_radio @endif" type="radio" name="{{ $pertanyaan->kd_pertanyaan }}[{{$pilihanjawaban->kd_jawaban}}]" id="{{ $pertanyaan->kd_pertanyaan.$loop->index+1 }}" @if($pilihanjawaban->jawaban == 'Lainnya, tuliskan:') data-loop = {{$loop->index+1}} @endif data-kd = {{$pertanyaan->kd_pertanyaan}} data-kd_jawaban = {{$pilihanjawaban->kd_jawaban}} value="{{$pilihanjawaban->jawaban}}">
              <label class="form-check-label" for="{{ $pertanyaan->kd_pertanyaan.$loop->index+1 }}">
              <?= $pilihanjawaban->jawaban; ?>
              </label>
              @if($pilihanjawaban->jawaban == 'Lainnya, tuliskan:')
              <input type="text" style="display: none" class="form-control form-control" name = "{{ $pertanyaan->kd_pertanyaan }}[{{ $pertanyaan->kd_pertanyaan."02" }}]" id="{{ $pertanyaan->kd_pertanyaan.$loop->index+2 }}" value="">
              @endif
            </div>
            @endforeach
            @endif
            @endif
            <br/>
        </div>
        @elseif($pertanyaan->jenis_pertanyaan == 'pilihan dan text')
        <div class="form-group">
          <label for="{{ $pertanyaan->kd_pertanyaan }}" ><b>{{ $i++ }}. {{ $pertanyaan->pertanyaan }}</b></label><br>
          @foreach( $pertanyaan->pertanyaan_cabang as $pertanyaan_cabang)
            <label for="{{ $pertanyaan_cabang->kd_cabang }}" ><b>{{ $pertanyaan_cabang->pertanyaan_cabang}}</b></label>
            @if($pertanyaan_cabang->jenis_jawaban == 'text')
            <input type="text" class="form-control form-control" name = "{{ $pertanyaan_cabang->kd_cabang }}" id="{{ $pertanyaan_cabang->kd_cabang }}" value="">
            @elseif($pertanyaan_cabang->jenis_jawaban == 'pilihan')
              @foreach($pertanyaan_cabang->pilihanjawabancabang as $pilihanjawabancabang)
                <div class="form-check">
                      <input class="form-check-input" type="radio" name="{{ $pertanyaan->kd_pertanyaan }}[{{$pilihanjawabancabang->kd_jawaban}}]" id="{{$pilihanjawabancabang->kd_jawaban}}.{{$loop->index}}" value="{{$pilihanjawabancabang->jawaban}}">
                      <label class="form-check-label" for="{{$pertanyaan_cabang->kd_cabang}}.{{$loop->index}}">{{$pilihanjawabancabang->jawaban}}</label>
                </div>
              @endforeach
            @elseif ($pertanyaan_cabang->jenis_jawaban == 'date')
            <input type="date" class="form-control" name = "{{ $pertanyaan_cabang->kd_cabang }}" id="{{ $pertanyaan_cabang->kd_cabang }}" placeholder="mm/dd/yy" value="" />
            @elseif ($pertanyaan_cabang->jenis_jawaban == 'combo box')
              <select class="form-select" name="{{ $pertanyaan_cabang->kd_cabang }}" id="{{ $pertanyaan_cabang->pertanyaan_cabang }}">
                <option value="">---Pilih {{ $pertanyaan_cabang->pertanyaan_cabang }}---</option>
                    @foreach($pertanyaan_cabang->pilihanjawabancabang as $pilihanjawabancabang)
                     <option value="{{$pilihanjawabancabang->jawaban}}" data-id="{{$pilihanjawabancabang->id}}">{{$pilihanjawabancabang->jawaban}}</option>
                    @endforeach
              </select>
            @else
            @endif
            @endforeach
            <br>
          </div>
        @elseif($pertanyaan->jenis_pertanyaan == 'if else')
          <div class="form-group">
              <label for="{{ $pertanyaan->kd_pertanyaan }}" ><b>{{ $i++ }}. {{ $pertanyaan->pertanyaan }}</b></label><br>
              @foreach($pertanyaan->pilihanjawaban as $pilihanjawaban)
                <div class="form-check">
                      <input class="form-check-input {{$pilihanjawaban->kd_jawaban}}" type="radio" name="{{ $pertanyaan->kd_pertanyaan }}[{{$pilihanjawaban->kd_jawaban}}]" id="{{$pilihanjawaban->kd_jawaban}}.{{$loop->index}}" value="{{$pilihanjawaban->jawaban}}">
                      <label class="form-check-label" for="{{$pilihanjawaban->kd_jawaban}}.{{$loop->index}}">{{$pilihanjawaban->jawaban}}</label>
                      <div id="container_{{$pilihanjawaban->kd_jawaban}}_{{$loop->index}}" style="display: none">
                        @foreach($pilihanjawaban->pertanyaan_cabang as $pertanyaan_cabang)
                        <div class="form-group"><label for="{{$pertanyaan_cabang->kd_cabang}}">{{$pertanyaan_cabang->pertanyaan_cabang}}</label><input type="text" class="form-control form-control" name = "{{$pertanyaan_cabang->kd_cabang}}" id="{{$pertanyaan_cabang->kd_cabang}}" value=""></div>
                        @endforeach
                      </div>
                </div>
              @endforeach
          </div>
        @else
            <label for="{{ $pertanyaan->kd_pertanyaan }}"><b>{{ $i++ }}. {{ $pertanyaan->pertanyaan }}</b></label>
        @foreach($pertanyaan->pilihanjawaban as $pilihanjawaban)
            <div class="form-check">
              <input class="form-check-input @if($pilihanjawaban->jawaban == 'Lainnya, tuliskan:')lainnya_checkbox @endif" type="checkbox" value="{{$pilihanjawaban->jawaban}}" name="{{ $pertanyaan->kd_pertanyaan }}[{{$pilihanjawaban->kd_jawaban}}]" id="{{ $pertanyaan->kd_pertanyaan.$loop->index+1 }}" @if($pilihanjawaban->jawaban == 'Lainnya, tuliskan:') data-loop = {{$loop->index+1}} data-kd = {{$pertanyaan->kd_pertanyaan}} @endif>
              <label class="form-check-label" for="{{ $pertanyaan->kd_pertanyaan.$loop->index+1 }}">
              {{ $pilihanjawaban->jawaban }}
              </label>
              @if($pilihanjawaban->jawaban == 'Lainnya, tuliskan:')
              <input type="text" class="form-control form-control" style="display: none" name = "{{ $pertanyaan->kd_pertanyaan }}[{{ $pertanyaan->kd_pertanyaan.$loop->index+2 }}]" id="{{ $pertanyaan->kd_pertanyaan.$loop->index+2 }}" value="">
              @endif
            </div>
        @endforeach
            <br/>
        @endif
        {{-- @if($pertanyaan->kd_pertanyaan == "F2")
        <label><b>{{ $i++}}. Kapan anda mulai mencari pekerjaan? Mohon pekerjaan sambilan tidak dimasukkan</b></label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="F3" id="F3-1" value="ya"> 
              <label for="F3-1">Kira-kira</label>
              <input type="number" name="F3A" id="F3A" placeholder="Bulan"> bulan sebelum lulus     
            </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="F3" id="F3-2" value="tidak"> 
              <label for="F3-2">Kira-kira</label>
              <input type="number" name="F3A" id="F3A" placeholder="Bulan"> bulan sesudah lulus     
            </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="F3" id="F3-3" value="Saya tidak mencari kerja">
              <label class="form-check-label" for="F3-3">
                Saya tidak mencari kerja
              </label>
            </div>
            <br/>
        @endif --}}
        {{-- @if($pertanyaan->kd_pertanyaan == "F17B")
        <b>{{ $i++}} Pertanyaan Studi Lanjut</b>
            <br>
        <label>Sumber Biaya:</label>
        <div class="form-group col-md-12">
          <select class="form-control" name ="F18A" id="inlineFormCustomSelect">
            <option value="">--Pilih Sumber Biaya--</option>
            <option value="Biaya Sendiri">Biaya Sendiri</option>  
            <option value="Beasiswa">Beasiswa</option>  
          </select>
        </div>
            <div class="form-group">
              <label for="largeInput">Perguruan Tinggi:</label>
              <input type="text" class="form-control form-control" name = "F18B" id="nomormahasiswa" placeholder="Pilih Kode PT" value="">
            </div>
            <div class="form-group">
              <label for="largeInput">Program Studi:</label>
              <input type="text" class="form-control form-control" name = "F18C" id="nomormahasiswa" placeholder="Pilih Kode Prodi" value="">
            </div>
            <div class="form-group">
              <label for="largeInput">Tanggal Masuk:</label>
              <input type="date" class="form-control" name="F18D" id="F18D" placeholder="mm/dd/yy" value="" />
            </div>
            <br>
        @endif --}}
        {{-- @if($pertanyaan->no_tampilan == "F5D") --}}
        {{-- <label><b>{{ $i++}} Apakah anda telah mendapatkan pekerjaan <= 6 bulan / termasuk bekerja sebelum lulus?</b></label>
            <div class="form-check">
              <input class="form-check-input F504" type="radio" name="F504" id="F504-1" value="ya">
              <label class="form-check-label" for="F504-1">
                Ya
              </label>
              <div id="container_504_ya">
              </div>
            </div>     
            <div class="form-check">
              <input class="form-check-input F504" type="radio" name="F504" id="F504-2" value="tidak">
              <label class="form-check-label" for="F504-2">
                Tidak
              </label>
              <div id="container_504_tidak">
              </div>
            </div>
            <br/> --}}
            {{-- <b>{{ $i++}}. Dimana lokasi tempat Anda bekerja?</b>
            <div class="form-group">
              <label for="largeInput">Provinsi</label>
              <select class="form-select" name="F510[F5A1]" id="provinsi">
                <option value="">---Pilih Provinsi---</option>
                @foreach ($provinsis as $provinsi)
                    <option value="{{$provinsi->id}}">{{$provinsi->nama_provinsi}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="largeInput">Kab/Kota</label>
              <select class="form-select" name="F510[F5A1]" id="kabkota">
              <option value="">---Pilih Kab/Kota---</option>
              </select>
            </div>
            <br> --}}
        {{-- @endif --}}


        @endforeach
        <!-- <b>8. Pertanyaan studi lanjut</b>
            <br> -->
            <!-- <a>Sumber Biaya:</a>
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
            </div> -->
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
      </article><!-- End blog entry -->
    </form>
    @else
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Kamu Telah Mengisi Kuisioner!</h4>
    <p>Terima kasih atas kesediaannya untuk mengisi kuesioner.</p>
    <hr>
    <p class="mb-0"></p>
  </div>
    @endif
  </div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@section('scripts')
<script type="text/javascript">

$('#Provinsi').change(function(){
    var id = $(this).find(':selected').data('id'); 
    var url = '/UG_Career/getkabkota'+"/"+id;
    $.ajax({
				url: url,
				method: "GET",
				dataType: 'json',
				success: function(datas) {
						var htmlkom = '';
						for (i = 0; i < datas.length; i++) {
							htmlkom += '<option value="'+datas[i].nama_kabkota+'">'+datas[i].nama_kabkota+'</option>';
						}
						$(`#Kab-Kota`).html(htmlkom);

				}
			});  
});

$(document).ready(function() {
        $("input[type='radio']").click(function(){
					var val = $(this).val();
          let kd = $(this).data('kd');
          // console.log(name);
          if (val == "Lainnya, tuliskan:"){
            let loop = $(this).data('loop');
            loop++;
            let id = "#"+kd+loop;
            $(id).show();
          }else{
            let kd_jawaban = $(this).data('kd_jawaban');
            let name = kd+'\\['+kd_jawaban+'\\]'          
            let loop = $("input[name="+name+"][value = 'Lainnya, tuliskan:']").data('loop');
            loop++;
            let id = "#"+kd+loop;
            $(id).hide();
          }
        });
        $(".lainnya_checkbox").click(function(){
            let kd = $(this).data('kd');
            let loop = $(this).data('loop');
            loop++;
            let id = "#"+kd+loop;
          if ($(this).prop('checked') == true){
            $(id).show();
          }else{
            $(id).hide();
          }
        });
        $("input[name='F3\\[F301\\]']").click(function(){
          var val = $(this).val();
          if (val == 'Sebelum'){
            $("#F302").prop('disabled', false);
            $("#F303").prop('disabled', true);
          }else if (val == 'Sesudah'){
            $("#F303").prop('disabled', false);
            $("#F302").prop('disabled', true);
          }else{
            $("#F303").prop('disabled', true);
            $("#F302").prop('disabled', true);

          }
        })
				$('.F504').change(function() {
					var val = $(this).val(); 
					if(val == "Ya"){
            $("#container_F504_0").show();
            $("#container_F504_1").hide();
						// $("#container_504_tidak").empty();
						// var html='<div class="form-group"><label for="largeInput">Dalam berapa bulan anda mendapatkan pekerjaan?</label><input type="number" class="form-control form-control" name = "F504A" id="F504A" value=""></div><div class="form-group"><label for="largeInput">Berapa rata-rata pendapatan anda per bulan? (take home pay)?</label><input type="text" class="form-control form-control" name = "F504B" id="F504B" value=""></div>';
            // $("#container_504_ya").html(html);
					}else{
            $("#container_F504_0").hide();
            $("#container_F504_1").show();
						// $("#container_504_ya").empty();
            // html='<div class="form-group"><label for="largeInput">Dalam berapa bulan anda mendapatkan pekerjaan?</label><input type="number" class="form-control form-control" name = "F504A" id="bulan_kerja" value=""></div>';
            // $("#container_504_tidak").html(html);
					}
				});
        $('#F31').val('Sebelum');
        $('#F32').val('Sesudah');
	});

</script>
@endsection('scripts')
@endsection