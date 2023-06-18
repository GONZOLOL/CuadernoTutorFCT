@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('template_title')
{{ $cuadernoTutor->name ?? __("Show Cuaderno Tutor") }}
@endsection

@section('content')
<section class="content container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="mb-1 d-flex align-items-center">
                        <span class="fs-5 fw-bold">DATOS CUADERNO TUTOR</span>

                        <a href="{{ route('cuaderno-tutor.index') }}"
                            class="btn btn-danger d-flex justify-content-center align-items-center gap-1 ms-auto"
                            data-placement="center" style=width:180px>
                            {{ __('Volver') }}
                        </a>
                    </div>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3 py-3 border-top border-white">
                    <div class="container-fluid">
                        <!-- Botón para colapsar el navbar en dispositivos móviles -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Contenido del navbar -->
                        <div class="collapse navbar-collapse flex justify-content-center" id="navbarNav">
                            <ul class="navbar-nav justify-content-between gap-4">
                                <li class="nav-item">
                                    <a class="nav-link fw-bolder bg-white rounded px-4"
                                        href="{{ route('cuestionario-empresa.index', ['cuadernoTutor_Id' => $cuadernoTutorId]) }}">
                                        Cuestionario Empresa
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bolder bg-white rounded px-4"
                                        href="{{ route('valoracion-alumno.index', ['cuadernoTutor_Id' => $cuadernoTutorId]) }}">Valoración
                                        alumno</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link fw-bolder bg-white rounded px-4"
                                        href="{{ route('valoracion-final-tutor-docente.index', ['cuadernoTutor_Id' => $cuadernoTutorId]) }}">Valoración
                                        final tutor docente</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bolder bg-white rounded px-4"
                                        href="{{ route('valoracion-final-tutor-laboral.index', ['cuadernoTutor_Id' => $cuadernoTutorId]) }}">Valoración
                                        final tutor laboral</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="card-body pt-0">
                    <div class="detail-panel">
                        <div class="d-flex justify-content-center gap-5">
                            <div class="d-flex flex-column my-4">
                                <span class="detail-label">Cif Empresa</span>
                                <span class="custom-input">
                                    <span class="detail-primary">
                                        {{ $cuadernoTutor->CIF_EMPRESA }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-4">
                                <span class="detail-label">Dni Tutor Docente</span>
                                <span class="custom-input">
                                    <span class="detail-primary">
                                        {{ $cuadernoTutor->DNI_tutor_docente }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-4">
                                <span class="detail-label">Trimestre</span>
                                <span class="custom-input">
                                    <span class="detail-primary">
                                        {{ $cuadernoTutor->trimestre }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-4">
                                <span class="detail-label">Ciclo Formativo Curso Actual</span>
                                <span class="custom-input">
                                    <span class="detail-primary">
                                        {{ $cuadernoTutor->ciclo_formativo_curso_actual }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-4">
                                <span class="detail-label">Plan Formativo</span>
                                <span class="custom-input">
                                    <span class="detail-primary">
                                        {{ $cuadernoTutor->plan_formativo }}
                                    </span>
                                </span>
                                <a href="{{ route('cuaderno-tutor.download', $cuadernoTutor->Id_cuaderno) }}">Descargar
                                    archivo de plan
                                    formativo</a>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border rounded border-0 mb-4">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="me-2">TUTOR DOCENTE</span>
                                        {{ $cuadernoTutor->tutorDocente->Nombre }}
                                        {{ $cuadernoTutor->tutorDocente->DNI }}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body border">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">DNI</span>
                                                    <span class="custom-input">
                                                        <span class="detail-primary">
                                                            {{ $cuadernoTutor->tutorDocente->DNI }}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Primer apellido</span>
                                                    <span class="custom-input">
                                                        <span class="detail-primary">
                                                            {{ $cuadernoTutor->tutorDocente->Apellido_1 }}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Nombre</span>
                                                    <span class="custom-input">
                                                        <span class="detail-primary">
                                                            {{ $cuadernoTutor->tutorDocente->Nombre }}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Segundo apellido</span>
                                                    <span class="custom-input">
                                                        <span class="detail-primary">
                                                            {{ $cuadernoTutor->tutorDocente->Apellido_2 }}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="accordion-item border rounded border-0 mb-4">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

                                        <span class="me-2">EMPRESA</span>
                                        {{ $cuadernoTutor->empresa->Nombre }}
                                        {{ $cuadernoTutor->empresa->CIF }}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body border">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">CIF</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->CIF }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Domicilio social</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Domicilio_social }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Poblacion</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Poblacion }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Código postal</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Codigo_postal }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Provincia</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Provincia }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Teléfono</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Telefono }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Fax</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Fax }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Movil</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Movil }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Titularidad</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Titularidad }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Actividad</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Actividad }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">NIF representante legal</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->NIF_representante_legal }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Nombre representante legal</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Nombre_representante_legal }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Cargo representante legal</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Cargo_representante_legal }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Horario apertura</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Horario_apertura }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Horario cierre</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Horario_cierre }}</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-2">
                                                    <span class="detail-label">Observaciones</span>
                                                    <span class="custom-input">
                                                        <span
                                                            class="detail-primary">{{ $cuadernoTutor->empresa->Observaciones }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border rounded border-0 mb-4">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        <span class="me-2">ALUMNOS</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body border">
                                        <div class="row">
                                            @foreach ($cuadernoTutor->alumnos as $alumno)
                                            <div class="col-md-3 my-2">
                                                <div class="card" id="card{{ $alumno->DNI }}">
                                                    <div class="card-body">
                                                        {{ $alumno->Nombre }} {{ $alumno->Apellidos }}
                                                        {{ $alumno->DNI }}
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($loop->iteration % 4 == 0)
                                        </div>
                                        <div class="row">
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection