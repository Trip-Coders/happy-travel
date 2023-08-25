@extends('layouts.nav')
@section('content')
    <div class="container">
        <h1>Crear Destino</h1>
        <form method="POST" action="{{ route('destinations.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Imagen:</label>
                <input type="file" name="image" accept="image/*" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Título:</label>
                <input type="text" name="title" class="form-control" placeholder="Escribe el nombre del lugar" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Ubicación:</label>
                <input type="text" name="location" class="form-control" placeholder="Escribe la ubicación" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">¿Por qué quieres viajar allí?:</label>
                <textarea name="content" class="form-control" rows="4" placeholder="Escribe tus razones aquí" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </form>
    </div>
@endsection







