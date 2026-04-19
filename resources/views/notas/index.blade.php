@extends('layouts.app-master')

@section('content')

<h1 class="mb-3">Registro de Estudiantes</h1>

<div class="bg-light p-4 rounded">
    <h1>Lista de calificaciones</h1>
    <div class="lead">
        <a href="{{ route('notas.create') }}" class="btn btn-primary btn-sm float-right">Crear </a>
    </div>

    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>

    <table class="table table-bordered">
        <tr>
            <th width="1%">No</th>
            <th>Estudiante</th>
            <th>Nota</th>
            <th>Fecha</th>
            <th width="3%" colspan="3">Acciones</th>
        </tr>
        @foreach ($notas as $key => $nota)
        <tr>
            <td>{{ $nota->id }}</td>
            <td>{{ $nota->estudianteObject->nombre }}</td>
            <td>{{ $nota->nota }}</td>
            <td>{{ $nota->fecha }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('notas.show', $nota->id) }}">Detalles</a>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('notas.edit', $nota->id) }}">Editar</a>
            </td>
            <td>
                {!! Form::open(['method' => 'DELETE','route' => ['notas.destroy',
                $nota->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    <div class="d-flex">
        {!! $notas->links() !!}
    </div>

</div>
@endsection