@extends('layouts.app-master')

@section('content')

<h1 class="mb-3">Registro de Estudiantes</h1>

<div class="bg-light p-4 rounded">
    <h1>Lista de calculadoras</h1>
    <div class="lead">
        Lista de calculadoras
    </div>

    <form method="POST" action="{{route('calculadoras.index')}}">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">Id del estudiante</label>
            <input value="{{ old('id') }}" type="numeric" class="form-control" name="id" placeholder="">
            @if ($errors->has('id'))
            <span class="text-danger text-left">{{ $errors->first('id') }}</span>
            @endif
        </div>
</div>
<button type="submit" class="btn btn-primary">Buscar</button>
</form>

<div class="mt-2">
    @include('layouts.partials.messages')
</div>

<table class="table table-bordered">
    <tr>
        <th>Estudiante</th>
        <th>Progreso 1 ponderado</th>
        <th>Progreso 2 ponderado</th>
        <th>Progreso 3 mínimo para pasar</th>

    </tr>
    @foreach ($estudiantes as $key => $estudiante)
    <tr>
        <td>{{ $estudiante->nombre }}</td>
        <td>{{ $estudiante->p1 }}</td>
        <td>{{ $estudiante->p2 }}</td>
        <td>{{ $estudiante->p3 }}</td>
    </tr>
    @endforeach
</table>
</div>
@endsection