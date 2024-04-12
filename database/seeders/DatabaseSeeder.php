<?php

namespace Database\Seeders;

use App\Models\Animelist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Animelist::create([
            'judul_anime' => 'Maquia',
            'slug' => 'maquia',
            'rating' => '9',
            'genres' => 'drama, fantasy',
            'year' => '2018',
            'deskripsi' => 'Maquia is a member of a special race called the Iorph—mystical beings who can live for hundreds of years and remain separate from the lives and daily troubles of mankind',
        ]);

        Animelist::create([
            'judul_anime' => 'Violet Evergarden',
            'slug' => 'violetevergarden',
            'rating' => '10',
            'genres' => 'drama, fantasy',
            'year' => '2018',
            'deskripsi' => 'An emotionally detached soldier settles into postwar life as a ghostwriter and begins to reconnect with her feelings while searching for the meaning behind her former commanders final words to her.',
        ]);
    }
}
