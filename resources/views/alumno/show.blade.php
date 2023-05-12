@extends('layouts.app')

@section('template_title')
{{ $alumno->name ?? "{{ __('Show') Alumno" }} }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Alumno</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('alumno.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Dni:</strong>
                        {{ $alumno->DNI }}
                    </div>
                    <div class="form-group">
                        <strong>Apellidos:</strong>
                        {{ $alumno->Apellidos }}
                    </div>
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {{ $alumno->Nombre }}
                    </div>
                    <div class="form-group">
                        <strong>Domicilio:</strong>
                        {{ $alumno->Domicilio }}
                    </div>
                    <div class="form-group">
                        <strong>Población:</strong>
                        {{ $alumno->Población }}
                    </div>
                    <div class="form-group">
                        <strong>Codigo Postal:</strong>
                        {{ $alumno->Codigo_postal }}
                    </div>
                    <div class="form-group">
                        <strong>Provincia:</strong>
                        {{ $alumno->Provincia }}
                    </div>
                    <div class="form-group">
                        <strong>Fecha Nacimiento:</strong>
                        {{ $alumno->Fecha_nacimiento }}
                    </div>
                    <div class="form-group">
                        <strong>Edad:</strong>
                        {{ $alumno->Edad }}
                    </div>
                    <div class="form-group">
                        <strong>Teléfono:</strong>
                        {{ $alumno->Teléfono }}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $alumno->Email }}
                    </div>
                    <div class="form-group">
                        <strong>Género:</strong>
                        {{ $alumno->Género }}
                    </div>
                    <div class="form-group">
                        <strong>Nombre Padre:</strong>
                        {{ $alumno->Nombre_padre }}
                    </div>
                    <div class="form-group">
                        <strong>Observaciones:</strong>
                        {{ $alumno->Observaciones }}
                    </div>
                    <div class="form-group">
                        <strong>Tipo Empresa Fct:</strong>
                        {{ $alumno->Tipo_empresa_FCT }}
                    </div>
                    <div class="form-group">
                        <strong>Solicita Beca:</strong>
                        {{ $alumno->Solicita_beca }}
                    </div>
                    <div class="form-group">
                        <strong>Cuenta Bancaria:</strong>
                        {{ $alumno->Cuenta_bancaria }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection