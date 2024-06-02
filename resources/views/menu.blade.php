@extends('layouts.app')

    @section('titulo', 'Inspecciones Equipos Almacenes Essity')

    @section('contenido')
        <div class="contenido">
            <h1>
                Inspección de Equipos Almacenes
            </h1>
        </div>
        <div class="menu">
            <a href="/equipos/home">
                <div class="opcion">
                    <img src="/images/inicio_montacargas.png" alt="Montacargas">
                    <h4>Módulo Equipos</h4>
                </div>
            </a>
            <a href="/users/home">
                <div class="opcion">
                    <img src="images/inicio_operador.png" alt="Operador">
                    <h4>Módulo Usuarios</h4>
                </div>
            </a>
            <a href="#">
                <div class="opcion">
                    <img src="images/inicio_estadisticas.png" alt="Dibujo Estadísticas">
                    <h4>Módulo Estadísticas</h4>
                </div>
            </a>
        </div>
    @endsection
