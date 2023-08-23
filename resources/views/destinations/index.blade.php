<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <a href="{{ route('destinations.show', $destino) }}">Ver detalles</a>
               
            </div>
        @endforeach
    </div>
@endsection
</body>
</html>