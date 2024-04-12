<?php

namespace App\Http\Controllers;

use App\Models\Animelist;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Animelist::all();
        return view('animelist', compact('animes'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_anime' => 'required',
            'slug' => 'required',
            'rating' => 'required|numeric',
            'genres' => 'required',
            'year' => 'required|numeric',
            'deskripsi' => 'required'
        ]);

        Animelist::create($validatedData);

        return redirect()->route('anime.index')->with('success', 'Anime data created successfully!');
    }

    public function show($id)
    {
        $anime = Animelist::findOrFail($id);
        return view('show', compact('anime'));
    }

    public function edit($id)
    {
        $anime = Animelist::findOrFail($id);
        return view('edit', compact('anime'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul_anime' => 'required',
            'slug' => 'required',
            'rating' => 'required|numeric',
            'genres' => 'required',
            'year' => 'required|numeric',
            'deskripsi' => 'required'
        ]);

        $anime = Animelist::findOrFail($id);
        $anime->update($validatedData);
        return redirect()->route('anime.index')->with('success', 'Anime data updated successfully!');
    }

    public function destroy(Request $request, $id)
    {
        $anime = Animelist::findOrFail($id);
        $anime->delete();
        return redirect()->route('anime.index')->with('success', 'Anime data deleted successfully!');
    }
}
