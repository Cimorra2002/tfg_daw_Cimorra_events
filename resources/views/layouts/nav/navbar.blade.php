<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid me-4 ms-4">
        <a class="navbar-brand d-flex align-items-center me-4" href="{{ url('/home') }}">
            <img src="{{ url('/images/logo_tfg_b.png') }}" alt="Logo" width="80" height="40" class="me-2">
            Cimorra Events
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#') }}">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#') }}">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#') }}">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('#') }}">Sobre nosotros</a>
                </li>
            </ul>
            <div class="dropdown ms-5">
                <a class="nav-link dropdown-toggle" href="{{ url('#') }}" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Hola, {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>