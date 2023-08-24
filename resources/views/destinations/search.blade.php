@extends('layouts.nav')

@section('content')
    <h1>Resultado de la busqueda</h1>
    <form action="{{ route('search.busqueda') }}" method="GET">
        <input type="text" name="busqueda" value="{{ request('busqueda') }}">
        <button type="submit">Buscar</button>
    </form>

    <ul>
        @foreach ($result as $results)
            <li>{{ $results->title }}</li>
            <li>{{ $results->location }}</li>
        @endforeach
    </ul>
@endsection






