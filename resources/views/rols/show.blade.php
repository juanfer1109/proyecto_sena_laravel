@extends('layouts.app')

@section('titulo', 'Rol')

@section('contenido')
    <br>
    <h3>Rol {{ $rol->nombre_rol }}</h3>
    <br>
    <p>Tipo: {{ $rol->nombre_rol }}</p>
    <a href="{{ route('rols.edit', $rol) }}" class="btn btn-primary">Editar</a>
    <br><br>

    <form action="{{ route('rols.destroy', $rol) }}" method="post" style="text-align: center">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Esto no se puede deshacer, ¿Está segur@?')">Borrar</button>
    </form>

@endsection
