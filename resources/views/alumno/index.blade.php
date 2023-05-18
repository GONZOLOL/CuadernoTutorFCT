@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('template_title')
Alumno
@endsection

@section('content')
<div class="container position-relative">

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="mb-5 position-absolute" style=" display:flex; gap:10px; position:absolute; top:-80px; left:910px;">
        <a href="{{ route('alumno.create') }}" class="btn btn-primary mb-5" data-placement="left"
            style="width:200px; margin: 0px 200px 2rem 0px">
            {{ __('Añadir alumno') }}
        </a>
    </div>
    <div class="accordion" id="accordionExample" style="max-width:1100px; margin-top: 90px;">
        @foreach ($alumno as $alumno)

        <div class="accordion-item border rounded border-0 mb-4 position-relative">
            <h2 class="accordion-header">
                <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse{{ $alumno->DNI }}" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapse{{ $alumno->DNI }}">
                    {{ $alumno->Nombre }}
                    {{ $alumno->Apellidos }}
                    <strong class="ms-3">{{ $alumno->DNI }}</strong>
                </button>
            </h2>

            <div id="panelsStayOpen-collapse{{ $alumno->DNI }}" class="accordion-collapse collapse">
                <div class="accordion-body border">
                    <div class="detail-panel">
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Apellidos</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Apellidos }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Nombre</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Nombre }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Dni</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->DNI }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Domicilio</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Domicilio }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Población</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Población }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Codigo postal</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Codigo_postal }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Provincia</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Provincia }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Fecha nacimiento</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Fecha_nacimiento }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Edad</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Edad }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Teléfono</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Teléfono }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Email</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Email }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Género</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Género }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Nombre padre</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Nombre_padre }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Observaciones</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Observaciones }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Tipo empresa fct</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Tipo_empresa_FCT }}
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Solicita beca</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Solicita_beca }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-4 my-2">
                                <span class="detail-label mx-3">Cuenta bancaria</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $alumno->Cuenta_bancaria }}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('alumno.destroy',$alumno->DNI) }}" method="POST"
                style="display:flex; gap:10px; position:absolute; top:8px; left:1122px;">
                <div class="btn btn-md btn-success d-flex align-items-center gap-1"
                    href="{{ route('alumno.edit',$alumno->DNI) }}">
                    <i class="fa fa-fw fa-edit"></i>
                    {{ __('Edit') }}
                    <i class="bi bi-pencil-square"></i>
                </div>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-md "><i class="fa fa-fw fa-trash"></i>
                    {{ __('Delete') }}
                    <i class="bi bi-trash-fill"></i>
                </button>
            </form>
            @endforeach
        </div>
    </div>

    <div class="float-end">
        <a href="{{ route('empresa.index') }}" class="btn btn-primary float-end" data-placement="left"
            style="width:200px; margin:80px 0px 40px 200px;">
            {{ __('Siguiente') }}
        </a>
    </div>
</div>
@endsection