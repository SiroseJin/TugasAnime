@extends('layouts.main')
@section('content')
        <div class="container text-center mt-4">
        <h1>List Anime</h1>
        <div>
            <p>Nama : Shim Hyen Jin</p>
            <p>Nim : 1201220442</p>
        </div>
        <div class="mt-4 w-25 mx-auto card">
        <a class="btn btn-outline-success" type="submit" href="{{ route('list') }}">Anime List</a>

            <img src=""
                alt="" class="img-fluid">
        </div>
    </div>
@endsection