@extends('layouts.guest')

@section('title', 'Sign in')

@section('content')

<body>
    <div class="demo-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="text-center pb-5"> <img src="Imagenes/iconoLogo.png" alt="icono logo" class="iconoLogo">
                    </div>
                    <div class="p-5 formBackgroundColor rounded shadow-lg">
                        <h2 class="mb-2 text-center">Iniciar sesión</h2>
                        <p class="text-center lead">Inicia sesión para comenzar a comprar en Petix.
                        </p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf <!-- agrega el token csrf -->
                            <label class="font-500">Correo</label>
                            <input name="correo" class="form-control form-control-lg mb-3" type="email" required>
                            <label class="font-500">Contraseña</label>
                            <input name="contrasena" class="form-control form-control-lg" type="password" required>
                            <p class="m-0 py-4"><a href="{{ route('atencion') }}" class="text-muted">Forget password?</a></p>
                            <button class="btn btn-primary btn-lg w-100 shadow-lg">SIGN IN</button>
                        </form>
                        <div class="text-center pt-4">
                            <p class="m-0">Do not have an account? <a href="{{ route('signup') }}" class="text-dark font-weight-bold">Sign
                                    Up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection