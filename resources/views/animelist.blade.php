@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Anime List</h1>
        <a class="btn btn-outline-success" href="{{ route('anime.create') }}">Add Anime</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genres</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animes as $anime)
                    <tr>
                        <td><a href="{{ route('anime.show', $anime->id) }}">{{ $anime->judul_anime }}</a></td>
                        <td>{{ $anime->genres }}</td>
                        <td>{{ $anime->year }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
