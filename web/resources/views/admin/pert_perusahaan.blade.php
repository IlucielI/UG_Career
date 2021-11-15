@extends('layouts.masterbackend')
@section('title', 'Pertanyaan Perusahaan')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Pertanyaan Perusahaan</h4>
	<ul class="breadcrumbs">
		<li class="nav-home">
			<a href="{{ route('administrator.dashboard') }}">
				<i class="flaticon-home"></i>
			</a>
		</li>
		<li class="separator">
			<i class="flaticon-right-arrow"></i>
		</li>
		<li class="nav-item">
			<a href="#">Tracer Study</a>
		</li>
		<li class="separator">
			<i class="flaticon-right-arrow"></i>
		</li>
		<li class="nav-item">
			<a href="#">Pertanyaan Perusahaan</a>
		</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					<h4 class="card-title"></h4>
					<div class="form-group">
								<label for="exampleInputPassword1">Kategori</label>
								<select class="form-control input-sm" id="select_category" name="kategori">
									<option value="text" @if (Request::segment( 3 ) == "text")selected="selected" @endif >Pertanyaan Text</option>
									<option value="pilihan" @if (Request::segment( 3 ) == "pilihan")selected="selected" @endif>Pertanyaan Pilihan</option>
									<option value="checklist" @if (Request::segment( 3 ) == "checklist")selected="selected" @endif>Pertanyaan Checklist</option>
									<option value="pilihan dan text" @if (Request::segment( 3 ) == "pilihan dan text")selected="selected" @endif>Pertanyaan Pilihan dan Text</option>
								</select>
							</div>
					<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
						<i class="fa fa-plus"></i>
						Tambah Pertanyaan
					</button>
				</div>
			</div>
			<div class="card-body">
				<!-- Tambah Data Modal -->
				<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Data Pertanyaan</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form role="form" action="{{ route('pert_perusahaan.store') }}" method="POST">
									@csrf
									@method('POST')
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Kategori</b></h4></label>
												<select class="form-control input-sm"  id="kategori_pertanyaan" name="kategori">
													<option value="text" @if (Request::segment( 3 ) == "text")selected="selected" @endif >Pertanyaan Text</option>
													<option value="pilihan" @if (Request::segment( 3 ) == "pilihan")selected="selected" @endif>Pertanyaan Pilihan</option>
													<option value="checklist" @if (Request::segment( 3 ) == "checklist")selected="selected" @endif>Pertanyaan Checklist</option>
													<option value="pilihan dan text" @if (Request::segment( 3 ) == "pilihan dan text")selected="selected" @endif>Pertanyaan Pilihan dan Text</option>
												</select>
											</div>
										</div>
									</div>
									<!-- <div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Jenis Pertanyaan</b></h4></label>
												<select class="form-control input-sm"  id="kelas_pertanyaan" name="kelas_pertanyaan">
													<option value="wajib">Wajib</option>
													<option value="opsional">Opsional</option>
												</select>
											</div>
										</div>
									</div> -->
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Kode Pertanyaan</b></h4></label>
												<input id="addkodepertalumni" type="text" name="kd_pertanyaan" class="form-control" placeholder="kode pertanyaan (maks: 5 angka) ">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Pertanyaan</b></h4></label>
												<input id="addpertanyaan" type="text" name="pertanyaan" class="form-control" placeholder="Masukkan Pertanyaan ">
											</div>
										</div>
									</div>
									<div class="" id="container_cabang">
										@if(Request::segment( 3 ) != "text")
										<div class="row" id="cabang_option">
											<div class="col-sm-12">
												<div class="form-group form-group-default">
													<label><h4><b>Apakah Pertanyaan Bercabang?</b></h4></label>
													<select class="form-control input-sm"  id="is_cabang" name="is_cabang">
														<option value="tidak">Tidak</option>
														<option value="ya">Ya</option>
													</select>
												</div>
											</div>
										</div>
										@endif
										</div>


									<!-- Jika Cabang -->
									<div id="container_jikacabang">

									</div>
									<div id="container_pilihan_jawaban">
									@if(Request::segment( 3 ) != "text")
									<div id="pilihan_jawaban">
										<hr/>
									<label><h4><b>Pilihan Jawaban</b></h4></label>
									<div class="row control-group after-add-more">
										<div class="col-sm-9 ">
												<input id="addpilihan_jawaban" type="text" name="jawaban[]" class="form-control" placeholder="Masukkan Pilihan Jawaban ">
										</div>
										<div class="col-sm-3">
											<button class="btn btn-success add-more" type="button">
												<i class="fas fa-plus-square"></i> Add
											</button>
										</div>
									</div> 
									</div>
									@endif
								</div>
							</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
									<button type="submit" class="btn btn-primary">Simpan Data</button>
								</div>
							</form>
							<!-- Copy Hide -->
							<div class="copy invisible">
								<div class="row control-group">
									<div class="col-sm-9 ">
										<label for="largeInput"></label>
										<input id="addpilihan_jawaban" type="text" name="jawaban[]" class="form-control" placeholder="Masukkan Pilihan Jawaban ">
									</div>
									<div class="col-sm-3">
									<label for="largeInput"></label>
									<button class="btn btn-danger remove" type="button"><i class="fas fa-trash-alt"></i> Remove</button>
									</div>
								</div>
							</div>
							<!-- Copy Hide new-->
							<div class="copy-cabang invisible">
								<!-- <div class="" id="is_cabang_form"> -->
									<div class="control-group-cabang"> 
									<hr/>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Kode Pertanyaan Cabang</b></h4></label>
												<input id="addkodecabang" type="text" name="kd_cabang[]" class="form-control" placeholder="kode pertanyaan (maks: 5 angka) ">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Pertanyaan Cabang</b></h4></label>
												<input id="addpertanyaan" type="text" name="pertanyaan_cabang[]" class="form-control" placeholder="Masukkan Pertanyaan ">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
										<button class="btn btn-danger remove-cabang w-100" type="button"><i class="fas fa-trash-alt"></i> Remove</button>
										</div>
									</div>
									</div>
								<!-- </div> -->
							</div>
						</div>
					</div>
				</div>
<!-- Detail Modal -->
				<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Detail</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" id="modal_body_detail">
								Pilihan Jawaban
								<hr/>
								<table id="detailtable" class="display table table-striped table-hover" >
									<thead class="thead-light">
										<tr>
											<th width="10px">No</th>
											<th>Pilihan Jawaban</th>
										</tr>
									</thead>
									<tbody id="detail-table">
									</tbody>
								</table>
							</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Tabel Data -->
				<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover" >
						<thead class="thead-light">
							<tr>
								<th width="30px">No</th>
								<th>Kode Pertanyaan</th>
								<!-- <th>Jenis Pertanyaan</th> -->
								<th>Pertanyaan</th>
								<th width="150px">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach($pertanyaans as $pertanyaan)
							<tr>
								<td>{{$no++ }}</td>
								<td>{{ $pertanyaan->kd_pertanyaan }}</td>
								<!-- <td>{{ $pertanyaan->kelas_pertanyaan }}</td> -->
								<td>{{ $pertanyaan->pertanyaan }}</td>
								<td>
								@if(Request::segment( 3 ) != "text")
									<button data-toggle="modal" id="detail" data-id="{{ $pertanyaan->id }}" data-is_cabang="{{ $pertanyaan->is_cabang }}" data-target="#detailModal" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></button>
								@endif
									<button data-toggle="modal" data-target="#editModal-{{ $pertanyaan->id }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
									<button class="btn btn-sm btn-danger" type="button" id="{{ $pertanyaan->id }}" onclick="deletepertanyaan(this.id)"> <i class="fa fa-trash"></i>
									</button>
									<form id="delete-form-{{ $pertanyaan->id }}" action="{{ route('pert_perusahaan.destroy', $pertanyaan->id) }}" method="POST" style="display: none;">
										@csrf
										@method('DELETE')
									</form>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--  Edit Modal -->
	@foreach ($pertanyaans as $pertanyaan)
	<div class="modal fade" id="editModal-{{ $pertanyaan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" action="{{ route('pert_perusahaan.update', $pertanyaan->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<input name="kategori" type="hidden" value="{{$pertanyaan->jenis_pertanyaan}}">				
							<input name="is_cabang" type="hidden" value="{{$pertanyaan->is_cabang}}">				
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Kode pertanyaan</b></h4></label>
									<input id="addkodepertanyaan" type="text" name="kd_pertanyaan" class="form-control" value="{{ $pertanyaan->kd_pertanyaan }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Nama pertanyaan</b></h4></label>
									<input id="addpertanyaan" type="text" name="pertanyaan" class="form-control" value="{{ $pertanyaan->pertanyaan }}">
								</div>
							</div>
						</div>
						<div id="container_pilihan_jawaban">
							<div id="pilihan_jawaban">
									@if(Request::segment( 3 ) != "text")
									@php
									$no_jwb =1;
									$no_pert=1;
									$no_kd =1;
									$pilihan_jawabans = \App\Models\PilihanJawaban::where('id_pertanyaan','=',$pertanyaan->id)->select('*')->get();
									$pertanyaan_cabangs = \App\Models\PertanyaanCabang::where('id_pertanyaan','=',$pertanyaan->id)->select('*')->get();
									@endphp
									@if($pertanyaan->is_cabang == 'ya')
									<hr/>
									<label><h4><b>Pertanyaan  Cabang</b></h4></label>
									@foreach($pertanyaan_cabangs as $pertanyaan_cabang)
									<div class="row control-group">
										<div class="container">
											<label for="basic-url">Pertanyaan Cabang {{$no_kd++ }}</label>
											<input name="idcabang[]" type="hidden" value="{{$pertanyaan_cabang->id}}">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon3">Kode</span>
												</div>
												<input id="update_kdcabang" type="text" name="update_kdcabang[]" value="{{$pertanyaan_cabang->kd_cabang}}" class="form-control" >
											</div>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon3">Pertanyaan</span>
												</div>
												<input id="update_cabang" type="text" name="update_cabang[]" value="{{$pertanyaan_cabang->pertanyaan_cabang}}" class="form-control" >
											</div>
										</div>
									</div> 
									@endforeach
									@endif
									<hr/>
									<label><h4><b>Pilihan Jawaban</b></h4></label>
									@foreach($pilihan_jawabans as $pilihan_jawaban)
									<div class="row control-group">
										<div class="col-sm-12 ">
										<label>Pilihan {{$no_jwb++ }}</label>
										<input name="idpilihan[]" type="hidden" value="{{$pilihan_jawaban->id}}">
											<input id="addUpdate_jawaban" type="text" name="update_jawaban[]" value="{{$pilihan_jawaban->jawaban}}" class="form-control" >
										</div>
									</div> 
									@endforeach
									</div>
									@if($pertanyaan->is_cabang == 'ya')
									<hr/>
									<label><h4><b>Tambah Pertanyaan Cabang</b></h4></label>
									<div class="row control-group">
										<div class="container">
										<div class="after-add-more-cabang" id="is_cabang_form">
											<hr/>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group form-group-default">
														<label><h4><b>Kode Pertanyaan Cabang</b></h4></label>
														<input id="addkodecabang" type="text" name="kd_cabang[]" class="form-control" placeholder="kode pertanyaan (maks: 5 angka) ">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group form-group-default">
														<label><h4><b>Pertanyaan Cabang</b></h4></label>
														<input id="addpertanyaan" type="text" name="pertanyaan_cabang[]" class="form-control" placeholder="Masukkan Pertanyaan ">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12"><button class="btn btn-success add-more-cabang w-100" type="button">
													<i class="fas fa-plus-square"></i> Add</button>
												</div>
											</div>
										</div>
										</div>
									</div> 
									@endif
									<hr/>
									<label><h4><b>Tambah Jawaban</b></h4></label>
									<div class="row control-group after-add-more">
										<div class="col-sm-9 ">
												<input id="addpilihan_jawaban" type="text" name="jawaban[]" class="form-control" placeholder="Masukkan Pilihan Jawaban ">
										</div>
										<div class="col-sm-3">
											<button class="btn btn-success add-more" type="button">
												<i class="fas fa-plus-square"></i> Add
											</button>
										</div>
									</div> 
									@endif
								</div>
							</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
									<button type="submit" class="btn btn-primary">Update Data</button>
								</div>
							</form>
							<!-- Copy Hide -->
							<div class="copy invisible">
								<div class="row control-group">
									<div class="col-sm-9 ">
										<label for="largeInput"></label>
										<input id="addpilihan_jawaban" type="text" name="jawaban[]" class="form-control" placeholder="Masukkan Pilihan Jawaban ">
									</div>
									<div class="col-sm-3">
									<label for="largeInput"></label>
									<button class="btn btn-danger remove" type="button"><i class="fas fa-trash-alt"></i> Remove</button>
									</div>
								</div>
							</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	</div>
	</div>
	</div>
	@endsection
	@section('customjs')
	<script>
			$(document).ready(function() {
				$('#select_category').change(function() {
					var val = $(this).val(); 
					window.location = "/UG_Career/administrator/pert_perusahaan" +"/" +val;	
				});
			});

			$(document).on("change", "#is_cabang", function() { 
				var val = $(this).val(); 
				var kategori = $('#kategori_pertanyaan').val();
				// console.log(kategori);
				if(val == 'ya')	{
					var html='<div class="after-add-more-cabang" id="is_cabang_form"><hr/><div class="row"><div class="col-sm-12"><div class="form-group form-group-default"><label><h4><b>Kode Pertanyaan Cabang</b></h4></label><input id="addkodecabang" type="text" name="kd_cabang[]" class="form-control" placeholder="kode pertanyaan (maks: 5 angka) "></div></div></div><div class="row"><div class="col-sm-12"><div class="form-group form-group-default"><label><h4><b>Pertanyaan Cabang</b></h4></label><input id="addpertanyaan" type="text" name="pertanyaan_cabang[]" class="form-control" placeholder="Masukkan Pertanyaan "></div></div></div><div class="row"><div class="col-12"><button class="btn btn-success add-more-cabang w-100" type="button"><i class="fas fa-plus-square"></i> Add</button></div></div></div>';
					$("#container_jikacabang").html(html);
					if(kategori == 'pilihan dan text'){
					$("#container_jikacabang").append(html);
					}
				}else{
					$("#is_cabang_form").remove();
				}
			});

			$(document).ready(function() {
				$('#kategori_pertanyaan').change(function() {
					var val = $(this).val(); 
					if(val == "text"){
						$("#pilihan_jawaban").remove();
						$("#cabang_option").remove();
					}else{
						var html='<div id="pilihan_jawaban"><hr/><label><h4><b>Pilihan Jawaban</b></h4></label><div class="row control-group after-add-more"><div class="col-sm-9 "><input id="addpilihan_jawaban" type="text" name="jawaban[]" class="form-control" placeholder="Masukkan Pilihan Jawaban "></div><div class="col-sm-3"><button class="btn btn-success add-more" type="button"><i class="fas fa-plus-square"></i> Add</button></div></div>';
						$("#container_pilihan_jawaban").html(html);
						html='<div class="row" id="cabang_option"><div class="col-sm-12"><div class="form-group form-group-default"><label><h4><b>Apakah Pertanyaan Bercabang?</b></h4></label><select class="form-control input-sm"  id="is_cabang" name="is_cabang"><option value="tidak">Tidak</option><option value="ya">Ya</option></select></div></div></div>'
						$("#container_cabang").html(html);
					}
					if(val== "pilihan dan text"){
						$('#is_cabang').attr('disabled', true);
						$("#is_cabang").val('ya');
					}	
				});
			});
	
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});
			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});

	$(document).on("click", ".add-more", function() { 
          var html = $(".copy").html();
          $(".after-add-more").after(html);

      // saat tombol remove dklik control group akan dihapus 

      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });

	$(document).on("click", ".add-more-cabang", function() { 
          var html = $(".copy-cabang").html();
          $(".after-add-more-cabang").append(html);

      // saat tombol remove dklik control group akan dihapus 

      $("body").on("click",".remove-cabang",function(){ 
		$(this).parents(".control-group-cabang").remove();
      });
    });


		function deletepertanyaan(id) {
			Swal.fire({
				title: 'Yakin Ingin Hapus Data ini?',
				text: "Data Tidak Bisa Dikembalikan Setelah Dihapus!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Ya, Hapus!',
				cancelButtonText: 'Tidak',
				confirmButtonClass: 'btn btn-success',
				cancelButtonClass: 'btn btn-danger',
				buttonsStyling: false,
				reverseButtons: true
			}).then((result) => {
				if (result.value) {
					event.preventDefault();
					document.getElementById('delete-form-'+id).submit();
					Swal.fire(
						'Deleted!',
						'Your file has been deleted.',
						'success')
				} else (
					result.dismiss === swal.DismissReason.cancel
					) 
			});
		} 
	
		$(document).on('click', '#detail', function() {
			var id = $(this).data('id');
			var is_cabang = $(this).data('is_cabang');
				var url = '/UG_Career/administrator/pert_perusahaan/detail'+"/"+id+"/"+is_cabang;
				if (is_cabang == "ya") {
					var html = '<div id="container_pertanyaancabang">Pertanyaan Cabang <hr/> <table id="detailtable" class="display table table-striped table-hover" ><thead class="thead-light"><tr><th width="10px">No</th><th>Kode Cabang</th><th>Nama Cabang Pertanyaan</th></tr></thead><tbody id="detailpertanyaancabang-table"></tbody></table></div>';
					$('#modal_body_detail').prepend(html);
				}else{
					$('#container_pertanyaancabang').remove();
				}
			$.ajax({
				url: url,
				method: "GET",
				dataType: 'json',
				success: function(datas) {
					// pilihan_jawaban = Object.entries(datas);
					// console.log(datas);
					if(is_cabang == "ya"){
						datas = Object.entries(datas);
						pertanyaan_cabang = datas[1][1];
						pilihan_jawaban = datas[0][1];
						var htmlkom = '';
						for (i = 0; i < pilihan_jawaban.length; i++) {
							htmlkom += '<tr><td>'+ (i+1) +'</td><td>'+ pilihan_jawaban[i].jawaban+'</td></tr>';
						}
						$('#detail-table').html(htmlkom);
						htmlkom='';
						for (i = 0; i < pertanyaan_cabang.length; i++) {
							htmlkom += '<tr><td>'+ (i+1) +'</td><td>'+ pertanyaan_cabang[i].kd_cabang +'</td><td>'+ pertanyaan_cabang[i].pertanyaan_cabang  +'</td></tr>';
							// htmlkom += '<tr><td>'+ (i+1) +'</td><td>'+ datas.pertanyaan_cabang[i].pertanyaan_cabang +'</td></tr>';
						}
						$('#detailpertanyaancabang-table').html(htmlkom);
					}else{
						var htmlkom = '';
						$('#detailpertanyaancabang-table').html(htmlkom);
						for (i = 0; i < datas.length; i++) {
							htmlkom += '<tr><td>'+ (i+1) +'</td><td>'+ datas[i].jawaban +'</td></tr>';
						}
						$('#detail-table').html(htmlkom);
					}

				}
			});
		});
		
	</script>

	@endsection