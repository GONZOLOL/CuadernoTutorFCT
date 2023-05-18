@extends('layouts.app')

@section('template_title')
    {{ $tutorDocente->name ?? "{{ __('Show') Tutor Docente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tutor Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tutor-docente.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $tutorDocente->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido 1:</strong>
                            {{ $tutorDocente->Apellido_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido 2:</strong>
                            {{ $tutorDocente->Apellido_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tutorDocente->Nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
