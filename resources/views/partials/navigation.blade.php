<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('inicio')}}">
            <img src="Imagenes/nombreLogo.png" alt="Logo de la Tienda" class="navLogo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio')}}">
                        <i class="bi bi-house-door-fill"></i>
                        Inicio
                    </a>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="material-symbols-outlined icons">pets</span>
                        Mascotas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li class="dropdown-item">
                            <a href="{{ route('mascotaPerro')}}">Perros</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('mascotaGato')}}">Gatos</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="material-symbols-outlined icons">percent</span>
                        Ofertas
                    </a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="material-symbols-outlined icons">support_agent</span>
                        Atención al cliente
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="material-symbols-outlined icons">groups</span>
                        Sobre nosotros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="material-symbols-outlined icons">shopping_cart</span>
                        Carrito
                    </a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signup')}}">
                        Registrarse
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signin')}}">
                        Iniciar sesión
                    </a>
                </li>
                @endguest
                @auth
                <!-- ... Otros elementos autenticados ... -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>