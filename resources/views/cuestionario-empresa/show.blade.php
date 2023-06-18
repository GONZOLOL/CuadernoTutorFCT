@extends('layouts.app')

@section('template_title')
    {{ $cuestionarioEmpresa->name ?? "{{ __('Show') Cuestionario Empresa" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cuestionario Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cuestionario-empresa.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $cuestionarioEmpresa->ID }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 1:</strong>
                            {{ $cuestionarioEmpresa->opcion_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 2:</strong>
                            {{ $cuestionarioEmpresa->opcion_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 3:</strong>
                            {{ $cuestionarioEmpresa->opcion_3 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 4:</strong>
                            {{ $cuestionarioEmpresa->opcion_4 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 5:</strong>
                            {{ $cuestionarioEmpresa->opcion_5 }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion 6:</strong>
                            {{ $cuestionarioEmpresa->opcion_6 }}
                        </div>
                        <div class="form-group">
                            <strong>Sugerencias:</strong>
                            {{ $cuestionarioEmpresa->sugerencias }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cuaderno:</strong>
                            {{ $cuestionarioEmpresa->Id_cuaderno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
