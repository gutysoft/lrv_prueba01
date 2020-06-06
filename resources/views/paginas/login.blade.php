<script src="{{ url('/') }}/js/plugins/notie.js"></script>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Inicio de Sesión</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <form action="{{ route('login')}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">

                        <input id="email" name="email" type="email" class="form-control email_login @error('email') is-invalid @enderror" pattern="^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$" title="Ingrese su correo electrónico" placeholder="Ingrese su correo electrónico" required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>

                        @error('email')
						<span class="invalid-feedback" role="alert">
							{{ $message }}
						</span>
						@enderror
                    </div>

                    <div class="input-group mb-3">

                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="email"  autocomplete="current-password" placeholder="Ingrese su contraseña" required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                        @error('password')
						<span class="invalid-feedback" role="alert">
							{{ $message }}
						</span>
                        @enderror
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

    @if (Session::has("error"))

	<script>
		notie.alert({
			type: 3,
			text: '¡Ya hay un usuario autenticado!',
			time: 7
		})
	</script>

	@endif

	@if (Session::has("success"))

	<script>
		notie.alert({
			type: 1,
			text: '¡Has cerrado sesión correctamente!',
			time: 7
		})
	</script>

	@endif



</body>