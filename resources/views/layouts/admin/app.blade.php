<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ !isset($title)?:$title }}{{ config('app.name') }}</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/sweetalert/sweetalert2.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

        @section('header-style')
        @show
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Preloader -->
            {{-- <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{ asset('assets/admin/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60" />
            </div> --}}
            
            <x-admin.nav />

            <x-admin.sidebar />

            <div class="content-wrapper">
                @yield('content')
            </div>
            
            <footer class="main-footer">
                <strong>Copyright &copy; {{ date('Y') }} <a href="https://github.com/rmitesh" target="_black">Mitesh Rathod</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> {{ config('app.version') }}
                </div>
            </footer>
        </div>

        <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        
        <script src="{{ asset('assets/admin/js/adminlte.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/sweetalert/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('assets/admin/custom/common.min.js') }}"></script>
        
        @section('footer-script')
        @show
    </body>
</html>