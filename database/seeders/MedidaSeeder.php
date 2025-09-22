<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medida;

class MedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $medidas = [
            ['nombre' => 'Kilogramo', 'abreviatura' => 'kg'],
            ['nombre' => 'Gramo', 'abreviatura' => 'g'],
            ['nombre' => 'Litro', 'abreviatura' => 'l'],
            ['nombre' => 'Mililitro', 'abreviatura' => 'ml'],
            ['nombre' => 'Unidad', 'abreviatura' => 'ud'],
        ];

         foreach ($medidas as $medida) {
            Medida::firstOrCreate($medida);
        }
    }
}
