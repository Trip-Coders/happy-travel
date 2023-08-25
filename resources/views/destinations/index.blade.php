<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
@extends('layouts.nav')

@section('content')
<div class="destinations-list">
    @foreach($destinos as $destino)
        <div class="destination-card">
            <div class="position-relative">
                <img src="{{ asset($destino->image) }}" alt="Destino" class="destination-image">
                @auth
                <a href="{{ route('destinations.show', $destino) }}" class="position-absolute top-0 end-0 mt-3 me-3">
                    <img src="{{ asset('images/Info-icon.svg') }}" alt="info-icono">
                </a>
                @endauth
            </div>
            <div class="destination-details">
                <div>
                <h2 class="destination-title text-primary">{{ $destino->title }}</h2>
                <p class="destination-location text-primary">{{ $destino->location }}</p>
                </div>
                @auth
                <div class="destination-actions">
                    <a href="{{ route('destinations.edit', $destino->id) }}"><img src="{{ asset('images/Edit-icon.png') }}" alt="icono-edit"></a>
                    
                    <form action="{{ route('destinations.destroy', $destino->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <a href="#" class="delete-destination" data-destination-id="{{ $destino->id }}" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" style="border: none; background-color: transparent;">
                            <img src="{{ asset('images/Delete-icon.svg') }}" alt="delete-icon">
                        </a>

                    </form>
                </div>
                @endauth
            </div>
        </div>
    @endforeach
</div>
@endsection
</body>
</html>