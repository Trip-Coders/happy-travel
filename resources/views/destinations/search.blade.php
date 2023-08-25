@extends('layouts.nav')

@section('content')
    <h1>Search Results</h1>
    <form action="{{ route('search.busqueda') }}" method="POST">
        <input type="text" name="query" value="{{ request('query') }}">
        <button type="submit">Buscar</button>
        @csrf
    </form>

    <ul>
        @foreach ($results as $resultItem)
            <li>{{ $resultItem->title }}</li>
        @endforeach
    </ul>
@endsection
