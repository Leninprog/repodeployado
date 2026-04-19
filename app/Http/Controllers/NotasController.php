<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotasRequest;
use App\Http\Requests\UpdateNotasRequest;
use App\Models\Estudiante;
use App\Models\Nota;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display all notas
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $notas = Nota::latest()->paginate(10);

        foreach ($notas as $nota) {
            $nota->estudianteObject = Estudiante::where('id', $nota->estudianteID)->first();
        }

        return view('notas.index', compact('notas'));
    }

    /**
     * Show form for creating nota
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notas.create', [
            'estudiantes' => Estudiante::latest()->get(),
        ]);
    }

    /**
     * Store a newly created nota
     * 
     * @param Nota $nota
     * @param StoreNotasRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Nota $nota, StoreNotasRequest $request)
    {
        //For demo purposes only. When creating nota or inviting a nota
        // you should create a generated random password and email it to the nota
        $nota->create(array_merge($request->validated()));

        return redirect()->route('notas.index')
            ->withSuccess(__('Nota registrado correctamente.'));
    }

    /**
     * Show nota data
     * 
     * @param Nota $nota
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        $nota->estudianteObject = Estudiante::where('id', $nota->estudianteID)->first();
        return view('notas.show', [
            'nota' => $nota
        ]);
    }

    /**
     * Edit nota data
     * 
     * @param Nota $nota
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Nota $nota)
    {

        return view('notas.edit', [
            'nota' => $nota,
            'estudiantes' => Estudiante::latest()->get(),
        ]);
    }
    /**
     * Update nota data
     * 
     * @param Nota $nota
     * @param UpdateNotasRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Nota $nota, UpdateNotasRequest $request)
    {
        $nota->update($request->validated());

        return redirect()->route('notas.index')
            ->withSuccess(__('Nota actualizado correctamente.'));
    }

    /**
     * Delete nota data
     * 
     * @param Nota $nota
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        $nota->delete();

        return redirect()->route('notas.index')
            ->withSuccess(__('Nota eliminado correctamente.'));
    }
}
