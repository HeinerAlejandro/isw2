<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Scripts 
    <script src="{{ asset('public/js/app.js') }}" defer></script>-->
    
    <!-- Scripts jquery -->
    <script src="{{ asset('public/js/jquery.js') }}" defer></script> 

    <!-- Scripts Materialize -->
    <script src="{{ asset('public/js/materialize.js') }}" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('public/js/scripts.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
    <!-- Styles 
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">-->
    
    <!-- Styles -->
    <link href="{{ asset('public/css/estilos.css') }}" rel="stylesheet">
    
    <!-- Styles Materialize -->
    <link href="{{ asset('public/css/materialize.css') }}" rel="stylesheet">

</head>
<body>
    @yield('menu_content')

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s12">
         @yield('main_content')
      </div>
    </div>
</body>
</html>
