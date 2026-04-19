<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstudiantesRequest;
use App\Http\Requests\UpdateEstudiantesRequest;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display all estudiantes
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::latest()->paginate(10);

        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show form for creating estudiante
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created estudiante
     * 
     * @param Estudiante $estudiante
     * @param StoreEstudiantesRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Estudiante $estudiante, StoreEstudiantesRequest $request)
    {
        //For demo purposes only. When creating estudiante or inviting a estudiante
        // you should create a generated random password and email it to the estudiante
        $estudiante->create(array_merge($request->validated()));

        return redirect()->route('estudiantes.index')
            ->withSuccess(__('Estudiante registrado correctamente.'));
    }

    /**
     * Show estudiante data
     * 
     * @param Estudiante $estudiante
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', [
            'estudiante' => $estudiante
        ]);
    }

    /**
     * Edit estudiante data
     * 
     * @param Estudiante $estudiante
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {

        return view('estudiantes.edit', [
            'estudiante' => $estudiante
        ]);
    }
    /**
     * Update estudiante data
     * 
     * @param Estudiante $estudiante
     * @param UpdateEstudiantesRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Estudiante $estudiante, UpdateEstudiantesRequest $request)
    {
        $estudiante->update($request->validated());

        return redirect()->route('estudiantes.index')
            ->withSuccess(__('Estudiante actualizado correctamente.'));
    }

    /**
     * Delete estudiante data
     * 
     * @param Estudiante $estudiante
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiantes.index')
            ->withSuccess(__('Estudiante eliminado correctamente.'));
    }
}
