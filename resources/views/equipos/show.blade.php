@extends('layouts.app')

@section('titulo', 'Detalle Equipo')

@section('contenido')
    <br>
    <h3>{{ $equipo->nombre }}</h3>
    <br>
    <p>Marca: {{ $equipo->marca }}</p>
    <p>Modelo: {{ $equipo->modelo }}</p>
    <p>Año fabricación: {{ $equipo->ano_fabricacion }}</p>
    <p>Año compra: {{ $equipo->ano_compra }}</p>
    <p>Tipo de Equipo: {{ $tipo->tipo_equipo }}</p>
    <a href="{{ route('equipos.edit', $equipo) }}" class="btn btn-primary">Editar</a>
    <br><br>

    <form action="{{ route('equipos.destroy', $equipo) }}" method="post" style="text-align: center">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Esto no se puede deshacer, ¿Está segur@?')">Borrar</button>
    </form>

@endsection
