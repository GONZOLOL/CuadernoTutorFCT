@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('template_title')
Centro Trabajo
@endsection

@section('content')
<div class="container d-flex flex-column">

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif


    <div class="mb-1 d-flex justify-content-between">
        <div>
            <h2 class="text-center">{{ __('Centro Trabajo') }}</h2>
        </div>
        <a href="{{ route('centro-trabajo.create', 'CIF_EMPRESA') }}"
            class="btn btn-success d-flex justify-content-center align-items-center" data-placement="center"
            style=width:200px>
            {{ __('Añadir centro de trabajo') }}
            <i class="bi bi-plus"></i>
        </a>
    </div>
    <div class="accordion" id="accordionExample" style="max-width:1080px; margin-top: 40px;">
        @foreach ($centroTrabajo as $centroTrabajo)
        <div class="accordion-item border rounded border-0 mb-4 position-relative">
            <h2 class="accordion-header">
                <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse{{ $centroTrabajo->id }}" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapse{{ $centroTrabajo->id }}">
                    {{ $centroTrabajo->CIF_EMPRESA }}
                    {{ $centroTrabajo->Denominacion }}
                </button>
            </h2>

            <div id="panelsStayOpen-collapse{{ $centroTrabajo->id }}" class="accordion-collapse collapse">
                <div class="accordion-body border">
                    <div class="detail-panel">
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Denominacion</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $centroTrabajo->Denominacion }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Domicilio</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $centroTrabajo->Domicilio }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Poblacion</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $centroTrabajo->Poblacion }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Código postal</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $centroTrabajo->Codigo_postal }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Provincia</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{  $centroTrabajo->Provincia }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Distancia</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{  $centroTrabajo->Distancia }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Preferencias alumnado</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{  $centroTrabajo->Preferencias_alumnado }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">CIF empresa</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{  $centroTrabajo->CIF_EMPRESA }}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('centro-trabajo.destroy',$centroTrabajo->id) }}" method="POST" class="options">
                <a class="btn btn-md btn-warning d-flex align-items-center gap-1"
                    href="{{ route('centro-trabajo.edit',$centroTrabajo->id) }}">
                    <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                    <i class="bi bi-pencil-square"></i>
                </a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-md d-flex align-items-center gap-1">
                    <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                    <i class="bi bi-trash-fill"></i>
                </button>
            </form>

        </div>
        @endforeach
    </div>
</div>
@endsection