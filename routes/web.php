<?php

use App\Http\Controllers\Empleado_controller;
use App\Http\Controllers\Tarea_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Tarea_controller::class, 'index']);
Route::post('/guardarTareas', [Tarea_controller::class, 'save']);
