<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    
@extends('layouts.nav')

@section('content')
    <div class="destination-details">
        <img src="{{ asset($travel->image) }}" alt="Destino">
        <p>{{ $travel->title }}</p>
        <p>Ubicación: {{ $travel->location }}</p>
        <p>{{ $travel->content }}</p>
    </div>
@endsection

</body>
</html>