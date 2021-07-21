<?php

namespace Database\Seeders;

use App\Models\Clasification;
use Illuminate\Database\Seeder;

class ClasificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clasification::create([
            'name' => 'AA',
            'description' => 'Películas para todo público que tengan además atractivo infantil y sean comprensibles para niños menores de siete años de edad. Películas para todo público que tengan además atractivo infantil y sean comprensibles para niños menores de siete años de edad.'
        ]);

        Clasification::create([
            'name' => 'A',
            'description' => 'Películas para todo público.'
        ]);

        Clasification::create([
            'name' => 'B',
            'description' => 'Películas para adolescentes de 12 años en adelante.'
        ]);

        Clasification::create([
            'name' => 'B15',
            'description' => 'Película no recomendable para menores de 15 años de edad.'
        ]);

        Clasification::create([
            'name' => 'C',
            'description' => 'Películas para adultos de 18 años en adelante.'
        ]);

        Clasification::create([
            'name' => 'D',
            'description' => 'Películas para adultos, con sexo explícito, lenguaje procaz o alto grado de violencia.'
        ]);
    }
}
