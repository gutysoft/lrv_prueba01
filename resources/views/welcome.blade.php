<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Auntenticacion de Usuario</title>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/notie.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

@if (Route::has('login'))

@auth
    
    <body class="hold-transition layout-top-nav">
        <div class="wrapper">

            
            @include('modulos.header')
            
            @yield('content')

            @include('modulos.footer')

        </div>

    </body>


    
@else

    @include('paginas.login')

@endauth

@endif

</html>
