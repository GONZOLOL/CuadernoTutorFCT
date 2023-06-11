@extends('layouts.app')

@section('template_title')
    {{ $evaluacionQuincenal->name ?? "{{ __('Show') Evaluacion Quincenal" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evaluacion Quincenal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('evaluacion-quincenal.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $evaluacionQuincenal->ID }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cuaderno:</strong>
                            {{ $evaluacionQuincenal->Id_cuaderno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
