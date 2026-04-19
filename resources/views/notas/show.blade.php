@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h1>Detalles de la nota</h1>
    <div class="lead">

    </div>

    <section class="container mt-4">
        <p>
            Nota ID: {{ $nota->id }}
        </p>
        <p>
            Nombre del estudiante: {{ $nota->estudianteObject->nombre }}
        </p>
        <p>
            Fecha: {{ $nota->fecha }}
        </p>
    </section>

</div>
<section class="mt-4">
    <a href="{{ route('notas.edit', $nota->id) }}" class="btn btn-info">Editar</a>
    <a href="{{ route('notas.index') }}" class="btn btn-default">Atrás</a>
</section>
@endsection