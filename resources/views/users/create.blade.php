@extends('layouts.app')

@section('titulo', 'Crear usuario')

@section('contenido')

    <br>
    <h3>Crear un nuevo Usuario</h3>
    <br>
    <form action="/users" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nombreUsuario" class="form-label">Nombre del usuario</label>
          <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">
        </div>
        <div class="mb-3">
          <label for="emailUsuario" class="form-label">Email del usuario</label>
          <input type="email" class="form-control" id="emailUsuario" name="emailUsuario">
        </div>
        <div class="mb-3">
            <label for="passwordUsuario" class="form-label">Clave del Usuario</label>
            <input type="password" class="form-control" id="passwordUsuario" name="passwordUsuario">
        </div>
        <div class="mb-3">
            <label for="rolUsuario" class="form-label">Rol del Usuario</label>
            <select name="rolUsuario" id="rolUsuario" class="form-control">
                @foreach ($rols as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->nombre_rol }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
