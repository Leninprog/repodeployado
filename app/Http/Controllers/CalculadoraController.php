<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Nota;
use App\Models\Progreso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculadoraController extends Controller
{
    public function index(Request $request)
    {
        $filters = [];
        if ($request->id !== null) {
            $filters['value'] = $request->id;
        }

        if ($filters) {
            $estudiantes = $this->filtrarEstudiante($filters);
        } else {
            $estudiantes = $this->filtrarEstudiante();
        }

        return view('calculadoras.index', [
            'estudiantes' => $estudiantes,
        ]);
    }

    private function filtrarEstudiante($filters = null)
    {
        $progresos = Progreso::get();
        // Llama base de datos y devuleve todos los objetos estudiante sin filtros pero con relaciones
        if (!$filters) {
            $estudiantes = Estudiante::select('*')->get();
            foreach ($progresos as $index => $progreso) {
                $filters['dates'] = [
                    'startdate' => $progreso->fechaInicio,
                    'enddate' => $progreso->fechaFin,
                ];
                foreach ($estudiantes as $estudiante) {
                    $txt = 'p' . strval($index + 1);
                    $estudiante->{$txt} = DB::table('notas')
                        ->select(DB::raw('SUM(nota) as notaP1'))
                        ->where('estudianteID', $estudiante->id)
                        ->whereBetween('notas.fecha', [$filters['dates']['startdate'], $filters['dates']['enddate']])->first();
                    $estudiante->{$txt} = $estudiante->{$txt}->notaP1 / $progreso->cantidadNotas;
                    $estudiante->{$txt} = $estudiante->{$txt} * $progreso->peso;
                }
            }
        } else {
            $estudiantes = Estudiante::select('*')->where('id', $filters['value'])->get();
            foreach ($progresos as $index => $progreso) {
                $filters['dates'] = [
                    'startdate' => $progreso->fechaInicio,
                    'enddate' => $progreso->fechaFin,
                ];
                foreach ($estudiantes as $estudiante) {
                    $txt = 'p' . strval($index + 1);
                    $estudiante->{$txt} = DB::table('notas')
                        ->select(DB::raw('SUM(nota) as notaP1'))
                        ->where('estudianteID', $estudiante->id)
                        ->whereBetween('notas.fecha', [$filters['dates']['startdate'], $filters['dates']['enddate']])->first();
                    $estudiante->{$txt} = $estudiante->{$txt}->notaP1 / $progreso->cantidadNotas;
                    $estudiante->{$txt} = $estudiante->{$txt} * $progreso->peso;
                }
            }
        }
        $pesoProg3 = Progreso::select('peso')->where('id', 3)->first();
        $pesoProg3 = $pesoProg3->peso;

        foreach ($estudiantes as $estudiante) {
            $estudiante->p3 = (($estudiante->p1 + $estudiante->p2 - 6) * -1);
        }
        return ($estudiantes);
    }
}
