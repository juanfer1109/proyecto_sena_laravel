<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/equipos/home', function () {
    return view('equipos.menu');
});

Route::get('/users/home', function () {
    return view('users.menu');
});

Route::resource('/equipos', EquipoController::class);

Route::resource('/tipos', TipoController::class);

Route::resource('/rols', RolController::class);

Route::resource('/users', UserController::class);
