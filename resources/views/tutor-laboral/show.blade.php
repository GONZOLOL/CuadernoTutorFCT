@extends('layouts.app')

@section('template_title')
    {{ $tutorLaboral->name ?? "{{ __('Show') Tutor Laboral" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tutor Laboral</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tutor-laborals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $tutorLaboral->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tutorLaboral->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $tutorLaboral->Apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Denominacion Centro:</strong>
                            {{ $tutorLaboral->Denominacion_centro }}
                        </div>
                        <div class="form-group">
                            <strong>Cif Empresa:</strong>
                            {{ $tutorLaboral->CIF_EMPRESA }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
