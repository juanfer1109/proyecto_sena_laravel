@extends('layouts.app')

    @section('titulo', 'Módulo Equipos')

    @section('contenido')
    <div class="contenido">
        <h1>
            Módulo Equipos
        </h1>
    </div>
    <div class="menumodulo">
        <div class="grupo">
            <button class="opcion azul" type="button" onclick="location.href='{{ route('equipos.create') }}'">
                <b>Crear Equipo Nuevo</b>
            </button>
            <button class="opcion fucsia" type="button" onclick="location.href='{{ route('equipos.index') }}'">
                <b>Administrar Equipos</b>
            </button>
        </div>
        <div class="img">
            <img src="/images/inicio_montacargas.png" alt="Montacargas">
        </div>
        <div class="grupo2">
            <button class="opcion azul">
                <b>Ingresar Inspección</b>
            </button>
            <button class="opcion fucsia">
                <b>Gestionar Alertas</b>
            </button>
        </div>
    </div>
    <div class="submenu dos">
        <button class="opcion2" type="button" onclick="location.href='{{ route('tipos.index') }}'"'>
            <b>Tipos de Equipos</b>
        </button>
        <button class="opcion2" type="button">
            <b>Campos de Inspección</b>
        </button>
    </div>
    @endsection
