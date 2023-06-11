<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CuadernoTutorController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\TutorDocenteController;
use App\Http\Controllers\CentroTrabajoController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\TutorLaboralController;
use App\Http\Controllers\CuestionarioEmpresaController;
use App\Http\Controllers\EvaluacionQuincenalController;
use App\Http\Controllers\ValoracionAlumnoController;
use App\Http\Controllers\ValoracionFinalTutorDocenteController;
use App\Http\Controllers\ValoracionFinalTutorLaboralController;


Route::get('/', function () {
    return view('/default');
});

Route::get('/cuaderno-tutor', function () {
    return view('cuaderno-tutor.index');
});

Route::resource('alumno', AlumnoController::class);

Route::get('defaultAlumnoIndex', [AlumnoController::class, 'defaultAlumnoIndex'])->name('alumno.defaultAlumnoIndex');

Route::get('cuadernoAlumnoCreate', [AlumnoController::class, 'cuadernoAlumnoCreate'])->name('alumno.cuadernoAlumnoCreate');

Route::resource('empresa', EmpresaController::class);

Route::get('defaultIndex', [EmpresaController::class, 'defaultIndex'])->name('empresa.defaultIndex');

Route::resource('centro-trabajo', CentroTrabajoController::class);

Route::get('{CIF_EMPRESA}/centro-trabajo/create/', [CentroTrabajoController::class, 'create'])->name('centro-trabajo.create');

Route::resource('tutor-docente', TutorDocenteController::class);

Route::get('cuadernoDocenteCreate', [TutorDocenteController::class, 'cuadernoDocenteCreate'])->name('tutor-docente.cuadernoDocenteCreate');

Route::post('customStore', [TutorDocenteController::class, 'customStore'])->name('tutor-docente.customStore');

Route::resource('cuaderno-tutor', CuadernoTutorController::class);

Route::get('/cuaderno-tutor/download/{id}', [CuadernoTutorController::class, 'download'])->name('cuaderno-tutor.download');

Route::resource('visita', VisitaController::class);

Route::get('cuaderno-tutor/{Id_cuaderno}/visita/create', [VisitaController::class, 'create'])->name('visita.create');

Route::get('cuaderno-tutor/{Id_cuaderno}/visita', [VisitaController::class, 'index'])->name('visita.index');

Route::get('cuaderno-tutor/{cuaderno_tutor_id}/alumno/create', 'VisitaController@create');

Route::resource('tutor-laboral', TutorLaboralController::class);

Route::resource('cuestionario-empresa', CuestionarioEmpresaController::class);

Route::resource('evaluacion-quincenal', EvaluacionQuincenalController::class);

Route::resource('valoracion-alumno', ValoracionAlumnoController::class);

Route::resource('valoracion-final-tutor-docente', ValoracionFinalTutorDocenteController::class);

Route::resource('valoracion-final-tutor-laboral', ValoracionFinalTutorLaboralController::class);

Auth::routes();