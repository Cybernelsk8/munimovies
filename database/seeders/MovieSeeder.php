<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = Movie::factory(50)->create();

        foreach ($movies as $movie) {
            Image::factory(1)->create([
                'imageable_id' => $movie->id,
                'imageable_type' => 'App\Models\Movie'
            ]);
        }

    }
}
