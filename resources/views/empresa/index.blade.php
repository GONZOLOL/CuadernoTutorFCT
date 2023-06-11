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

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
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
                    data-bs-target="#panelsStayOpen-collapse{{ $empresa->CIF }}" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapse{{ $empresa->CIF }}">
                    {{ $empresa->Nombre }}
                    <strong class="ms-3">{{ $empresa->CIF }}</strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapse{{ $empresa->CIF }}" class="accordion-collapse collapse">
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

                    <div class="mt-4">
                        @foreach ($empresa->centroTrabajo as $centro)
                        <div class="accordion" id="accordionChild">
                            <div class="accordion-item border rounded border-0 mb-4">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>Centro de trabajo |</span>
                                        <span>
                                            {{ $centro->Denominacion }}
                                        </span>
                                        <span>
                                            | Domicilio
                                            {{ $centro->Domicilio }}
                                        </span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionChild">
                                    <div class="accordion-body border">
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Denominacion</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    {{ $centro->Denominacion }}
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Domicilio</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    {{ $centro->Domicilio }}
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Poblacion</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    {{ $centro->Poblacion }}
                                                </span>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column my-2">
                                            <span class="detail-label">Codigó postal</span>
                                            <span class="custom-input">
                                                <span class="detail-primary">
                                                    {{ $centro->Codigo_postal }}
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <form action="{{ route('empresa.destroy', $empresa->CIF) }}" method="POST" class="large-options">
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
            @endforeach
        </div>
    </div>
</div>
<div class="d-flex justify-content-end pt-4">
    <a href="{{ route('cuaderno-tutor.create') }}"
        class="btn btn-primary d-flex justify-content-center align-items-center" data-placement="center"
        style="width: 180px">
        {{ __('Siguiente') }}
    </a>
</div>
@endsection