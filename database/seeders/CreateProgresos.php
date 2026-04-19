<?php

namespace Database\Seeders;

use App\Models\Progreso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateProgresos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $progreso = Progreso::create(
            [
                'progreso' => 'Progreso 1',
                'fechaInicio' => '2024/01/01',
                'fechaFin' => '2024/01/31',
                'cantidadNotas' => '2',
                'peso' => '0.25'
            ]
        );
        $progreso = Progreso::create(
            [
                'progreso' => 'Progreso 2',
                'fechaInicio' => '2024/02/01',
                'fechaFin' => '2024/02/29',
                'cantidadNotas' => '4',
                'peso' => '0.35'
            ]
        );
        $progreso = Progreso::create(
            [
                'progreso' => 'Progreso 3',
                'fechaInicio' => '2024/03/01',
                'fechaFin' => '2024/03/31',
                'cantidadNotas' => '4',
                'peso' => '0.40'
            ]
        );
    }
}
