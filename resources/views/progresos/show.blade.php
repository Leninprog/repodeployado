@extends('layouts.app-master')

@section('content')
<div class="bg-light p-4 rounded">
    <h1>Detalles del progreso</h1>
    <div class="lead">

    </div>

    <section class="container mt-4">
        <p>
            Progreso ID: {{ $progreso->id }}
        </p>
        <p>
            Nombre del progreso: {{ $progreso->progreso }}
        </p>
        <p>
            Fecha inicio: {{ $progreso->fechaInicio }}
        </p>
        <p>
            Fecha fin: {{ $progreso->fechaFin }}
        </p>
        <p>
            Peso: {{ $progreso->peso }}
        </p>
    </section>

</div>
<section class="mt-4">
    <a href="{{ route('progresos.edit', $progreso->id) }}" class="btn btn-info">Editar</a>
    <a href="{{ route('progresos.index') }}" class="btn btn-default">Atrás</a>
</section>
@endsection