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
                <img src="{{ asset($destino->image) }}" alt="Destino">
                <h2>{{ $destino->title }}</h2>
                <p>{{ $destino->location }}</p>
                <a href="#" class="delete-destination" data-destination-id="{{ $destino }}">
                    <img src="{{ asset('images/Delete-icon.svg') }}" alt="delete-icon">
                </a>
                
                <a href="{{ route('destinations.edit', $destino->id) }}" class="btn btn-primary"><img src="{{ asset('images/Edit-icon.png') }}" alt="icono-edit"></a>
                <a href="{{ route('destinations.show', $destino) }}"><img src="{{ asset('images/Glass-icon.svg') }}" alt="info-icono"></a>
               
            </div>
        @endforeach
    </div>
@endsection
</body>
</html>