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
            @if(Auth::check()) <!-- Verifica si el usuario está autenticado -->
            <ul class="desktop-icons">
                <li><a href="{{ route('destinations.create') }}"><img src="{{ asset('images/Create-icon.svg') }}" alt="Crear"></a></li>
                <li><a href="javascript:history.back()"><img src="{{ asset('images/Logout-icon.svg') }}" alt="Volver"></a></li>
            </ul>
            @endif
        <nav class="border-info">
            <ul class="nav-list">
                <li class="logo"><a href="/"><img src="{{ asset('images/Logo.svg') }}" alt="Logo"></a></li>
                <li><a href="{{ route('home') }}"><img src="{{ asset('images/Home-icon.svg') }}" alt="Home"></a></li>
                @guest
                <li><a href="{{ route('register') }}"><img src="{{ asset('images/Avatar-icon.svg') }}" alt="Registro"></a></li>
                @endguest
            </ul>
        </nav>
    </header>
    <main>
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmar Eliminación</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro de que deseas eliminar este destino?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        @yield('content') 
    </main>
    <footer>
        <!-- Pie de página común (enlaces, créditos, etc.) -->
    </footer>
        @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const deleteButtons = document.querySelectorAll(".delete-destination");
        const deleteForm = document.getElementById("deleteForm");

        deleteButtons.forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                const destinationId = this.getAttribute("data-destination-id");
                
                // Llenar el formulario con la URL correcta de eliminación
                deleteForm.action = "{{ route('destinations.destroy', '__destination_id__') }}".replace('__destination_id__', destinationId);

                // Mostrar el modal de confirmación
                const modal = new bootstrap.Modal(document.getElementById("confirmDeleteModal"));
                modal.show();
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

