@extends('layouts.app')

    @section('titulo', 'Módulo Usuarios')

    @section('contenido')
    <div class="contenido">
        <h1>
            Módulo Usuarios
        </h1>
    </div>
    <div class="menumodulo">
        <div class="grupo">
            <button class="opcion azul" type="button" onclick="location.href='{{ route('users.create') }}'">
                <b>Crear Usuario Nuevo</b>
            </button>
        </div>
        <div class="img">
            <img src="/images/inicio_operador.png" alt="Operador">
            <button class="opcion fucsia" type="button" onclick="location.href='{{ route('users.index') }}'">
                <b>Administrar Usuarios</b>
            </button>
        </div>
        <div class="grupo2">
            <button class="opcion azul" onclick="location.href='{{ route('rols.index') }}'">
                <b>Administrar roles</b>
            </button>
        </div>
    </div>
    @endsection
