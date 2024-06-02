@extends('layouts.app')

@section('titulo', 'Tipo')

@section('contenido')
    <br>
    <h3>Tipo {{ $tipo->tipo_equipo }}</h3>
    <br>
    <p>Tipo: {{ $tipo->tipo_equipo }}</p>
    <a href="{{ route('tipos.edit', $tipo) }}" class="btn btn-primary">Editar</a>
    <br><br>

    <form action="{{ route('tipos.destroy', $tipo) }}" method="post" style="text-align: center">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Esto no se puede deshacer, ¿Está segur@?')">Borrar</button>
    </form>

@endsection
