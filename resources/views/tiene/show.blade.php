@extends('layouts.app')

@section('template_title')
    {{ $tiene->name ?? "{{ __('Show') Tiene" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tiene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tienes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Dni Alumno:</strong>
                            {{ $tiene->DNI_alumno }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cuaderno:</strong>
                            {{ $tiene->Id_cuaderno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
