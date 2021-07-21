<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Clasification;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */



    public function definition()
    {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'description' => $this->faker->paragraph(),
            'overview' => $this->faker->paragraph(),
            'original_lenguage' => $this->faker->randomElement(['es','en']),
            'url' => 'https://youtu.be/fp_milOcghU',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/fp_milOcghU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'status' => 1,
            'slug' => Str::slug($title),
            'user_id' => 1,
            'category_id' => Category::all()->random()->id,
            'clasification_id' => Clasification::all()->random()->id
        ];
    }
}
