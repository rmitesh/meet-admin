@extends('layouts.admin.app')

@section('title')
	{{ $title }}
@endsection

@section('header-style')
	<link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')

	<x-admin.breadcrumb :breadcrumbs="$breadcrumbs" />

	<section class="content">
		<div class="container-fluid">
			<div class="row">
			  	<div class="col-12">
			  		<div class="card">
			  			<div class="card-header">
				  			<x-auth-session-status class="alert-success" :status="session('status')" />
				  			<x-auth-validation-errors class="alert-danger" :errors="$errors" />
			  				<div class="d-flex justify-content-between align-items-center">
			  					<div>
				  					<h3 class="card-title">Permissions List</h3>
				  				</div>
				  				<div>
				  					<a href="{{ route('admin.permission.create') }}" class="btn btn-outline-primary">Add New</a>
				  				</div>
			  				</div>
			  			</div>
			  			<div class="card-body">
			  				<table id="permissions-table" class="table table-bordered table-hover permissions-table">
			  					<thead>
			  						<tr>
			  							<th>#</th>
			  							<th>Name</th>
			  							<th>Created At</th>
			  							<th>Actions</th>
			  						</tr>
			  					</thead>
			  				</table>
			  			</div>
			  		</div>
			  	</div>
		  	</div>
		</div>
	</section>

@endsection

@section('footer-script')
	<script type="text/javascript">
		const PERMISSION_URL = '{{ route('admin.permission.index') }}';
	</script>
	<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/admin/custom/permission.min.js') }}"></script>
@endsection