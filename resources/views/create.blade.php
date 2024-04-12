@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>Add New Anime</h1>
        <form action="{{ route('anime.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul_anime" class="form-label">Title</label>
                <input type="text" class="form-control" id="judul_anime" name="judul_anime" value="{{ old('judul_anime') }}">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" value="{{ old('rating') }}">
            </div>
            <div class="mb-3">
                <label for="genres" class="form-label">Genres</label>
                <input type="text" class="form-control" id="genres" name="genres" value="{{ old('genres') }}">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ old('year') }}">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Description</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Anime</button>
        </form>
    </div>
@endsection
