@extends('layouts.app')

@section('titulo', 'Lista tipos de Equipos')

@section('contenido')
    <br>
    <h3>Listado de tipos de Equipos</h3>
    <br>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Tipo</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tipos as $tipo)
            <tr>
                <td>{{ $tipo->tipo_equipo }}</td>
                <td><a href="{{ route('tipos.show', $tipo) }}" class="btn btn-primary">Ver detalles</a></td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2">
                    <a href="{{ route('tipos.create') }}">Crear nuevo tipo de equipo</a>
                </td>
            </tr>
        </tbody>

@endsection
