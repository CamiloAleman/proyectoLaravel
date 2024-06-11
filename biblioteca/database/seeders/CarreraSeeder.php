<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //        
        \App\Models\Carrera::factory()->create(
            [
                'codigo_carrera' => 'TIC123',
                'nombre' => 'Licenciatura en Ingenieria en Sistemas',
                'descripcion' => 'carrera de ing en sistemas',]
            );
        
        \App\Models\Carrera::factory()->create(
            [
                'codigo_carrera' => 'FCAE678',
                'nombre' => 'Licenciatura en Economia',
                'descripcion' => 'carrera de econmistas',]
            );
    }
}
