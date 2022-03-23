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
				  			<x-auth-session-status class="alert-success" :status="session('status')" />
				  			<x-auth-validation-errors class="alert-danger" :errors="$errors" />
		  					
		  					<h3 class="card-title">System Settings</h3>
				  		</div>
				  		<div class="card-body">
				  			<div class="row">
				  			    <div class="col-5 col-sm-3">
				  			        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
				  			            <a class="nav-link" id="vert-tabs-company-info-tab" data-toggle="pill" href="#vert-tabs-company-info" role="tab" aria-controls="vert-tabs-company-info" aria-selected="false">Company Information</a>
				  			            <a class="nav-link" id="vert-tabs-date-time-tab" data-toggle="pill" href="#vert-tabs-date-time" role="tab" aria-controls="vert-tabs-date-time" aria-selected="false">Date & Time</a>
				  			            <a class="nav-link" id="vert-tabs-social-links-tab" data-toggle="pill" href="#vert-tabs-social-links" role="tab" aria-controls="vert-tabs-social-links" aria-selected="false">Social Links</a>
				  			            <a class="nav-link" id="vert-tabs-email-tab" data-toggle="pill" href="#vert-tabs-email" role="tab" aria-controls="vert-tabs-email" aria-selected="false">Email Configuration and Templates</a>
				  			            <a class="nav-link active" id="vert-tabs-general-tab" data-toggle="pill" href="#tabs-general" role="tab" aria-controls="tabs-general" aria-selected="true">General</a>
				  			        </div>
				  			    </div>
				  			    <div class="col-7 col-sm-9">
				  			        <div class="tab-content" id="vert-tabs-tabContent">
				  			            <div class="tab-pane fade" id="vert-tabs-company-info" role="tabpanel" aria-labelledby="vert-tabs-company-info-tab">
				  			                <x-admin.setting.company-info />
				  			            </div>
				  			            <div class="tab-pane fade" id="vert-tabs-date-time" role="tabpanel" aria-labelledby="vert-tabs-date-time-tab">
				  			            	<x-admin.setting.date-time />
				  			            </div>
				  			            <div class="tab-pane fade" id="vert-tabs-social-links" role="tabpanel" aria-labelledby="vert-tabs-social-links-tab">
				  			            	<x-admin.setting.social-links />
				  			            </div>
				  			            <div class="tab-pane fade" id="vert-tabs-email" role="tabpanel" aria-labelledby="vert-tabs-email-tab">
				  			            	<x-admin.setting.email />
				  			            </div>
				  			            <div class="tab-pane text-left fade show active" id="tabs-general" role="tabpanel" aria-labelledby="vert-tabs-general-tab">
				  			                <x-admin.setting.general />
				  			            </div>
				  			        </div>
				  			    </div>
				  			</div>

				  		</div>
			  		</div>
			  	</div>
		  	</div>
		</div>
	</section>
@endsection