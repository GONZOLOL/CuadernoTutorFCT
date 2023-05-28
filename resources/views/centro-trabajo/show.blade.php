@extends('layouts.app')

@section('template_title')
    {{ $centroTrabajo->name ?? "{{ __('Show') Centro Trabajo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Centro Trabajo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('centro-trabajo.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Denominacion:</strong>
                            {{ $centroTrabajo->Denominacion }}
                        </div>
                        <div class="form-group">
                            <strong>Domicilio:</strong>
                            {{ $centroTrabajo->Domicilio }}
                        </div>
                        <div class="form-group">
                            <strong>Poblacion:</strong>
                            {{ $centroTrabajo->Poblacion }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Postal:</strong>
                            {{ $centroTrabajo->Codigo_postal }}
                        </div>
                        <div class="form-group">
                            <strong>Provincia:</strong>
                            {{ $centroTrabajo->Provincia }}
                        </div>
                        <div class="form-group">
                            <strong>Distancia:</strong>
                            {{ $centroTrabajo->Distancia }}
                        </div>
                        <div class="form-group">
                            <strong>Preferencias Alumnado:</strong>
                            {{ $centroTrabajo->Preferencias_alumnado }}
                        </div>
                        <div class="form-group">
                            <strong>Cif Empresa:</strong>
                            {{ $centroTrabajo->CIF_EMPRESA }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
