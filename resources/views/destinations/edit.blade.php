<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>

@extends('layouts.nav')

@section('content')
    <div class="container">
        <h4 class="text-danger">Editar Destino</h4>
        <hr class="border border-danger border-1 opacity-50 wx-1">
        <form method="POST" action="{{ route('destinations.update', $travel->id) }}" enctype="multipart/form-data" class="form-container">
            @csrf
            @method('PATCH')
            <div>
                    <div class="mb-3">
                        <label for="title" class="form-label text-primary ">Título</label>
                        <input type="text" id="title" name="title" value="{{ $travel->title }}" class="form-control rounded-pill title-shadow" placeholder="Escribe el nombre del lugar" required>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label text-primary">Ubicación</label>
                        <input type="text" id="location" name="location" value="{{ $travel->location }}" class="form-control rounded-pill location-shadow" placeholder="Escribe la ubicación" required>
                    </div>
                    <div class="mb-3">
                        <label  for="image" class="form-label text-primary">Imagen</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text bg-primary rounded-start-modif" for="image">
                                <img src="{{ asset('images/File-icon.svg') }}" alt="File Icon">
                            </label>
                            <label class="custom-file-upload form-control text-primary rounded-end-modif">
                                <input type="file" id="image" name="image" accept="image/*" class="form-control" required style="display: none;">
                                    Sube una imagen
                            </label>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn rounded-pill" id="btn-accept">Aceptar</button>
                        <a href="{{ route('destinations.show', $travel->id) }}" class="btn rounded-pill" id="btn-cancel">Cancelar</a>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="content me-3" class="form-label text-primary">¿Por qué quieres viajar allí?</label>
                    <textarea name="content" class="form-control rounded-box content-shadow ms-4" rows="10" placeholder="Escribe tus razones aquí" required>{{$travel->content}}</textarea>
                </div>
            </div>
        </form>
    </div>
@endsection
 
</body>
</html>