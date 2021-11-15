@extends('layouts.masterbackend')
@section('title', 'Data Perusahaan')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Data Perusahaan</h4>
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
			<a href="#">Data Perusahaan</a>
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
						Tambah Data Perusahaan
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
								<form role="form" action="{{ route('perusahaan.store') }}" method="POST">
									@csrf
									@method('POST')
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Nama Instansi</b></h4></label>
												<input id="addperusahaan" type="text" name="name" class="form-control" placeholder="nama perusahaan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Email Perusahaan</b></h4></label>
												<input id="addnotelpperusahaan" type="email" name="email" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')" placeholder="email perusahaan">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Nomor Telepon</b></h4></label>
												<input id="addnotelpperusahaan" type="number" name="no_telp" class="form-control" placeholder="no telepon perusahaan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>URL Web</b></h4></label>
												<input id="addurlwebperusahaan" type="text" name="url_web" class="form-control" placeholder="http://contoh.com" pattern="https?://.+" required oninvalid="this.setCustomValidity('masukkan url sesuai dengan format')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Alamat Perusahaan</b></h4></label>
												<input id="addnotelpperusahaan" type="text" name="alamat" class="form-control" placeholder="alamat perusahaan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Nama Contact Person</b></h4></label>
												<input id="addnamacpperusahaan" type="text" name="nama_cp" class="form-control" placeholder="nama contact person perusahaan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Jabatan</b></h4></label>
												<input id="addjabatanperusahaan" type="text" name="jabatan" class="form-control" placeholder="jabatan" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Email Contact Person</b></h4></label>
												<input id="addemailcpperusahaan" type="email" name="email_cp" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')" placeholder="email contact person perusahaan">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group form-group-default">
												<label><h4><b>Username</b></h4></label>
												<input id="addusernameperusahaan" type="text" name="username" class="form-control" placeholder="username pengguna" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
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
								<th>Nama Instansi </th>
								<th>No. Telp</th>
								<th>URL Web</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach($perusahaans as $perusahaan)
							<tr>
								<td>{{$no++ }}</td>
								<td>{{ $perusahaan->user->name }}</td>
								<td>{{ $perusahaan->no_telp }}</td>
								<td>{{ $perusahaan->url_web }}</td>
								<td>{{ $perusahaan->user->email }}</td>
								<td>{{ $perusahaan->alamat }}</td>
								<td>
								<button type="button" id="detail" class="btn btn-sm btn-primary detail" data-toggle="modal"  data-id="{{ $perusahaan->id }}" data-target="#detailModal" data-tooltip="tooltip" data-placement="bottom" title="Detail"><i class="fa fa-eye"></i></button>
									<!-- <button data-toggle="modal" data-target="#editModal-{{ $perusahaan->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button> -->
									@if(isset(Auth::user()->level))
         							@if(Auth::user()->level == "admin")
									<button data-toggle="modal" data-target="#editModal-{{ $perusahaan->id }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
									<button class="btn btn-sm btn-danger" type="button" id="{{ $perusahaan->id }}" onclick="deleteperusahaan(this.id)"> <i class="fa fa-trash"></i>
									</button>
									<form id="delete-form-{{ $perusahaan->id }}" action="{{ route('perusahaan.destroy', $perusahaan->id_user) }}" method="POST" style="display: none;">
										@csrf
										@method('DELETE')
									</form>
									@endif
									@endif
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
					Detail Data Perusahaan
					<hr/>
					<table id="detailtable" class="display table table-striped table-hover" >
							<tbody id="detail-table">
								<tr>
									<td>Nama Instansi</td>
									<td id="nama-dd">: </td>
								</tr>
								<tr>
									<td>Email Perusahaan</td>
									<td id="email-dd">: </td>
								</tr>
								<tr>
									<td>Nomor Telepon</td>
									<td id="no_telp-dd">: </td>
								</tr>
								<tr>
									<td>URL Web</td>
									<td id="url_web-dd">: </td>
								</tr>
								<tr>
									<td>Alamat Perusahaan</td>
									<td id="alamat-dd">: </td>
								</tr>
								<tr>
									<td>Nama Contact Person</td>
									<td id="nama_cp-dd">: </td>
								</tr>
								<tr>
									<td>Jabatan</td>
									<td id="jabatan-dd">: </td>
								</tr>
								<tr>
									<td>Email Contact Person</td>
									<td id="email_cp-dd">: </td>
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
	@foreach ($perusahaans as $perusahaan)
	<div class="modal fade" id="editModal-{{ $perusahaan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" action="{{ route('perusahaan.update', $perusahaan->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Nama Instansi</b></h4></label>
									<input id="addperusahaan" type="text" name="name" class="form-control" value="{{ $perusahaan->user->name }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Email Perusahaan</b></h4></label>
									<input id="addnotelpperusahaan" type="emial" name="email" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')"value="{{ $perusahaan->user->email }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Nomor Telepon</b></h4></label>
									<input id="addnotelpperusahaan" type="number" name="no_telp" class="form-control" value="{{ $perusahaan->no_telp }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>URL Web</b></h4></label>
									<input id="addurlwebperusahaan" type="text" name="url_web" class="form-control" value="{{ $perusahaan->url_web }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Alamat Perusahaan</b></h4></label>
									<input id="addnotelpperusahaan" type="text" name="alamat" class="form-control" value="{{ $perusahaan->alamat }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Nama Contact Person</b></h4></label>
									<input id="addnamacpperusahaan" type="text" name="nama_cp" class="form-control" value="{{ $perusahaan->nama_cp }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Jabatan</b></h4></label>
									<input id="addjabatanperusahaan" type="text" name="jabatan" class="form-control" value="{{ $perusahaan->jabatan }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Email Contact Person</b></h4></label>
									<input id="addemailcpperusahaan" type="email" name="email_cp" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" oninvalid="this.setCustomValidity('data tidak sesuai')" oninput="setCustomValidity('')" value="{{ $perusahaan->email_cp }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Username</b></h4></label>
									<input id="addusernameperusahaan" type="text" name="username" class="form-control" value="{{ $perusahaan->user->username }}" disabled>
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

		function deleteperusahaan(id) {
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
			var url = '/UG_Career/administrator/perusahaan'+"/"+id;
			$.ajax({
				url: url,
				method: "GET",
				dataType: 'json',
				success: function(datas) {
					var data = datas[0];
					$('#nama-dd').text(': ' + data['name']);
					$('#email-dd').text(': ' + data['email']);
					$('#no_telp-dd').text(': ' + data['no_telp']);
					$('#url_web-dd').text(': ' + data['url_web']);
					$('#alamat-dd').text(': ' + data['alamat']);
					$('#nama_cp-dd').text(': ' + data['nama_cp']);
					$('#jabatan-dd').text(': ' + data['jabatan']);
					$('#email_cp-dd').text(': ' + data['email_cp']);
					$('#username-dd').text(': ' + data['username']);
				}
			});
		});
	</script>

	@endsection