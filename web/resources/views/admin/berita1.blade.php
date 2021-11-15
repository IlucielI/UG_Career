@extends('layouts.masterbackend')
@section('title', 'Berita')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Berita</h4>
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
			<a href="#">Berita</a>
		</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
        <div class="card-header">
				<div class="d-flex align-items-center">
					<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
						<i class="fa fa-plus"></i>
						Tambah Berita
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover" >
						<thead class="thead-light">
							<tr>
                                <th width="30px">No</th>
								<th>Jenis Berita</th>
								<th>Judul Berita</th>
								<th>Tanggal Posting</th>
								<th>Foto</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach($beritas as $berita)
							<tr>
								<td>{{$no++ }}</td>
								<td>{{ $berita->jenis_berita }}</td>
								<td>{{ $berita->judul_berita }}</td>
								<td>{{ tanggal_indonesia($berita->created_at) }}</td>
								<td>
                                    <img src="{{ asset('img/'. $berita->foto )}}" height="50" width="50" alt="" srcset="">
                                </td>
								<td>
                                    <button type="button" id="detail" class="btn btn-sm btn-primary detail"data-target="#detailModal" data-tooltip="tooltip" data-toggle="modal" data-jenis="{{ $berita->jenis_berita }}" data-judul="{{ $berita->judul_berita }}" data-isi="{{ $berita->isi_berita }}" data-foto="{{ $berita->foto }}" data-placement="bottom" title="Detail"><i class="fa fa-eye"></i></button>
                                    <button data-toggle="modal" data-target="#editModal-{{ $berita->id }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger" type="button" id="{{ $berita->id }}" onclick="deleteberita(this.id)"> <i class="fa fa-trash"></i>
                                    </button>
                                    <form id="delete-form-{{ $berita->id }}" action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display: none;">
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

	<!-- Tambah Edit Modal -->
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
					<form role="form" action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('POST')
                        <div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Jenis Berita</b></h4></label>
										<select class="form-control" name="jenis_berita" required="required">
											<option disabled selected>-- Jenis Berita --</option>
											<option value="pengumuman">Pengumuman</option>
											<option value="lowongan kerja">Lowongan Kerja</option>
											<option value="internship">Internship</option>
										</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Judul Berita</b></h4></label>
									<input id="addberita" type="text" name="judul_berita" class="form-control" placeholder="Judul Berita">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
									<label><h4><b>Isi Berita</b></h4></label>
									<textarea id="default">Hello, World!</textarea>
									<!-- <input id="addberita" type="text" name="isi_berita" class="form-control" placeholder="Isi berita"> -->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Foto</b></h4></label>
									<input type="file" class="form-control-file" id="addberita" name="foto">
								</div>
							</div>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
						<button type="submit" class="btn btn-primary">Tambah Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    <!-- Tambah Edit Modal -->
	@foreach ($beritas as $berita)
	<div class="modal fade" id="editModal-{{ $berita->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" action="{{ route('berita.update', $berita->id) }}" method="POST">
						@csrf
						@method('PUT')
                        <div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Jenis Berita</b></h4></label>
										<select class="form-control" name="jenis_berita" required="required">
											<option disabled selected>-- Jenis Berita --</option>
                                            <option value="pengumuman" {{ $berita->jenis_berita === 'pengumuman' ? 'selected' : '' }} >Pengumuman</option>
                                            <option value="lowongan kerja" {{ $berita->jenis_berita === 'lowongan kerja' ? 'selected' : '' }} >lowongan kerja</option>
                                            <option value="internship" {{ $berita->jenis_berita === 'internship' ? 'selected' : '' }} >internship</option>
										</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Judul Berita</b></h4></label>
									<input id="addberita" type="text" name="judul_berita" class="form-control" value="{{ $berita->judul_berita }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
									<label><h4><b>Isi Berita</b></h4></label>
									<input id="addberita" type="text" name="isi_berita" class="form-control" value="{{ $berita->isi_berita }}">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Foto</b></h4></label>
                                    <img src="{{ asset('img/'. $berita->foto )}}" height="50" width="50" alt="" srcset="">
									<input type="file" class="form-control-file" id="addberita" name="foto">
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
		tinymce.init({ selector:'textarea#default', menubar:'', theme: 'modern'});      

		function deleteberita(id) {
			Swal.fire({
				title: 'Yakin Ingin Hapus Data ini?',
				text: "Data Tidak Bisa Dikembalikan Setelah Dihapus!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#pengumuman3',
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

		
	</script>

	@endsection