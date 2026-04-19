@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h1>Editar datos del proveedor</h1>
    <div class="lead">
        Llena los datos acerca del proveedor.
    </div>

    <div class="container mt-4">
        <form method="POST" action="{{ route('progresos.update', $progreso->id) }}">
            @method('patch')
            @csrf

            <div class="mb-3">
                <label for="progreso" class="form-label">Nombre progreso</label>
                <input value="{{ $progreso->progreso }}" type="text" class="form-control" name="progreso"
                    placeholder="Nombre del progreso." required>
                @if ($errors->has('progreso'))
                <span class="text-danger text-left">{{ $errors->first('progreso') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="fechaInicio" class="form-label">Fecha Inicio</label>
                <input value="{{ $progreso->fechaInicio }}" type="date" class="form-control" name="fechaInicio"
                    placeholder="" required>
                @if ($errors->has('fechaInicio'))
                <span class="text-danger text-left">{{ $errors->first('fechaInicio') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="fechaFin" class="form-label">Fecha Inicio</label>
                <input value="{{ $progreso->fechaFin }}" type="date" class="form-control" name="fechaFin"
                    placeholder="" required>
                @if ($errors->has('fechaFin'))
                <span class="text-danger text-left">{{ $errors->first('fechaFin') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="peso" class="form-label">Peso en decimal</label>
                <input value="{{ $progreso->peso}}" type="number" class="form-control" name="peso"
                    placeholder="0.XX" required>
                @if ($errors->has('peso'))
                <span class="text-danger text-left">{{ $errors->first('peso') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="{{ route('progresos.index') }}" class="btn btn-default">Atrás</a>
        </form>
    </div>

</div>
@endsection