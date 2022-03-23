@extends('layouts.admin.app')

@section('title')
	{{ $title }}
@endsection

@section('content')
	<x-admin.breadcrumb :breadcrumbs="$breadcrumbs" />

	@superadmin
		<section class="content">
		    <div class="container-fluid">
		        <div class="row">

		            <div class="col-lg-12 col-12">
		                <div class="info-box shadow-lg">
                          	<span class="info-box-icon">
                          		<x-application-logo class="w-75 h-75" />
                          	</span>

                          	<div class="info-box-content">
	                            <span class="info-box-text">Laravel Version</span>
                            	<span class="info-box-number">{{ Illuminate\Foundation\Application::VERSION }}</span>
                          	</div>
                        </div>
		            </div>

		            <div class="col-12 row">
		            	<div class="col-lg-3 col-6">
			                <div class="info-box shadow-lg">
	                          	<span class="info-box-icon bg-light">
	                          		<i class="fas fa-user-lock"></i>
	                          	</span>

	                          	<div class="info-box-content">
		                            <span class="info-box-text">Roles</span>
	                            	<span class="info-box-number">{{ $roles_count }}</span>
	                          	</div>
	                        </div>
			            </div>

			            <div class="col-lg-3 col-6">
			                <div class="info-box shadow-lg">
	                          	<span class="info-box-icon bg-info">
	                          		<i class="fas fa-users"></i>
	                          	</span>

	                          	<div class="info-box-content">
		                            <span class="info-box-text">Users</span>
	                            	<span class="info-box-number">{{ $users_count }}</span>
	                          	</div>
	                        </div>
			            </div>

			            <div class="col-lg-3 col-6">
			                <div class="info-box shadow-lg">
	                          	<span class="info-box-icon bg-info">
	                          		<i class="fas fa-file-signature"></i>
	                          	</span>

	                          	<div class="info-box-content">
		                            <span class="info-box-text">Activity Logs</span>
	                            	<span class="info-box-number text-success">Active</span>
	                          	</div>
	                        </div>
			            </div>
		            </div>

		        </div>
		    </div>
		</section>
	@endsuperadmin

@endsection