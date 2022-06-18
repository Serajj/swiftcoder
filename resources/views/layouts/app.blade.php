<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('assets/admin/fonts/stylesheet.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"
          type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendor/sweetalert2/dist/sweetalert2.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap-select.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/admin/css/jquery-confirm.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/admin/css/dashboard.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/admin/css/custom.css')}}" type="text/css">
    @stack('styles')

</head>

<body>

@include('includes.navbar')
<div class="main-content" id="panel">
    @include('includes.header')
    @include('includes.page-header')
    <div class="container-fluid mt--6">
        @yield('content')
    </div>
    <script src="{{asset('assets/admin/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>

    <script src="{{asset('assets/admin/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery-confirm.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dashboard.js')}}"></script>
    @stack('scripts')
</body>
</html>
