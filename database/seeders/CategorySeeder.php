<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Category::create([
            'name' => 'Acción'
        ]);
        Category::create([
            'name' => 'Aventuras'
        ]);
        Category::create([
            'name' => 'Ciencia Ficción'
        ]);
        Category::create([
            'name' => 'Comedia'
        ]);
        Category::create([
            'name' => 'Documental'
        ]);
        Category::create([
            'name' => 'Drama'
        ]);
        Category::create([
            'name' => 'Fantasía'
        ]);
        Category::create([
            'name' => 'Musical'
        ]);
        Category::create([
            'name' => 'Suspenso'
        ]);
        Category::create([
            'name' => 'Terror'
        ]);
    }
}
