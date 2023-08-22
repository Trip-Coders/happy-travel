@extends('layouts.nav')

@section('content')
    <div class="destinations-list">
        @foreach($destinos as $destino)
            <div class="destination-card">
                <img src="{{ asset('images/File-icon.svg') }}" alt="Destino">
                <h2>{{ $destino->title }}</h2>
                <p>{{ $destino->location }}</p>
                <a href="{{ route('destinations.show', $destino) }}">Ver detalles</a>
                @if(Auth::check()) <!-- Verifica si el usuario está autenticado -->
                <a href="{{ route('destinations.edit', $destino) }}">Editar</a>
                <form action="{{ route('destinations.destroy', $destino) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                @endif
            </div>
        @endforeach
    </div>
@endsection
