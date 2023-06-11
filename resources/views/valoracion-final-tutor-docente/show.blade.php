@extends('layouts.app')

@section('template_title')
    {{ $valoracionFinalTutorDocente->name ?? "{{ __('Show') Valoracion Final Tutor Docente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Valoracion Final Tutor Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('valoracion-final-tutor-docente.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $valoracionFinalTutorDocente->ID }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 1:</strong>
                            {{ $valoracionFinalTutorDocente->opcion_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 2:</strong>
                            {{ $valoracionFinalTutorDocente->opcion_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 3:</strong>
                            {{ $valoracionFinalTutorDocente->opcion_3 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 4:</strong>
                            {{ $valoracionFinalTutorDocente->opcion_4 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 5:</strong>
                            {{ $valoracionFinalTutorDocente->opcion_5 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 6:</strong>
                            {{ $valoracionFinalTutorDocente->opcion_6 }}
                        </div>
                        <div class="form-group">
                            <strong>Opción 7:</strong>
                            {{ $valoracionFinalTutorDocente->opción_7 }}
                        </div>
                        <div class="form-group">
                            <strong>Opción 8:</strong>
                            {{ $valoracionFinalTutorDocente->opción_8 }}
                        </div>
                        <div class="form-group">
                            <strong>Aspectos Destacables:</strong>
                            {{ $valoracionFinalTutorDocente->aspectos_destacables }}
                        </div>
                        <div class="form-group">
                            <strong>Evaluación Final:</strong>
                            {{ $valoracionFinalTutorDocente->evaluación_final }}
                        </div>
                        <div class="form-group">
                            <strong>Aspectos Mejorables:</strong>
                            {{ $valoracionFinalTutorDocente->aspectos_mejorables }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cuaderno:</strong>
                            {{ $valoracionFinalTutorDocente->Id_cuaderno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
