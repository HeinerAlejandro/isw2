<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta author="Software 2 Team" content="Software2Team" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/img/favicon.ico') }}" type="image/x-icon" />

    <!-- CSS: Google Icon Font, Materialize, Style -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="{{ asset('public/css/materialize.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/style.css?v=19042019') }}" />
</head>

<body>

    @yield('menu_content')
    @yield('main_content')

    <!-- Scripts: JQuery, Materialize & Scripts -->
    <script src="{{ asset('public/js/jquery-1.8.3.min.js') }}" defer></script>
    <script src="{{ asset('public/js/materialize.min.js') }}" defer></script>
    <script src="{{ asset('public/js/scripts.js') }}" defer></script>
</body>

</html>
