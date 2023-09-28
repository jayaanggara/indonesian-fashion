<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="icon" href="{{ asset('/assets') }}/images/logo-oval.png">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/foundation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
</head>
<body>
    <div id="app">
        @if (!in_array(request()->segment(1),['login','register']))
            @include('layouts.nav')
        @endif
        <main class="py-4">
            @yield('content')
        </main>
        @if (!in_array(request()->segment(1),['login','register']))
            @include('layouts.footer')
        @endif
    </div>
    <script src="{{ asset('assets/jquery-3.7.0/jquery-3.7.0.min.js') }} "></script>
    <script src="{{ asset('assets/bootstrap-5.3.1/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('assets/aos/aos.js') }} "></script>
    <script src="{{ asset('assets/scripts/script.js') }} "></script>
</body>
</html>
