@extends('layouts.app')

@section('title', 'Home')

@section('content')

<body>
    <h1>
        <img src="Imagenes/LogoBienvenida.png" alt="LogoBienvenida" class="LogoBienvenida">
    </h1>
    <div class="container">
        <div class="buttons-container">

            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="Imagenes/inicio/perroygato.jpeg" class="d-block w-100 imagen-carrusel"
                            alt="Perro-gato">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Bienvenido a nuestra tienda online</h2>
                            <p class="parrafo"> Aquí encontrarás todo lo que
                                necesitas para
                                cuidar y mimar a tus amigos peludos. Tenemos
                                una amplia variedad de alimentos, juguetes,
                                accesorios, higiene y salud para que tu
                                mascota esté feliz y saludable. Además,
                                ofrecemos un servicio de atención al
                                cliente personalizado. No esperes más y
                                descubre todo lo que tenemos para ti y tu
                                mascota en nuestra tienda online.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="Imagenes/inicio/perro.jpeg" class="d-block w-100 imagen-carrusel" alt="Perro">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Perros</h2>
                            <p class="parrafo">Navega con la variedad de
                                productos que
                                ofrecemos para tu mascota canina</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Imagenes/inicio/gato.jpeg" class="d-block w-100 imagen-carrusel" alt="Gato">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Gatos</h2>
                            <p class="parrafo">Navega con la variedad de
                                productos que
                                ofrecemos para tu mascota felina.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="card-group">
            <div class="card">
                <img src="Imagenes/inicio/special-offer.jpeg" class="card-img-top" alt="special-offer">
                <div class="card-body">
                    <h5 class="card-title">Ofertas</h5>
                    <p class="card-text">Tu economía es muy importante para
                        nosotros, por lo que te invitamos a que navegues por
                        nuestro catálogo de ofertas y ahorres en tus
                        próximas compras.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/inicio/atencionalcliente.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Atención al cliente</h5>
                    <p class="card-text">Para nosotros es fundamental
                        ofrecer un servicio de calidad, personalizado y
                        eficiente, que resuelva las dudas, problemas y
                        necesidades de nuestros clientes. No dudes en
                        preguntarnos tus inquietudes o dudas.</p>
                </div>
            </div>
            <div class="card">
                <img src="Imagenes/inicio/aboutus.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sobre nosotros</h5>
                    <p class="card-text">Somos una empresa online que ofrece
                        productos de calidad para el cuidado y bienestar de
                        tus mascotas. Nuestro objetivo es brindarte una
                        experiencia de compra fácil, rápida y segura, con
                        envíos a todo el país y precios competitivos.</p>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection