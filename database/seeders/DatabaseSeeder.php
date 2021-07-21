<?php

namespace Database\Seeders;

use App\Models\Clasification;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('movies');
        Storage::makeDirectory('movies');
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ClasificationSeeder::class);
        $this->call(MovieSeeder::class);

    }
}
