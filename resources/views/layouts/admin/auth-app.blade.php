<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ !isset($title)?'':$title }} {{ config('app.name') }}</title>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
        
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">

        @section('admin-header-css')
        @show
    </head>
    <body class="hold-transition {{ !isset($bodyClass)?:$bodyClass }}">

        @yield('content')
        
        <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        @section('admin-footer-js')
        @show
    </body>
</html>