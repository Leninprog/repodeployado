@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h1>Detalles del estudiante</h1>
    <div class="lead">

    </div>

    <section class="container mt-4">
        <p>
            Estudiante ID: {{ $estudiante->id }}
        </p>
        <p>
            Nombre del estudiante: {{ $estudiante->nombre }}
        </p>
    </section>

</div>
<section class="mt-4">
    <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-info">Editar</a>
    <a href="{{ route('estudiantes.index') }}" class="btn btn-default">Atrás</a>
</section>
@endsection