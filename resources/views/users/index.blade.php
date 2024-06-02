@extends('layouts.app')

@section('titulo', 'Lista usuarios')

@section('contenido')
    <br>
    <h3>Listado de usuarios</h3>
    <br>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('users.show', $user) }}" class="btn btn-primary">Ver detalles</a></td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3">
                    <a href="{{ route('users.create') }}">Crear nuevo usuario</a>
                </td>
            </tr>
        </tbody>
      </table>

@endsection
