@extends('layouts.masterbackend')
@section('title', 'Data Provinsi')
@section('content',)               
<div class="page-header">
	<h4 class="page-title">Data Provinsi</h4>
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
			<a href="#">Data Provinsi</a>
		</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover" >
						<thead class="thead-light">
							<tr>
								<th width="30px">No</th>
								<th align="center">Nama Provinsi</th>
								<th align="center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach($provinsis as $provinsi)
							<tr>
								<td>{{$no++ }}</td>
								<td>{{ $provinsi->nama_provinsi }}</td>
								<td>
									<button data-toggle="modal" data-target="#editModal-{{ $provinsi->id }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
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
	@foreach ($provinsis as $provinsi)
	<div class="modal fade" id="editModal-{{ $provinsi->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form role="form" action="{{ route('provinsi.update', $provinsi->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label><h4><b>Nama provinsi</b></h4></label>
									<input id="addprovinsi" type="text" name="nama_provinsi" class="form-control" value="{{ $provinsi->nama_provinsi }}">
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

		function deleteprovinsi(id) {
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
		
	</script>

	@endsection