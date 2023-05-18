@extends('layouts.app')

@section('template_title')
{{ $cuadernoTutor->name ?? "{{ __('Show') Cuaderno Tutor" }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Cuaderno Tutor</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('cuaderno-tutor.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>Trimestre:</strong>
                        {{ $cuadernoTutor->trimestre }}
                    </div>
                    <div class="form-group">
                        <strong>Ciclo Formativo Curso Actual:</strong>
                        {{ $cuadernoTutor->ciclo_formativo_curso_actual }}
                    </div>
                    <div class="form-group">
                        <strong>Plan Formativo:</strong>
                        {{ $cuadernoTutor->plan_formativo }}
                    </div>
                    <div class="form-group">
                        <strong>Cif Empresa:</strong>
                        {{ $cuadernoTutor->CIF_EMPRESA }}
                    </div>
                    <div class="form-group">
                        <strong>Dni Tutor Docente:</strong>
                        {{ $cuadernoTutor->DNI_tutor_docente }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection