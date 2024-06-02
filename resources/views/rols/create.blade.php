@extends('layouts.app')

@section('titulo', 'Crear rol de usuario')

@section('contenido')
    <br>
    <h3>Crear un nuevo rol de usuario</h3>
    <br>
    <form action="/rols" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="rolUsuario" class="form-label">Rol de Usuario</label>
          <input type="text" class="form-control" id="rolUsuario" name="rolUsuario">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
