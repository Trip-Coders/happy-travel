<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    </head>
    <body>

    @extends('layouts.nav')
    @section('content')
        <div class="container">
            <h1>Crear Destino</h1>
            
            <form method="POST" action="{{ route('destinations.create') }}" enctype="multipart/form-data" class="form-container">
                @csrf
                <div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Título:</label>
                        
                        <input type="text" name="title" class="form-control rounded-pill title-shadow" placeholder="Escribe el nombre del lugar" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="location" class="form-label">Ubicación:</label>
                        
                        <input type="text" name="location" class="form-control rounded-pill location-shadow" placeholder="Escribe la ubicación" required>
                    </div>
    
                    <div class="mb-3">
                        <label  for="image" class="form-label">Imagen:</label>
                    
                        <div class="input-group mb-3">
                            <label class="input-group-text bg-primary rounded-start-modif" for="image">
                                <img src="{{ asset('images/File-icon.svg') }}" alt="File Icon">
                            </label>
                            
                            <label class="custom-file-upload form-control rounded-end-modif">
                                <input type="file" id="image"
                                name="image"
                                    accept="image/*" class="form-control" required style="display: none;">
                                    Sube una imagen
                            </label>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn rounded-pill" id="btn-accept">Aceptar</button>
                
                        <button type="submit" class="btn rounded-pill" id="btn-cancel">Cancelar</button>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="content" class="form-label">¿Por qué quieres viajar allí?:</label>
                    
                    <textarea name="content" class="form-control rounded-box reason-shadow" rows="4" placeholder="Escribe tus razones aquí" required></textarea>
                </div>
            </form>
        </div>
    @endsection

    </body>
</html>