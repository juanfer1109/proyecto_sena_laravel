@extends('layouts.app')

@section('titulo', 'Crear equipo')

@section('contenido')

    <br>
    <h3>Crear un nuevo Equipo</h3>
    <br>
    <form action="/equipos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nombreEquipo" class="form-label">Nombre del equipo</label>
          <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo">
        </div>
        <div class="mb-3">
          <label for="marcaEquipo" class="form-label">Marca del equipo</label>
          <input type="text" class="form-control" id="marcaEquipo" name="marcaEquipo">
        </div>
        <div class="mb-3">
            <label for="modeloEquipo" class="form-label">Modelo del Equipo</label>
            <input type="text" class="form-control" id="modeloEquipo" name="modeloEquipo">
        </div>
        <div class="mb-3">
            <label for="anoFabricacionEquipo" class="form-label">Año de fabricación</label>
            <input type="number" class="form-control" id="anoFabricacionEquipo" name="anoFabricacionEquipo" min="0">
        </div>
        <div class="mb-3">
            <label for="anoCompraEquipo" class="form-label">Año de fabricación</label>
            <input type="number" class="form-control" id="anoCompraEquipo" name="anoCompraEquipo" min="0">
        </div>
        <div class="mb-3">
            <label for="tipoEquipo" class="form-label">Tipo de Equipo</label>
            <select name="tipoEquipo" id="tipoEquipo" class="form-control">
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->tipo_equipo }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
