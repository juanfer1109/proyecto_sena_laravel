@extends('layouts.app')

@section('titulo', 'Detalle Usuario')

@section('contenido')
    <br>
    <h3>{{ $user->name }}</h3>
    <br>
    <p>Nombre: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Rol de Usuario: {{ $rol->nombre_rol }}</p>
    <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Editar</a>
    <br><br>

    <form action="{{ route('users.destroy', $user) }}" method="post" style="text-align: center">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Esto no se puede deshacer, ¿Está segur@?')">Borrar</button>
    </form>

@endsection
