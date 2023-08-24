@extends('layouts.nav')

@section('content')
    <h1>Resultado de la busqueda</h1>
    <ul>
        @foreach ($result as $results)
            <li>{{ $results->title }}</li>
            <li>{{ $results->location }}</li>
        @endforeach
    </ul>
@endsection






