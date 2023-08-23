<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Aplicación de Destinos</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <a href="/">
                <img src="{{ asset('images/Logo.svg') }}" alt="Logo">
            </a>
            <a href="{{ route('home') }}"><img src="{{ asset('images/Home-icon.svg') }}" alt="Home"></a>
            <a href="{{ route('register') }}"><img src="{{ asset('images/Avatar-icon.svg') }}" alt="Registro"></a>
            @if(Request::is('home')) <!-- Verifica si la página es la de inicio -->
            <form action="{{ route('search') }}" method="GET" class="search-form">
                <input type="text" name="search" class="search-input" placeholder="Buscar por nombre o ubicación">
                <button type="submit" class="search-button">
                    <img src="{{ asset('images/Glass-icon.svg') }}" alt="Buscar">
                </button>
            </form>
            @endif
            @guest <!-- Verifica si el usuario no está autenticado -->
            @endguest
            @if(Auth::check()) <!-- Verifica si el usuario está autenticado -->
            <ul class="desktop-icons">
                <li><a href="{{ route('crear-destino') }}"><img src="{{ asset('images/Create-icon.svg') }}" alt="Crear"></a></li>
                <li><a href="javascript:history.back()"><img src="{{ asset('images/Logout-icon.svg') }}" alt="Volver"></a></li>
            </ul>
            @endif
        </nav>
    </header>
    <main>
        @yield('content') <!-- Esta sección se llenará con el contenido específico de cada vista -->
    </main>
    <footer>
        <!-- Pie de página común (enlaces, créditos, etc.) -->
        <nav>
            <ul>
                <li><a href="/"><img src="{{ asset('images/Home-icon.svg') }}" alt="Home"></a></li>
                <!-- Agregar iconos y enlaces según tus requisitos -->
                @guest <!-- Verifica si el usuario no está autenticado -->
                <!-- Agregar icono y enlace para la página de registro de usuario -->
                <li><a href="{{ url()->previous() }}"><img src="{{ asset('images/Logout-icon.svg') }}" alt="Atrás"></a></li>
                <li><a href="{{ route('register') }}"><img src="{{ asset('images/Avatar-icon.svg') }}" alt="Registro"></a></li>
                @endguest
                @auth <!-- Verifica si el usuario está autenticado -->
                <li><a href="{{ route('crear-destino') }}"><img src="{{ asset('images/Create-icon.svg') }}" alt="Crear"></a></li>
                @endauth
            </ul>
        </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>









