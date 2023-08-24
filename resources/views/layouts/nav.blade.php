<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Aplicación de Destinos</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Changa+One&family=Jaldi&family=Poppins:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
            <a href="/">
                <img src="{{ asset('images/Logo.svg') }}" alt="Logo">
            </a>
            <form action="{{ route('search.busqueda') }}" method="GET">
            <input type="text" name="query" value="{{ request('query') }}">
            <button type="submit">Search</button>
            </form>
            <a href="{{ route('home') }}"><img src="{{ asset('images/Home-icon.svg') }}" alt="Home"></a>
            <a href="{{ route('register') }}"><img src="{{ asset('images/Avatar-icon.svg') }}" alt="Registro"></a>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content') <!-- Esta sección se llenará con el contenido específico de cada vista -->
    </main>
    <footer>
        <!-- Pie de página común (enlaces, créditos, etc.) -->
    </footer>
        @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
