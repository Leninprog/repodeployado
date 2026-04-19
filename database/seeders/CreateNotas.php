<?php

namespace Database\Seeders;

use App\Models\Nota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateNotas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nota = Nota::create(
            [
                'nota' => '9',
                'fecha' => '2024/01/07',
                'estudianteID'=>'1'
            ]
        );
        $nota = Nota::create(
            [
                'nota' => '7',
                'fecha' => '2024/01/15',
                'estudianteID'=>'1'
            ]
        );
        $nota = Nota::create(
            [
                'nota' => '4',
                'fecha' => '2024/01/05',
                'estudianteID'=>'2'
            ]
        );
        $nota = Nota::create(
            [
                'nota' => '3',
                'fecha' => '2024/01/28',
                'estudianteID'=>'2'
            ]
        );

        $nota = Nota::create(
            [
                'nota' => '9',
                'fecha' => '2024/02/07',
                'estudianteID'=>'1'
            ]
        );
        $nota = Nota::create(
            [
                'nota' => '9',
                'fecha' => '2024/02/15',
                'estudianteID'=>'1'
            ]
        );
        $nota = Nota::create(
            [
                'nota' => '9',
                'fecha' => '2024/02/21',
                'estudianteID'=>'1'
            ]
        );
        $nota = Nota::create(
            [
                'nota' => '9',
                'fecha' => '2024/02/24',
                'estudianteID'=>'1'
            ]
        );
        $nota = Nota::create(
            [
                'nota' => '1',
                'fecha' => '2024/02/05',
                'estudianteID'=>'2'
            ]
        );
        $nota = Nota::create(
            [
                'nota' => '7',
                'fecha' => '2024/02/28',
                'estudianteID'=>'2'
            ]
        );
        $nota = Nota::create(
            [
                'nota' => '1',
                'fecha' => '2024/02/29',
                'estudianteID'=>'2'
            ]
        );
        $nota = Nota::create(
            [
                'nota' => '7',
                'fecha' => '2024/02/29',
                'estudianteID'=>'2'
            ]
        );
    }
}
