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

        .fondo{
            background: #E6E6E6;
        }

    </style>

</head>

<body class="hold-transition layout-top-nav fondo">

    <div class="content">
        
        <section class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pagina no encontrada</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                            
                            
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="content">

            <div class="error-page">

                <h2 class="headline text-warning"> 404</h2>

                <div class="error-content">

                    <div class="container">

                        <div class="col-lg-12 col-md-12 col-sm-12 p-3">

                            <h3 class="text-center">
                                <i class="fas fa-exclamation-triangle text-warning"></i> 
                                Oops! Esta pagina no existe.
                            </h3>
        
                            <p class="">
                                No pudimos encontrar la página que estabas buscando.
                                Mientras tanto, puedes regrese a la 
                                <a href="{{url('/')}}" class="headline">página principal.</a> 
                            </p>

                        </div>

                    </div>

                    
                </div>
                
            </div>
            
        </section>


        
    </div>



    <script src="{{ url('/') }}/js/plugins/jquery.min.js"></script>
    <script src="{{ url('/') }}/js/plugins/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/js/plugins/adminlte.min.js"></script>

</body>

</html>