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
		  					<h3 class="card-title">Create Permission</h3>
			  			</div>
			  			<div class="card-body">
			  				<div class="row">
			  					<div class="col-md-8">
									<!-- Session Status -->
									<x-auth-session-status class="mb-4" :status="session('status')" />

									<!-- Validation Errors -->
									<x-auth-validation-errors class="mb-4" :errors="$errors" />

									<form action="{{ route('admin.permission.store') }}" method="post" autocomplete="off">
										@csrf
										
										<div class="form-group">
									    	<label for="name">Name <span class="text-danger">*</span></label>
									    	<input type="text" name="name" class="form-control name" value="{{ old('name') }}" id="name" placeholder="Permission Name" autofocus />
									  	</div>

										<div class="form-group">
									    	<label for="created_by">Created By </label>
									    	<input type="text" class="form-control created_by" value="{{ auth()->user()->fullName }}" id="created_by" placeholder="Created By" readonly />
									  	</div>
										<div class="form-group">
											<input type="submit" class="btn btn-outline-primary" value="Save" />
											<input type="submit" class="btn btn-outline-primary" name="save_and_new" value="Save and New" />
											<a href="{{ route('admin.permission.index') }}" class="btn btn-default">Back</a>
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
