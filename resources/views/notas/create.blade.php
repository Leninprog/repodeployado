@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h1>Añadir una nota</h1>
    <div class="lead">
        Llena los datos acerca de la nota.
    </div>

    <div class="container mt-4">
        <form method="POST" action="{{route('notas.store')}}">
            @csrf
            <div class="mb-3">
                <label for="nota" class="form-label">Nota</label>
                <input value="{{ old('nota') }}" type="number" class="form-control" name="nota"
                    placeholder="Nota." required>
                @if ($errors->has('nota'))
                <span class="text-danger text-left">{{ $errors->first('nota') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input value="{{ old('fecha') }}" type="date" class="form-control" name="fecha"
                    placeholder="" required>
                @if ($errors->has('fecha'))
                <span class="text-danger text-left">{{ $errors->first('fecha') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="estudianteID" class="form-label">Estudiante</label>
                <select class="form-control" name="estudianteID" required>
                    <option value="">Elija el estudiante al cual asignar la nota</option>
                    @foreach($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}">{{
                        $estudiante->nombre }}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('estudianteID'))
                <span class="text-danger text-left">{{ $errors->first('estudianteID') }}</span>
                @endif
            </div>


            <button type="submit" class="btn btn-primary">Publicar nota</button>
            <a href="{{ route('notas.index') }}" class="btn btn-default">Atrás</a>
        </form>
    </div>
    

    

</div>
@endsection