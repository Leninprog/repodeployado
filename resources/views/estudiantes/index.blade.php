@extends('layouts.app-master')

@section('content')

<h1 class="mb-3">Registro de Estudiantes</h1>

<div class="bg-light p-4 rounded">
    <h1>Lista de estudiantes</h1>
    <div class="lead">
        Lista de estudiantes
        <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm float-right">Crear </a>
    </div>

    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>

    <table class="table table-bordered">
        <tr>
            <th width="1%">No</th>
            <th>Nombre</th>
            <th width="3%" colspan="3">Acciones</th>
        </tr>
        @foreach ($estudiantes as $key => $estudiante)
        <tr>
            <td>{{ $estudiante->id }}</td>
            <td>{{ $estudiante->nombre }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('estudiantes.show', $estudiante->id) }}">Detalles</a>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('estudiantes.edit', $estudiante->id) }}">Editar</a>
            </td>
            <td>
                {!! Form::open(['method' => 'DELETE','route' => ['estudiantes.destroy',
                $estudiante->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

    <div class="d-flex">
        {!! $estudiantes->links() !!}
    </div>

</div>
@endsection