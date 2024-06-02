@extends('layouts.app')

@section('titulo', 'Editar usuario')

@section('contenido')
    <br>
    <h3>Editar Usuario {{ $user->name }}</h3>
    <br>
    <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="nombreUsuario" class="form-label">Nombre del usuario</label>
            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" value="{{ $user->name }}">
          </div>
          <div class="mb-3">
            <label for="emailUsuario" class="form-label">Email del usuario</label>
            <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" value="{{ $user->email }}">
          </div>
          <div class="mb-3">
              <label for="passwordUsuario" class="form-label">Clave del usuario</label>
              <input type="password" class="form-control" id="passwordUsuario" name="passwordUsuario" value="{{ $user->password }}">
          </div>
          <div class="mb-3">
              <label for="rolUsuario" class="form-label">Rol del usuario</label>
              <select name="rolUsuario" id="rolUsuario" class="form-control">
                @foreach ($rols as $rol)
                    @if ($rol->id == $user->rol_id)
                        <option value="{{ $rol->id }}" selected>{{ $rol->nombre_rol }}</option>
                        @else
                        <option value="{{ $rol->id }}">{{ $rol->nombre_rol }}</option>
                    @endif
                @endforeach
              </select>
          </div>
        <button type="submit" class="btn btn-warning">Editar Usuario</button>
    </form>
@endsection
