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

    <style>
        div a.btn-panel{
            height: 120px;
            min-width: 140px;
        }
    </style>

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

<script src="{{ url('/') }}/js/plugins/jquery.min.js"></script>
<script src="{{ url('/') }}/js/plugins/bootstrap.min.js"></script>
<script src="{{ url('/') }}/js/plugins/adminlte.min.js"></script>

</html>
