@extends('layouts.app')

@section('template_title')
    {{ $visita->name ?? "{{ __('Show') Visita" }} }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Visita</span>
                        </div>
                        <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('visita.index', $visita->Id_cuaderno) }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $visita->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Incidencia:</strong>
                            {{ $visita->Incidencia }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $visita->Observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Núm visita Previstas:</strong>
                            {{ $visita->Núm_visitas_previstas }}
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
