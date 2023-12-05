@extends('layouts.guest')

@section('title', 'Sign up')

@section('content')

<body>
    <div class="contact__wrapper shadow-lg mt-n9">
        <div class="row no-gutters">
            <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                <h3 class="color--white mb-5">
                    <img src="Imagenes/iconoLogo.png" alt="PETIX" class="iconoLogo" />
                </h3>
                <h2>Registro de nuevo usuario</h2>
                <ul class="contact-info__list list-style--none position-relative z-index-101">
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-envelope"></i></span>
                        ¿Tienes dudas? 
                        <br>No dudes en contactarnos. 
                        <br>Correo -> petix@atencion.com.mx
                        <br>Teléfono: +52 (449) 910 50
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-phone"></i></span> Teléfono: +52 (449) 910 50
                        02
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span>
                        Tecnológico Nacional de México.
                        <br> Instito Tecnológico de Aguascalientes
                        <br> Av. Adolfo López Mateos #1801 Ote.
                        <br> Fracc. Bona Gens, C.P. 20256
                    </li>
                </ul>
            </div>

            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                <form action="{{ route('registrarUsuario')}}" method="POST" class="contact-form form-validate"
                    novalidate="novalidate">
                        @csrf
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Wendy">
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos"
                                    placeholder="Appleseed">
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="genero">Género</label>
                                <input type="text" class="form-control" id="genero" name="genero"
                                    placeholder="Appleseed">
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="numeroTelefono">Número de teléfono</label>
                                <input type="text" class="form-control" id="numeroTelefono" name="numeroTelefono"
                                    placeholder="wendy.apple@seed.com">
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="correo">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo"
                                    placeholder="wendy.apple@seed.com">
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="contrasena">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena"
                                    placeholder="wendy.apple@seed.com">
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- End Contact Form Wrapper -->

        </div>
    </div>
</body>
@endsection