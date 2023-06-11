@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('template_title')
{{ $cuadernoTutor->name ?? "{{ __('Show') Cuaderno Tutor" }}
@endsection

@section('content')
<section class="content container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="mb-1 d-flex justify-content-between align-items-center">
                        <span class="fs-5 fw-bold">DATOS CUADERNO TUTOR</span>
                        <a href="{{ route('cuaderno-tutor.index') }}"
                            class="btn btn-danger d-flex justify-content-center align-items-center gap-1"
                            data-placement="center" style=width:180px>
                            {{ __('Volver') }}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="detail-panel">
                        <div class="d-flex gap-4">
                            <div class="d-flex flex-column my-2">
                                <span class="detail-label">Cif Empresa</span>
                                <span class="custom-input">
                                    <span class="detail-primary">
                                        {{ $cuadernoTutor->CIF_EMPRESA }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-2">
                                <span class="detail-label">Dni Tutor Docente</span>
                                <span class="custom-input">
                                    <span class="detail-primary">
                                        {{ $cuadernoTutor->DNI_tutor_docente }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-2">
                                <span class="detail-label">Trimestre</span>
                                <span class="custom-input">
                                    <span class="detail-primary">
                                        {{ $cuadernoTutor->trimestre }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-2">
                                <span class="detail-label">Ciclo Formativo Curso Actual</span>
                                <span class="custom-input">
                                    <span class="detail-primary">
                                        {{ $cuadernoTutor->ciclo_formativo_curso_actual }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-2">
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
                                        <span>TUTOR DOCENTE</span>
                                        {{ $cuadernoTutor->tutorDocente->Nombre }}
                                        {{ $cuadernoTutor->tutorDocente->DNI }}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body border">
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">DNI</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    {{ $cuadernoTutor->tutorDocente->DNI }}
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Nombre</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    {{ $cuadernoTutor->tutorDocente->Nombre }}
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Primer apellido</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    {{ $cuadernoTutor->tutorDocente->Apellido_1 }}
                                                </span>
                                            </span>
                                        </div>
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
                            <div class="accordion-item border rounded border-0 mb-4">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

                                        <span>EMPRESA</span>
                                        {{ $cuadernoTutor->empresa->Nombre }}
                                        {{ $cuadernoTutor->empresa->CIF }}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body border">
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">CIF</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->CIF }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Domicilio social</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Domicilio_social }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Poblacion</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Poblacion }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Código postal</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Codigo_postal }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Provincia</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Provincia }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Télefono</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Telefono }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Fax</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Fax }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Movil</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Movil }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Titularidad</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Titularidad }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Actividad</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Actividad }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">NIF representante legal</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->NIF_representante_legal }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Nombre representante legal</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Nombre_representante_legal }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Cargo_representante_legal</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Cargo_representante_legal }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Horario apertura</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Horario_apertura }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Horario cierre</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Horario_cierre }}</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Observaciones</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    <span>{{ $cuadernoTutor->empresa->Observaciones }}</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border rounded border-0 mb-4">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        <span>ALUMNOS</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body border">
                                        @foreach ($cuadernoTutor->alumnos as $alumno)
                                        <div class="col-md-12 my-2">
                                            <div class="card" id="card{{ $alumno->DNI }}">
                                                <div class="card-body">
                                                    {{ $alumno->Nombre }} {{ $alumno->Apellidos }}
                                                    {{ $alumno->DNI }}
                                                </div>
                                            </div>
                                        </div>
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
</section>
@endsection