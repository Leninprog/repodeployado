@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h1>Editar datos del proveedor</h1>
    <div class="lead">
        Llena los datos acerca del proveedor.
    </div>

    <div class="container mt-4">
        <form method="POST" action="{{ route('estudiantes.update', $estudiante->id) }}">
            @method('patch')
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre estudiante</label>
                <input value="{{ $estudiante->nombre }}" type="text" class="form-control" name="nombre"
                    placeholder="Nombre del estudiante." required>
                @if ($errors->has('nombre'))
                <span class="text-danger text-left">{{ $errors->first('nombre') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="{{ route('estudiantes.index') }}" class="btn btn-default">Atrás</a>
        </form>
    </div>

</div>
@endsection