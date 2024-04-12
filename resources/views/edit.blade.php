@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Detail Anime</h1>

        <form method="POST" action="{{ route('anime.update', ['anime' => $anime->id]) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul_anime" class="form-label">Title</label>
                <input type="text" class="form-control" id="judul_anime" name="judul_anime" value="{{ $anime->judul_anime }}">
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $anime->slug }}">
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" value="{{ $anime->rating }}">
            </div>

            <div class="mb-3">
                <label for="genres" class="form-label">Genres</label>
                <input type="text" class="form-control" id="genres" name="genres" value="{{ $anime->genres }}">
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ $anime->year }}">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Description</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $anime->deskripsi }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-outline-success" type="submit" href="{{ route('anime.show', $anime->id) }}">Back</a>
        </form>

        {{-- Error Message --}}
        @if ($errors->any())
            <div class="alert alert-danger mt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
@endsection
