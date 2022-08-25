<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::truncate();
        $genre = [
        ['name' => 'Horror', 'slug' => 'horror'],
        ['name' => 'Action', 'slug' => 'action'],
        ['name' => 'RPG', 'slug' => 'rpg'],
        ['name' => 'FPS', 'slug' => 'fps'],
        ['name' => 'MOBA', 'slug' => 'moba'],
        ];

        foreach ($genre as $key => $value) {
            Genre::create($value);
        }
    }
}
