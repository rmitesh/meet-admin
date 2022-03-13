@extends('layouts.admin.auth-app', array('bodyClass' => 'login-page'))

@section('title')
	{{ $title }}
@endsection

@section('content')
	<div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('welcome') }}" class="h1">{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

              	<p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

	        	<form method="POST" action="{{ route('admin.password.email') }}">
                    @csrf
                    
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      	<div class="col-12">
                        	<button type="submit" class="btn btn-primary btn-block">Email Password Reset Link</button>
                      	</div>  
                  	</div>

                </form>
            </div>
        </div>
    </div>
@endsection