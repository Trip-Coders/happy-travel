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
            <ul>
            <a href="/"> 
                <img src="{{ asset('images/Logo.svg') }}" alt="Logo">
            </a>
            <a href="{{ route('home') }}"><img src="{{ asset('images/Home-icon.svg') }}" alt="Home"></a>
    
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Esta sección se llenará con el contenido específico de cada vista -->
    </main>

    <footer>
        <!-- Pie de página común (enlaces, créditos, etc.) -->
       
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
