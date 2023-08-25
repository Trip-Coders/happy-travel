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

    <div class="container" style="margin-top: 4rem;">
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex justify-content-center align-items-center" style="margin-right: -10rem;">
                <img class="rounded-4" src="{{ asset('storage/' . $travel->image) }}" alt="{{ $travel->title }}" width="400" height="400">

            </div>
        </div>
        <div class="col-md-5 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="color: #FF0060; font-weight: bold;">{{ $travel->title}}</h3>
                <div class="d-flex">
                    @auth
                    <a href="{{route('destinations.edit', $travel)}}"><img src="{{ asset('images/Edit-icon.png') }}" class="m-1" alt=""></a>
                    <form action="{{ route('destinations.destroy', $travel->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <a href="#" class="delete-destination" data-destination-id="{{ $travel->id }}" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" style="border: none; background-color: transparent;">
                            <img src="{{ asset('images/Delete-icon.svg') }}" alt="delete-icon">
                        </a>
                    </form>
                    @endauth
                </div>
            </div>
            <p style="color: #FF0060;">{{ $travel->location }}</p>
            <p class="text-primary">{{ $travel->content }}</p>
        </div>
    </div>
</div>
@endsection

</body>
</html>