@extends('layouts.masterbackend')
@section('title', 'Hasil Survey Alumni')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Hasil Survey Alumni</h4>
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
			<a href="#">Hasil Survey Alumni</a>
		</li>
	</ul>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<!-- <div class=""> -->
					<h4 class="card-title"></h4>
					<div class="row g-3 text-right">
					@if(isset(Auth::user()->level))
         			@if(Auth::user()->level == "admin")
						<button class="btn btn-success btn-round ml-4" data-toggle="modal" data-target="#addImport">
							<i class="fas fa-download"></i>
							Impor Data
						</button>
					@endif
					@endif
						<button class="btn btn-warning btn-round ml-2 " data-toggle="modal" data-target="#eksporModal">
							<i class="fas fa-upload"></i>
								Ekspor Data
						</button>
						</div>
				<!-- </div> -->
			</div>

			<div class="card-body">
				<!-- Tabel Data -->
				<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover" >
						<thead class="thead-light">
							<tr>
								<th width="30px">No</th>
								<th>Tanggal</th>
								<th>Nama Responden</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							<tr>
								@foreach($jawaban_respondens as $jawaban_responden)
								<td>{{$no++ }}</td>
								<td>{{ tanggal_indonesia($jawaban_responden->created_at) }}</td>
								<td>{{ $jawaban_responden->user->name }}</td>
								<td>
								<button type="button" id="detail" class="btn btn-sm btn-primary detail" data-id="{{ $jawaban_responden->id }}" data-toggle="modal" data-target="#detailModal" data-tooltip="tooltip" data-placement="bottom" title="Detail"><i class="fa fa-eye"></i></button>
								@if(isset(Auth::user()->level))
         						@if(Auth::user()->level == "admin")
									<!-- <button data-toggle="modal" data-target="#editModal-{{ $jawaban_responden->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button> -->
									<button class="btn btn-sm btn-danger" type="button" id="{{ $jawaban_responden->id }}" onclick="deletejawaban_responden(this.id)"> <i class="fa fa-trash"></i>
									</button>
									<form id="delete-form-{{ $jawaban_responden->id }}" action="{{ route('delete_responden.alumni', $jawaban_responden->id) }}" method="POST" style="display: none;">
										@csrf
										@method('DELETE')
									</form>
								@endif
								@endif
								</td>
								</tr>
								@endforeach
							</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<!-- Modal Eksport -->
		<div class="modal fade" id="eksporModal" tabindex="-1" role="dialog" aria-labelledby="eksporModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="eksporModalLabel"><b> Export Data </b></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="GET" action="{{ route('hasil_alumni.export') }}" target="_blank">
						<div class="form-group">
							<label for="exampleInputEmail1">Pilih Tanggal</label>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
								</div>
								<input type="text" class="form-control" id="reservation" name="date_range" required>
							</div>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success" name="print">Eksport Data</button>
				</div>
				</form>
			</div>
		</div>
	</div>
<!-- Modal Detail -->
	<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Detail Jawaban Responden Alumni</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="modal_body_detail">
				Data Alumni
					<hr/>
					<table id="detailtable" class="display table table-striped table-hover" >
							<tbody id="">
								<tr>
									<td>Nama Lengkap</td>
									<td id="nama-dd">: </td>
								</tr>
								<tr>
									<td>NPM</td>
									<td id="npm-dd">: </td>
								</tr>
								<tr>
									<td>Prodi</td>
									<td id="prodi-dd">: </td>
								</tr>
								<tr>
									<td>Tahun Masuk</td>
									<td id="thn_masuk-dd">: </td>
								</tr>
								<tr>
									<td>Tahun Lulus</td>
									<td id="thn_lulus-dd">: </td>
								</tr>
							</tbody>
					</table>
					<hr />
					Detail Jawaban
					<hr/>
					<table id="detailtable" class="display table table-striped table-hover" >
						<thead class="thead-light">
							<tr>
								<th width="10px">Kode Pertanyaan</th>
								<th>Jawaban</th>
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

	<!-- Modal  Impor -->
	<div class="modal fade" id="addImport" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content ">
                <div class="modal-header">
                  <h5 class="modal-title mb-0" id="addModalLabel">Upload Produk File Excel</h5>
                </div>
              <div class="modal-body">
                 <!-- Card body -->
                <form role="form" action="{{ route('hasil_alumni.import') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                    <!-- Input groups with icon -->
                  <div class="col-md-12 text-center">
                    <h5 class="h2 card-title mb-2">Langkah-Langkah Upload File</h5>
                    <div class="col-12 img-import-area">
                      <img src="" class="img-fluid" width="600px">
                    </div>
                    	<div class="d-flex py-2 border-bottom">
	                        <p class="font-weight-semibold text-gray mb-0">1. Siapkan data dengan format Excel (.xls atau .xlsx), atur seperti file berikut: <a href="Dummy UG Career.xlsx" download>Download File</a></p>
	                    </div>
	                    <div class="d-flex py-2 border-bottom">
	                        <p class="font-weight-semibold text-gray mb-0">2. Pastikan data yang diimport sesuai dengan format yang diberikan</p>
	                    </div>
                     	<div class="d-flex py-2 border-bottom">
	                        <p class="font-weight-semibold text-gray mb-0">3. Jika sudah sesuai pilih file</p>
	                    </div>
	                    <div class="d-flex py-2 mb-4">
	                        <p class="font-weight-semibold text-gray mb-0">4. Klik simpan, maka data otomatis tersimpan</p>
	                    </div>
                  </div>
                    <div class="form-group row ">
                      <label for="hasil_alumni" class="col-md-2 col-form-label form-control-label text-center">Upload file<span class="text-danger">*</span></label>
                      <div class="col-md-9">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="file" lang="en" name="file" required="required">
                          <label class="custom-file-label" for="customFileLang">Pilih File</label>
                        </div>
                      </div>
                  </div>       
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit Data</button>
            </div>
            </form>
         </div>
       </div>
    </div>
	@endsection

	@section('customjs')
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
$(function() {
  // $('input[name="daterange"]').daterangepicker({
  //   opens: 'left'
  // }, function(start, end, label) {
  //   console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  // });
	$('#reservation').daterangepicker({
		locale: {
			format: 'DD-MM-YYYY',
			separator: ' s/d '
		}
	});
});
</script>
	<script >
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

		function deletejawaban_responden(id) {
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
			var url = '/UG_Career/administrator/hasil_alumni/detail'+"/"+id;
			$.ajax({
				url: url,
				method: "GET",
				dataType: 'json',
				success: function(datas) {
					var data = datas[0];
					$('#nama-dd').text(': ' + data['name']);
					$('#prodi-dd').text(': ' + data['nama_prodi']);
					$('#npm-dd').text(': ' + data['npm']);
					$('#thn_masuk-dd').text(': ' + data['tahun_masuk']);
					$('#thn_lulus-dd').text(': ' + data['tahun_lulus']);
					$('#nik-dd').text(': ' + data['nik']);
					$('#npwp-dd').text(': ' + data['npwp']);
					$('#no_telp-dd').text(': ' + data['no_telp']);
					$('#email-dd').text(': ' + data['email']);
						var htmlkom = '';
						for (i = 0; i < datas.length; i++) {
							htmlkom += '<tr><td>'+ datas[i].kd_jawaban +'</td><td>'+ datas[i].jawaban +'</td></tr>';
						}
						$('#detail-table').html(htmlkom);

				}
			});
		});
		
	</script>
	

	@endsection