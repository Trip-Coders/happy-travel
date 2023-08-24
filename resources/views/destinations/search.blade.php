@extends('layouts.nav')

@section('content')
    <h1>Search Results</h1>
    <form action="{{ route('search.index') }}" method="GET">
        <input type="text" name="query" value="{{ request('query') }}">
        <button type="submit">Buscar</button>
    </form>

    <ul>
        @foreach ($results as $result)
            <li>{{ $result->title }}</li>
        @endforeach
    </ul>
@endsection