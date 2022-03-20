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
		  					<h3 class="card-title">Edit Role</h3>
			  			</div>
			  			<div class="card-body">
							<x-auth-session-status class="alert-success" :status="session('status')" />
							<x-auth-validation-errors class="alert-danger" :errors="$errors" />
							
			  				<div class="row">
			  					<div class="col-md-8">

									<form action="{{ route('admin.role.update', $role->id) }}" method="post" autocomplete="off">
										@csrf
										@method('PUT')
										<div class="form-group">
									    	<label for="name">Name <span class="text-danger">*</span></label>
									    	<input type="text" name="name" class="form-control name" value="{{ old('name', $role->name) }}" id="name" placeholder="Role Name" autofocus />
									  	</div>

									  	<div class="form-group">
									    	<label for="name">Permissions <span class="text-danger">*</span></label>
									    	<div class="row">
									    		@if ( !empty($permissions) )
									    			<div class="col-12">
		    									    	<div class="custom-control custom-checkbox">
		    			    	                          	<input class="custom-control-input" type="checkbox" id="permission-all" value="permission-all" {{ $permissions->count() == count($role_permissions) ? 'checked' :'' }} />
		    			    	                          	<label for="permission-all" class="custom-control-label">Assign All</label>
		    			    	                        </div>
		    							    		</div>
									    			@foreach ( $permissions as $permission )
										    			<div class="col-3">
													    	<div class="custom-control custom-checkbox">
							    	                          	<input class="custom-control-input permissions" type="checkbox" name="permissions[]" id="permission-{{ $permission->id }}" value="{{ $permission->id }}" {{ in_array($permission->id, $role_permissions) ? 'checked':'' }} />
							    	                          	<label for="permission-{{ $permission->id }}" class="custom-control-label">{{ $permission->name }}</label>
							    	                        </div>
											    		</div>
										    		@endforeach
									    		@endif
									    	</div>
									  	</div>

										<div class="form-group">
									    	<label for="created_by">Created By </label>
									    	<input type="text" class="form-control created_by" value="{{ auth()->user()->fullName }}" id="created_by" placeholder="Created By" readonly />
									  	</div>

										<div class="form-group">
											<input type="submit" class="btn btn-outline-primary" value="Update" />
											<a href="{{ route('admin.role.index') }}" class="btn btn-default">Back</a>
									  	</div>
									</form>
			  					</div>
			  				</div>

		  				</div>
		  			</div>
		  		</div>
		  	</div>
	  	</div>
	</section>

@endsection

@section('footer-script')
	<script src="{{ asset('assets/admin/custom/role.min.js') }}"></script>
@endsection
