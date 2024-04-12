@extends('layouts.main')

@section('content')

    <div>

        <h1>{{ $anime->judul_anime }}</h1>

        <p><strong>Rating:</strong> {{ $anime->rating }}</p>

        <p><strong>Genres:</strong> {{ $anime->genres }}</p>

        <p><strong>Year:</strong> {{ $anime->year }}</p>

        <p><strong>Description:</strong> {{ $anime->deskripsi }}</p>

        <!-- Edit Button -->
        <a class="btn btn-outline-primary" href="{{ route('anime.edit', $anime->id) }}">Edit</a>

        <!-- Delete Button -->
        <form method="POST" action="{{ route('anime.destroy', $anime->id) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this anime?')">Delete</button>
        </form>

        <a class="btn btn-outline-success" type="submit" href="{{ route('list') }}">Back to Anime List</a>

    </div>

@endsection
