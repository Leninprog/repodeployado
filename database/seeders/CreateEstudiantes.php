<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateEstudiantes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estudiante = Estudiante::create(
            [
                'nombre' => 'Pepito Perez',
            ]
        );
        $estudiante = Estudiante::create(
            [
                'nombre' => 'Juanito Alimaña',
            ]
        );
    }
}
