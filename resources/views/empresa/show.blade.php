@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? "{{ __('Show') Empresa" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresa.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cif:</strong>
                            {{ $empresa->CIF }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empresa->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Domicilio Social:</strong>
                            {{ $empresa->Domicilio_social }}
                        </div>
                        <div class="form-group">
                            <strong>Poblacion:</strong>
                            {{ $empresa->Poblacion }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Postal:</strong>
                            {{ $empresa->Codigo_postal }}
                        </div>
                        <div class="form-group">
                            <strong>Provincia:</strong>
                            {{ $empresa->Provincia }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empresa->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Fax:</strong>
                            {{ $empresa->Fax }}
                        </div>
                        <div class="form-group">
                            <strong>Movil:</strong>
                            {{ $empresa->Movil }}
                        </div>
                        <div class="form-group">
                            <strong>Titularidad:</strong>
                            {{ $empresa->Titularidad }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            {{ $empresa->Actividad }}
                        </div>
                        <div class="form-group">
                            <strong>Nif Representante Legal:</strong>
                            {{ $empresa->NIF_representante_legal }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Representante Legal:</strong>
                            {{ $empresa->Nombre_representante_legal }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo Representante Legal:</strong>
                            {{ $empresa->Cargo_representante_legal }}
                        </div>
                        <div class="form-group">
                            <strong>Horario Apertura:</strong>
                            {{ $empresa->Horario_apertura }}
                        </div>
                        <div class="form-group">
                            <strong>Horario Cierre:</strong>
                            {{ $empresa->Horario_cierre }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $empresa->Observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
