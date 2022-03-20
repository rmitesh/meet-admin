@extends('layouts.admin.app')

@section('title')
	{{ $title }}
@endsection

@section('content')
	
	<x-admin.breadcrumb :breadcrumbs="$breadcrumbs" />

	<section class="content">
		<div class="container-fluid">
			<div class="row">
			  	<div class="col-12">
			  		<div class="card">
			  			<div class="card-header">
		  					<h3 class="card-title">Create User</h3>
			  			</div>
			  			<div class="card-body">
							<x-auth-session-status class="alert-success" :status="session('status')" />
							<x-auth-validation-errors class="alert-danger" :errors="$errors" />
							
								<form action="{{ route('admin.user.store') }}" method="post" autocomplete="off">
									@csrf
					  				<div class="row">

										<div class="col-md-6">
											<div class="form-group">
										    	<label for="first_name">First Name <span class="text-danger">*</span></label>
										    	<input type="text" name="first_name" class="form-control first_name" value="{{ old('first_name') }}" id="first_name" placeholder="First Name" autofocus required />
										  	</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
										    	<label for="last_name">Last Name <span class="text-danger">*</span></label>
										    	<input type="text" name="last_name" class="form-control last_name" value="{{ old('last_name') }}" id="last_name" placeholder="Last Name" required />
										  	</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
										    	<label for="email">Email <span class="text-danger">*</span></label>
										    	<input type="email" name="email" class="form-control email" value="{{ old('email') }}" id="email" placeholder="Email" required />
										  	</div>
										</div>

									  	<div class="col-md-6">
									  		<div class="form-group">
										    	<label for="created_by">Created By </label>
										    	<input type="text" class="form-control created_by" value="{{ auth()->user()->fullName }}" id="created_by" placeholder="Created By" readonly />
										  	</div>
									  	</div>

										<div class="col-md-6">
											<div class="form-group">
										    	<label for="role">Role <span class="text-danger">*</span></label>
										    	<select class="custom-select" name="role" id="role">
									    			<option value="">-- Select Role --</option>
										    		@if (!empty($roles))
										    			@foreach ($roles as $role)
											    			<option value="{{ $role->id }}">{{ $role->name }}</option>
											    		@endforeach
										    		@endif
										    	</select>
										  	</div>
									  	</div>

									  	<div class="col-md-12">
											<div class="form-group">
												<input type="submit" class="btn btn-outline-primary" value="Save" />
												<input type="submit" class="btn btn-outline-primary" name="save_and_new" value="Save and New" />
												<a href="{{ route('admin.role.index') }}" class="btn btn-default">Back</a>
										  	</div>
									  	</div>
								  	</div>
								</form>
			  				</div>

		  				</div>
		  			</div>
		  		</div>
		  	</div>
	  	</div>
	</section>

@endsection

@section('footer-script')
	<script src="{{ asset('assets/admin/custom/user.min.js') }}"></script>
@endsection
