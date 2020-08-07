<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/admin/now-ui-dashboard.css?v=1.3.0') }}" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
{{--    <link href="{{ asset('/demo/demo.css') }}" rel="stylesheet"/>--}}
    @yield('css')

</head>

<body class="{{ $class ?? '' }}">

<div class="wrapper">
    @guest
        @yield('login')
    @endguest
    @auth
        @include('layouts.admin.auth')
    @endauth
</div>
<!--   Core JS Files   -->
<script src="{{ asset('js/admin/core/jquery.min.js') }}"></script>
<script src="{{ asset('js/admin/core/popper.min.js') }}"></script>
<script src="{{ asset('js/admin/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('js/admin/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
{{--<script src="{{ asset('js/admin/now-ui-dashboard.min.js?v=1.3.0') }}" type="text/javascript"></script>--}}
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->

@stack('js')
</body>

</html>
