<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CuadernoTutorController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\TutorDocenteController;


Route::get('/', function () {
    return view('/default');
});

Route::resource('alumno', AlumnoController::class);

Route::resource('products', ProductController::class);

Route::resource('cuaderno-tutor', CuadernoTutorController::class);

Route::resource('empresa', EmpresaController::class);

Route::resource('tutor-docente', TutorDocenteController::class);

Auth::routes();