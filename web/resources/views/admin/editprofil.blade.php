@extends('layouts.masterbackend')
@section('title', 'Edit Profil')
@section('content',)               
                <div class="page-header">
						<h4 class="page-title">Edit Profil</h4>
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
								<a href="#">Edit Profil</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
									</div>
								</div>
								@foreach ($users as $user)
								<div class="card-body">
									<form role="form" action="{{ route('editprofil.update', $user->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
											<div class="col-md-6">
												<div class="form-group">
													<label for="largeInput">Nama</label>
													<input type="text" class="form-control form-control" name = "name" id="name" value="{{ $user->name }}">
												</div>
												<div class="form-group">
													<label for="disableinput">Username</label>
													<input type="text" class="form-control" id="disableinput" name = "username" value="{{ $user->username }}" disabled>
												</div>
												<div class="form-group">
													<label for="largeInput">Email</label>
													<input type="text" class="form-control form-control" name = "email" id="defaultInput" value="{{ $user->email }}">
												</div>
												<div class="form-group">
													<label for="largeInput">Password</label>
													<input type="text" class="form-control form-control" name = "password" id="defaultInput" placeholder="************">
												</div>
												<button type="submit" class="btn btn-warning" style="margin-left: 600px;">Ubah Data</button>
											</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</form>
			</div>
		</div>
	</div>
</div>
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