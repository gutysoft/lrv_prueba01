<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Auntenticacion de Usuario</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/bootstrap.min.css">

    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/adminlte.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Inicio de Sesión</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Ingresa tus crendenciales</p>

                <form action="" method="">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">

                        </div>
                        
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">
                                Ingresar
                                <i class="fas fa-sign-in-alt pl-2"></i>
                            </button>
                        </div>
                        
                    </div>
                </form>

            </div>

        </div>
    </div>

    <script src="{{ url('/') }}/js/plugins/jquery.min.js"></script>
    <script src="{{ url('/') }}/js/plugins/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/js/plugins/adminlte.min.js"></script>

</body>

</html>