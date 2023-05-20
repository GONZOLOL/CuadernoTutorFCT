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
                <div class="card-header">
                    <div class="mb-1 d-flex justify-content-between">
                        <div>
                            <h2 class="text-center">Cuaderno Tutor</h1>
                        </div>
                        <a href="{{ route('cuaderno-tutor.index') }}"
                            class="btn btn-success d-flex justify-content-center align-items-center gap-1"
                            data-placement="center" style=width:180px>
                            {{ __('Volver') }}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="detail-panel">
                        <div class="d-flex justify-content-center gap-5">
                            <div class="d-flex flex-column my-2">
                                <span class="detail-label">Trimestre</span>
                                <span class="custom-input">
                                    <span class="detail-info">
                                        {{ $cuadernoTutor->trimestre }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-2">
                                <span class="detail-label">Ciclo Formativo Curso Actual</span>
                                <span class="custom-input">
                                    <span class="detail-info">
                                        {{ $cuadernoTutor->ciclo_formativo_curso_actual }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-2">
                                <span class="detail-label">Plan Formativo</span>
                                <span class="custom-input">
                                    <span class="detail-info">
                                        {{ $cuadernoTutor->plan_formativo }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <div class="d-flex flex-column my-2">
                                <span class="detail-label">Cif Empresa</span>
                                <span class="custom-input">
                                    <span class="detail-info">
                                        {{ $cuadernoTutor->CIF_EMPRESA }}
                                    </span>
                                </span>
                            </div>
                            <div class="d-flex flex-column my-2">
                                <span class="detail-label">Dni Tutor Docente</span>
                                <span class="custom-input">
                                    <span class="detail-info">
                                        {{ $cuadernoTutor->DNI_tutor_docente }}
                                    </span>
                                </span>
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