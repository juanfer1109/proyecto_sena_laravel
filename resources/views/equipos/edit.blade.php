@extends('layouts.app')

@section('titulo', 'Editar equipo')

@section('contenido')
    <br>
    <h3>Editar Equipo {{ $equipo->nombre }}</h3>
    <br>
    <form action="{{ route('equipos.update', $equipo) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="nombreEquipo" class="form-label">Nombre del equipo</label>
            <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo" value="{{ $equipo->nombre }}">
          </div>
          <div class="mb-3">
            <label for="marcaEquipo" class="form-label">Marca del equipo</label>
            <input type="text" class="form-control" id="marcaEquipo" name="marcaEquipo" value="{{ $equipo->marca }}">
          </div>
          <div class="mb-3">
              <label for="modeloEquipo" class="form-label">Modelo del Equipo</label>
              <input type="text" class="form-control" id="modeloEquipo" name="modeloEquipo" value="{{ $equipo->modelo }}">
          </div>
          <div class="mb-3">
              <label for="anoFabricacionEquipo" class="form-label">Año de fabricación</label>
              <input type="number" class="form-control" id="anoFabricacionEquipo" name="anoFabricacionEquipo" min="0" value="{{ $equipo->ano_fabricacion }}">
          </div>
          <div class="mb-3">
              <label for="anoCompraEquipo" class="form-label">Año de compra</label>
              <input type="number" class="form-control" id="anoCompraEquipo" name="anoCompraEquipo" min="0" value="{{ $equipo->ano_compra }}">
          </div>
          <div class="mb-3">
              <label for="tipoEquipo" class="form-label">Tipo de Equipo</label>
              <select name="tipoEquipo" id="tipoEquipo" class="form-control">
                @foreach ($tipos as $tipo)
                    @if ($tipo->id == $equipo->tipo_id)
                        <option value="{{ $tipo->id }}" selected>{{ $tipo->tipo_equipo }}</option>
                        @else
                        <option value="{{ $tipo->id }}">{{ $tipo->tipo_equipo }}</option>
                    @endif
                @endforeach
              </select>
          </div>
        <button type="submit" class="btn btn-warning">Editar Equipo</button>
    </form>
@endsection
