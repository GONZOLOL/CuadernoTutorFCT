@extends('layouts.app')

@section('template_title')
    {{ $valoracionAlumno->name ?? "{{ __('Show') Valoracion Alumno" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Valoracion Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('valoracion-alumno.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $valoracionAlumno->ID }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 1:</strong>
                            {{ $valoracionAlumno->opcion_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 2:</strong>
                            {{ $valoracionAlumno->opcion_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 3:</strong>
                            {{ $valoracionAlumno->opcion_3 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 4:</strong>
                            {{ $valoracionAlumno->opcion_4 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 5:</strong>
                            {{ $valoracionAlumno->opcion_5 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 6:</strong>
                            {{ $valoracionAlumno->opcion_6 }}
                        </div>
                        <div class="form-group">
                            <strong>Opción 7:</strong>
                            {{ $valoracionAlumno->opción_7 }}
                        </div>
                        <div class="form-group">
                            <strong>Opción 8:</strong>
                            {{ $valoracionAlumno->opción_8 }}
                        </div>
                        <div class="form-group">
                            <strong>Aspectos Destacables:</strong>
                            {{ $valoracionAlumno->aspectos_destacables }}
                        </div>
                        <div class="form-group">
                            <strong>Aspectos Mejorables:</strong>
                            {{ $valoracionAlumno->aspectos_mejorables }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cuaderno:</strong>
                            {{ $valoracionAlumno->Id_cuaderno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
