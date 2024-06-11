<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Student::factory()->create(
        [
            'cif' => '12345678A',
            'name' => 'Test Student',
            'lat_name' => 'Test Student',
            'email' => 'test@gmail.com',
            'phone' => '99823764',
            ]
        );

        \App\Models\Student::factory()->create(
            [
                'cif' => '19024452',
                'name' => 'JR',
                'lat_name' => 'INN',
                'email' => 'JRINN@gmail.com',
                'phone' => '99823764',]
            );
        
        \App\Models\Carrera::factory()->create(
            [
                'codigo_carrera' => 'aemes123',
                'nombre' => 'Licenciatura en Psicologia',
                'descripcion' => 'carrera de psicologos',]
            );
        
    }
}
