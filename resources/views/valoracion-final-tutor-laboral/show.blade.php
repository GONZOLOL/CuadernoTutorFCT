@extends('layouts.app')

@section('template_title')
    {{ $valoracionFinalTutorLaboral->name ?? "{{ __('Show') Valoracion Final Tutor Laboral" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Valoracion Final Tutor Laboral</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('valoracion-final-tutor-laboral.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $valoracionFinalTutorLaboral->ID }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 1:</strong>
                            {{ $valoracionFinalTutorLaboral->opcion_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 2:</strong>
                            {{ $valoracionFinalTutorLaboral->opcion_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 3:</strong>
                            {{ $valoracionFinalTutorLaboral->opcion_3 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 4:</strong>
                            {{ $valoracionFinalTutorLaboral->opcion_4 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 5:</strong>
                            {{ $valoracionFinalTutorLaboral->opcion_5 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 6:</strong>
                            {{ $valoracionFinalTutorLaboral->opcion_6 }}
                        </div>
                        <div class="form-group">
                            <strong>Opción 7:</strong>
                            {{ $valoracionFinalTutorLaboral->opción_7 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 5 Detalle:</strong>
                            {{ $valoracionFinalTutorLaboral->opcion_5_detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 6 Detalle:</strong>
                            {{ $valoracionFinalTutorLaboral->opcion_6_detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Opción 7 Detalle:</strong>
                            {{ $valoracionFinalTutorLaboral->opción_7_detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Area Trabajo:</strong>
                            {{ $valoracionFinalTutorLaboral->area_trabajo }}
                        </div>
                        <div class="form-group">
                            <strong>Sugerencias Programa Formativo:</strong>
                            {{ $valoracionFinalTutorLaboral->sugerencias_programa_formativo }}
                        </div>
                        <div class="form-group">
                            <strong>Evaluacion Final:</strong>
                            {{ $valoracionFinalTutorLaboral->evaluacion_final }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cuaderno:</strong>
                            {{ $valoracionFinalTutorLaboral->Id_cuaderno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
