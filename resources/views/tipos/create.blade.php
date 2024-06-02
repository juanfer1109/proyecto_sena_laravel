@extends('layouts.app')

@section('titulo', 'Crear tipo de equipo')

@section('contenido')
    <br>
    <h3>Crear un nuevo tipo de equipo</h3>
    <br>
    <form action="/tipos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="tipoEquipo" class="form-label">Tipo de Equipo</label>
          <input type="text" class="form-control" id="tipoEquipo" name="tipoEquipo">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
