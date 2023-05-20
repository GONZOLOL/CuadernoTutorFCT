@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('template_title')
Empresa
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
            <h2 class="text-center">Empresas</h1>
        </div>
        <a href="{{ route('empresa.create') }}"
            class="btn btn-success d-flex justify-content-center align-items-center gap-1" data-placement="center"
            style=width:180px>
            {{ __('Añadir empresa') }}
            <i class="bi bi-plus-lg d-flex align-items-center"></i>
        </a>
    </div>

    <div class="accordion mt-5" id="accordionExample" style="max-width: 1100px">
        @foreach ($empresa as $empresa)

        <div class="accordion-item border rounded border-0 mb-4 position-relative">
            <h2 class="accordion-header">
                <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse{{ $empresa->DNI }}" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapse{{ $empresa->DNI }}">
                    {{ $empresa->Nombre }}
                    <strong class="ms-3">{{ $empresa->CIF }}</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapse{{ $empresa->DNI }}" class="accordion-collapse collapse">
                <div class="accordion-body border">
                    <div class="detail-panel">
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Cif</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->CIF }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Nombre</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Nombre }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Domicilio Social</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Domicilio_social }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Poblacion</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Poblacion }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Codigo Postal</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Codigo_postal }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Provincia</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Provincia }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Telefono</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Telefono }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Fax</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Fax }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Movil</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Movil }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Titularidad</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Titularidad }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Actividad</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Actividad }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Nif Representante Legal</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->NIF_representante_legal }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Nombre Representante Legal</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Nombre_representante_legal }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Cargo Representante Legal</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Cargo_representante_legal }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Horario Apertura</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Horario_apertura }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Horario Cierre</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Horario_cierre }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Observaciones</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $empresa->Observaciones }}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('empresa.destroy', $empresa->CIF) }}" method="POST"
                style="display:flex; gap:10px; position:absolute; top:8px; left:1122px;">
                <a class="btn btn-md btn-warning d-flex align-items-center gap-1"
                    href="{{ route('empresa.edit', $empresa->CIF) }}">
                    <i class="fa fa-fw fa-edit"></i>
                    {{ __('Edit') }}
                    <i class="bi bi-pencil-square"></i>
                </a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-md d-flex align-items-center gap-1">
                    <i class="fa fa-fw fa-trash"></i>
                    {{ __('Delete') }}
                    <i class="bi bi-trash-fill"></i>
                </button>
            </form>
        </div>
        @endforeach
    </div>

    <div class="my-5 d-flex justify-content-end">
        <a href="{{ route('cuaderno-tutor.create') }}" class="btn btn-primary float-end" data-placement="left"
            style="width: 180px">
            {{ __('Siguiente') }}
        </a>
    </div>
</div>
@endsection