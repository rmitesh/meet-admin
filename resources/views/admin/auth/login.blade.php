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
                <x-auth-session-status class="mb-3" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-3 alert alert-danger" :errors="$errors" />

                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
                    
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember" />
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>

                <p class="mb-1">
                    <a href="{{ route('admin.password.request') }}">Forgot your password?</a>
                </p>
            </div>
        </div>
    </div>
@endsection