@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h1>Añadir un progreso</h1>
    <div class="lead">
        Llena los datos acerca del progreso.
    </div>

    <div class="container mt-4">
        <form method="POST" action="{{route('progresos.store')}}">
            @csrf
            <div class="mb-3">
                <label for="progreso" class="form-label">Nombre progreso</label>
                <input value="{{ old('progreso') }}" type="text" class="form-control" name="progreso"
                    placeholder="Nombre del progreso." required>
                @if ($errors->has('progreso'))
                <span class="text-danger text-left">{{ $errors->first('progreso') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="fechaInicio" class="form-label">Fecha Inicio</label>
                <input value="{{ old('fechaInicio') }}" type="date" class="form-control" name="fechaInicio"
                    placeholder="" required>
                @if ($errors->has('fechaInicio'))
                <span class="text-danger text-left">{{ $errors->first('fechaInicio') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="fechaFin" class="form-label">Fecha Inicio</label>
                <input value="{{ old('fechaFin') }}" type="date" class="form-control" name="fechaFin"
                    placeholder="" required>
                @if ($errors->has('fechaFin'))
                <span class="text-danger text-left">{{ $errors->first('fechaFin') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="peso" class="form-label">Peso en decimal</label>
                <input value="{{ old('peso') }}" type="text" class="form-control" name="peso"
                    placeholder="0.XX" required>
                @if ($errors->has('peso'))
                <span class="text-danger text-left">{{ $errors->first('peso') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Crear progreso</button>
            <a href="{{ route('progresos.index') }}" class="btn btn-default">Atrás</a>
        </form>
    </div>

</div>
@endsection