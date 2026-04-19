@extends('layouts.app-master')

@section('content')

<h1 class="mb-3">Registro de Estudiantes</h1>

<div class="bg-light p-4 rounded">
    <h1>Lista de progresos</h1>
    <div class="lead">
        Lista de progresos
        <a href="{{ route('progresos.create') }}" class="btn btn-primary btn-sm float-right">Crear </a>
    </div>

    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>

    <table class="table table-bordered">
        <tr>
            <th width="1%">No</th>
            <th>Nombre</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Peso</th>
            <th width="3%" colspan="3">Acciones</th>
        </tr>
        @foreach ($progresos as $key => $progreso)
        <tr>
            <td>{{ $progreso->id }}</td>
            <td>{{ $progreso->progreso }}</td>
            <td>{{ $progreso->fechaInicio }}</td>
            <td>{{ $progreso->fechaFin }}</td>
            <td>{{ $progreso->peso }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('progresos.show', $progreso->id) }}">Detalles</a>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('progresos.edit', $progreso->id) }}">Editar</a>
            </td>
            <td>
                {!! Form::open(['method' => 'DELETE','route' => ['progresos.destroy',
                $progreso->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    <div class="d-flex">
        {!! $progresos->links() !!}
    </div>

</div>
@endsection