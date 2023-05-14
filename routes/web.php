<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CuadernoTutorController;
use App\Http\Controllers\EmpresaController;


Route::get('/', function () {
    return view('/default');
});

Route::resource('alumno', AlumnoController::class);

Route::resource('products', ProductController::class);

Route::resource('cuaderno-tutor', CuadernoTutorController::class);

Route::resource('empresa', EmpresaController::class);

Auth::routes();