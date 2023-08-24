<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar Eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este destino?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Eliminar</button>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const deleteButtons = document.querySelectorAll(".delete-destination");

            deleteButtons.forEach(button => {
                button.addEventListener("click", function (event) {
                    event.preventDefault();
                    const destinationId = this.getAttribute("data-destination-id");
                    const confirmDeleteBtn = document.getElementById("confirmDeleteBtn");

                    // Setear el data-destination-id del botón de confirmación en el modal
                    confirmDeleteBtn.setAttribute("data-destination-id", destinationId);

                    // Mostrar el modal de confirmación
                    const modal = new bootstrap.Modal(document.getElementById("confirmDeleteModal"));
                    modal.show();
                });
            });

            const confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
            confirmDeleteBtn.addEventListener("click", function () {
                const destinationId = this.getAttribute("data-destination-id");
                // Redirigir a la ruta de eliminación en el controlador
                window.location.href = "{{ route('destinations.destroy', '__destination_id__') }}".replace('__destination_id__', destinationId);
            });
        });
    </script>
@endsection
</body>
</html>