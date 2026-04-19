<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgresosRequest;
use App\Http\Requests\UpdateProgresosRequest;
use App\Models\Progreso;
use Illuminate\Http\Request;

class ProgresosController extends Controller
{
    /**
     * Display all progresos
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progresos = Progreso::latest()->paginate(10);

        return view('progresos.index', compact('progresos'));
    }

    /**
     * Show form for creating progreso
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('progresos.create');
    }

    /**
     * Store a newly created progreso
     * 
     * @param Progreso $progreso
     * @param StoreProgresosRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Progreso $progreso, StoreProgresosRequest $request)
    {
        //For demo purposes only. When creating progreso or inviting a progreso
        // you should create a generated random password and email it to the progreso
        $progreso->create(array_merge($request->validated()));

        return redirect()->route('progresos.index')
            ->withSuccess(__('Progreso registrado correctamente.'));
    }

    /**
     * Show progreso data
     * 
     * @param Progreso $progreso
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(Progreso $progreso)
    {
        return view('progresos.show', [
            'progreso' => $progreso
        ]);
    }

    /**
     * Edit progreso data
     * 
     * @param Progreso $progreso
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Progreso $progreso)
    {

        return view('progresos.edit', [
            'progreso' => $progreso
        ]);
    }
    /**
     * Update progreso data
     * 
     * @param Progreso $progreso
     * @param UpdateProgresosRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Progreso $progreso, UpdateProgresosRequest $request)
    {
        $progreso->update($request->validated());

        return redirect()->route('progresos.index')
            ->withSuccess(__('Progreso actualizado correctamente.'));
    }

    /**
     * Delete progreso data
     * 
     * @param Progreso $progreso
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progreso $progreso)
    {
        $progreso->delete();

        return redirect()->route('progresos.index')
            ->withSuccess(__('Progreso eliminado correctamente.'));
    }
}
