@extends('layouts.app')

@section('titulo', 'Lista equipos')

@section('contenido')
    <br>
    <h3>Listado de equipos</h3>
    <br>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
            <tr>
                <td>{{ $equipo->nombre }}</td>
                <td>{{ $equipo->marca }}</td>
                <td>{{ $equipo->modelo }}</td>
                <td><a href="{{ route('equipos.show', $equipo) }}" class="btn btn-primary">Ver detalles</a></td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4">
                    <a href="{{ route('equipos.create') }}">Crear nuevo equipo</a>
                </td>
            </tr>
        </tbody>
      </table>

@endsection
