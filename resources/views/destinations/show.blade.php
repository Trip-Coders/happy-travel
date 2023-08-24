<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    
@extends('layouts.nav')

@section('content')
    <div class="destination-details">
        <img src="{{ asset($travel->image) }}" alt="Destino">
        <p>{{ $travel->title }}</p>
        <p>Ubicación: {{ $travel->location }}</p>
        <a href="{{ route('destinations.edit', $travel->id) }}" class="btn btn-primary"><img src="{{ asset('images/Edit-icon.png') }}" alt="edit-icon"></a>
        <a href="{{ route('home', $travel->id) }}" class="delete-destination" data-destination-id="{{ $travel->id }}">
            <img src="{{ asset('images/Delete-icon.svg') }}" alt="delete-icon">
        </a>
       

        <p>{{ $travel->content }}</p>
    </div>
@endsection

</body>
</html>