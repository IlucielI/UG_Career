@extends('layouts.masterbackend')
@section('title', 'Data Alumni')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Data Alumni</h4>
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
			<a href="#">Data Referensi</a>
		</li>
		<li class="separator">
			<i class="flaticon-right-arrow"></i>
		</li>
		<li class="nav-item">
			<a href="#">Data alumni</a>
		</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					<h4 class="card-title"></h4>
					@if(isset(Auth::user()->level))
         			@if(Auth::user()->level == "admin")
					<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
						<i class="fa fa-plus"></i>
						Tambah Data alumni
					</button>
					@endif
					@endif
				</div>
			</div>
			<div class="card-body">

				<!-- Tambah Data Modal -->
				<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form role="form" action="{{ route('dataalumni.store') }}" method="POST">
									@csrf
									@method('POST')
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>NPM Alumni</b></h4></label>
												<input id="addalumni" type="number" name="npm" class="form-control" placeholder="NPM alumni" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Tahun Masuk</b></h4></label>
												<input id="addnotelpalumni" type="number" name="tahun_masuk" class="form-control datepicker" placeholder="Tahun masuk alumni" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Tahun Lulus</b></h4></label>
												<input id="addnotelpalumni" type="number" name="tahun_lulus" class="form-control datepicker" placeholder="Tahun lulus alumni" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label style="color : #999;"><h3><b>Program Studi/Jurusan</b></h3></label>
												<select class="form-control" name="id_prodi" required="required" style="">
												<option disabled selected>-- Daftar Prodi --</option>
												@foreach ($prodis as $prodi)
												<option value="{{ $prodi->id }}">{{ $prodi->jenjang }} - {{ $prodi->nama_prodi }}</option>
												@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Nama lengkap alumni</b></h4></label>
												<input id="addnotelpalumni" type="text" name="name" class="form-control" placeholder="Nama lengkap alumni" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Nomor Telepon/HP</b></h4></label>
												<input id="addnamacpalumni" type="text" name="no_telp" class="form-control" placeholder="No. telp/HP alumni" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Email</b></h4></label>
												<input id="addjabatanalumni" type="email" name="email" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')" placeholder="Email alumni">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>NIK</b></h4></label>
												<input id="addemailcpalumni" type="number" name="nik" class="form-control" placeholder="NIK alumni" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>NPWP</b><span><small style="color:red"><b>  *tidak wajib</b></small></span></h4></label>
												<input id="addemailcpalumni" type="number" name="npwp" class="form-control" placeholder="NPWP alumni">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Username</b></h4></label>
												<input id="addusernamealumni" type="text" name="username" class="form-control" placeholder="Username pengguna" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Password</b></h4></label>
												<div class="input-group input-group-merge" id="show_hide_password">   
													<input class="form-control" type="password" placeholder="******" id="password" placeholder="password (min 8 kombinasi karakter angka)" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
													<div class="input-group-append">
														<span class="input-group-text"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
									<button type="submit" class="btn btn-primary">Simpan Data</button>
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
								<th>Nama Lengkap </th>
								<th>NPM </th>
								<th>Email</th>
								<th>Prodi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach($alumnis as $alumni)
							<tr>
								<td>{{$no++ }}</td>
								<td>{{ $alumni->user->name }}</td>
								<td>{{ $alumni->npm }}</td>
								<td>{{ $alumni->user->email }}</td>
								<td>{{ $alumni->prodi->nama_prodi }}</td>
								<td>
								    <button type="button" id="detail" class="btn btn-sm btn-primary detail" data-toggle="modal"  data-id="{{ $alumni->id }}" data-target="#detailModal" data-tooltip="tooltip" data-placement="bottom" title="Detail"><i class="fa fa-eye"></i></button>
									@if(isset(Auth::user()->level))
									@if(Auth::user()->level == "admin")
									<button data-toggle="modal" data-target="#editModal-{{ $alumni->id }}" class="btn btn-sm btn-warning" data-tooltip="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></button>
									<button class="btn btn-sm btn-danger" type="button" id="{{ $alumni->id }}" onclick="deletealumni(this.id)" data-tooltip="tooltip" data-placement="bottom" title="Delete"> <i class="fa fa-trash"></i>
									</button>
									<form id="delete-form-{{ $alumni->id }}" action="{{ route('dataalumni.destroy', $alumni->id_user) }}" method="POST" style="display: none;">
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
	
<!-- Modal Detail -->
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
					Data Alumni
					<hr/>
					<table id="detailtable" class="display table table-striped table-hover" >
							<tbody id="detail-table">
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
								<tr>
									<td>NIK</td>
									<td id="nik-dd">: </td>
								</tr>
								<tr>
									<td>NPWP</td>
									<td id="npwp-dd">: </td>
								</tr>
								<tr>
									<td>Email</td>
									<td id="email-dd">: </td>
								</tr>
								<tr>
									<td>No Telepon/HP</td>
									<td id="no_telp-dd">: </td>
								</tr>
								<tr>
									<td>Username</td>
									<td id="username-dd">: </td>
								</tr>
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

	<!-- Tambah Edit Modal -->
	@foreach ($alumnis as $alumni)
	<div class="modal fade" id="editModal-{{ $alumni->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" action="{{ route('dataalumni.update', $alumni->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>NPM Alumni</b></h4></label>
									<input id="addalumni" type="number" name="npm" class="form-control" value="{{ $alumni->npm }}" disabled>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Tahun Masuk</b></h4></label>
									<input id="addnotelpalumni" type="number" name="tahun_masuk" class="form-control datepicker" value="{{ $alumni->tahun_masuk }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Tahun Lulus</b></h4></label>
									<input id="addnotelpalumni" type="number" name="tahun_lulus" class="form-control datepicker" value="{{ $alumni->tahun_lulus }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label style="color : #999;"><h3><b>Program Studi/Jurusan</b></h3></label>
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
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Nama alumni</b></h4></label>
									<input id="addnotelpalumni" type="text" name="name" class="form-control" value="{{ $alumni->user->name }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Nomor Telepon/HP</b></h4></label>
									<input id="addnamacpalumni" type="number" name="no_telp" class="form-control" value="{{ $alumni->no_telp }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Email</b></h4></label>
									<input id="addjabatanalumni" type="email" name="email" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')" value="{{ $alumni->user->email }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>NIK</b></h4></label>
									<input id="addemailcpalumni" type="email" name="nik" class="form-control" value="{{ $alumni->nik}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>NPWP</b></h4></label>
									<input id="addemailcpalumni" type="text" name="npwp" class="form-control" value="{{ $alumni->npwp }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Username</b></h4></label>
									<input id="addusernamealumni" type="text" name="username" class="form-control" value="{{ $alumni->user->username }}" disabled>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Ubah Password</b></h4></label>
									<div class="input-group input-group-merge" id="show_hide_password">   
										<input class="form-control" type="password" placeholder="******" id="password" name="password">
										<div class="input-group-append">
											<span class="input-group-text"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
						<button type="submit" class="btn btn-primary">Ubah Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@endforeach

	@endsection
	@section('customjs')
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

		function deletealumni(id) {
			swal({
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
					swal(
						'Deleted!',
						'Your file has been deleted.',
						'success')
				} else (
					result.dismiss === swal.DismissReason.cancel
					) 
			})
		} 

		$(document).ready(function() {
			$("#show_hide_password a").on('click', function(event) {
				event.preventDefault();
				if($('#show_hide_password input').attr("type") == "text"){
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass( "fa-eye-slash" );
					$('#show_hide_password i').removeClass( "fa-eye" );
				}else if($('#show_hide_password input').attr("type") == "password"){
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass( "fa-eye-slash" );
					$('#show_hide_password i').addClass( "fa-eye" );
				}
			});
		});

		$(document).on('click', '#detail', function() {
			var id = $(this).data('id');
			var url = '/UG_Career/administrator/dataalumni'+"/"+id;
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
					$('#username-dd').text(': ' + data['username']);
				}
			});
		});

	</script>

	@endsection