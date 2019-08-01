<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kosdor - korsdor online ordering system">
    <meta name="keywords" content="kosdor, online, buy, product, money, sell">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kosdor') }}</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lnr-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>
<body class="preload home3">
    <div id="app">
        @yield('content')
    </div>


<script src="{{ asset('js/vendor/jquery/jquery-1.12.3.js') }}"></script>
<script src="{{ asset('js/vendor/jquery/popper.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery/uikit.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/chart.bundle.min.js') }}"></script>
<script src="{{ asset('js/vendor/grid.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.easing1.3.js') }}"></script>
<script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('js/vendor/tether.min.js') }}"></script>
<script src="{{ asset('js/vendor/trumbowyg.min.js') }}"></script>
<script src="{{ asset('js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
