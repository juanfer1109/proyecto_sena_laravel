@extends('layouts.app')

@section('titulo', 'Editar Rol de Usuario')

@section('contenido')
    <br>
    <h3>Editar rol de Usuario {{ $rol->nombre_rol }}</h3>
    <br>
    <form action="{{ route('rols.update', $rol) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="rolUsuario" class="form-label">Rol Usuario</label>
            <input type="text" class="form-control" id="rolUsuario" name="rolUsuario" value="{{ $rol->nombre_rol }}">
        </div>
        <button type="submit" class="btn btn-warning">Editar Rol Usuario</button>
    </form>
@endsection
