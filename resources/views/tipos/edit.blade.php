@extends('layouts.app')

@section('titulo', 'Editar Tipo Equipo')

@section('contenido')
    <br>
    <h3>Editar tipo de Equipo {{ $tipo->tipo_equipo }}</h3>
    <br>
    <form action="{{ route('tipos.update', $tipo) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="tipoEquipo" class="form-label">Tipo de Equipo</label>
            <input type="text" class="form-control" id="tipoEquipo" name="tipoEquipo" value="{{ $tipo->tipo_equipo }}">
        </div>
        <button type="submit" class="btn btn-warning">Editar Tipo Equipo</button>
    </form>
@endsection
