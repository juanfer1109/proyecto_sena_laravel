@extends('layouts.app')

@section('titulo', 'Lista roles de Usuario')

@section('contenido')
    <br>
    <h3>Listado de roles de Usuario</h3>
    <br>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Rol</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($rols as $rol)
            <tr>
                <td>{{ $rol->nombre_rol }}</td>
                <td><a href="{{ route('rols.show', $rol) }}" class="btn btn-primary">Ver detalles</a></td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2">
                    <a href="{{ route('rols.create') }}">Crear nuevo rol de usuario</a>
                </td>
            </tr>
        </tbody>

@endsection
