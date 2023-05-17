@extends('layouts.app')

@section('template_title')
Alumno
@endsection

@section('content')
<div class="container">

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="float-end mb-3">
        <a href="{{ route('alumno.create') }}" class="btn btn-primary float-end" data-placement="left"
            style=width:200px>
            {{ __('Crear alumno') }}
        </a>
    </div>

    <div class="accordion mt-5" id="accordionExample" style=max-width:1100px>
        @foreach ($alumno as $alumno)

        <div class="accordion-item border rounded border-0 mb-4">
            <h2 class="accordion-header">
                <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse{{ $alumno->DNI }}" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapse{{ $alumno->DNI }}">
                    {{ $alumno->Nombre }}
                    {{ $alumno->Apellidos }}
                    {{ $alumno->DNI }}

                    <div style="display:flex; gap:10px; position:absolute; top:12px; left:1150px;">
                        <a class="btn btn-sm btn-success" href="{{ route('alumno.edit',$alumno->DNI) }}">
                            <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{ route('alumno.destroy',$alumno->DNI) }}">
                            @csrf
                            @method('DELETE')
                            <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                        </a>
                    </div>

                </button>
            </h2>
            <div id="panelsStayOpen-collapse{{ $alumno->DNI }}" class="accordion-collapse collapse">
                <div class="accordion-body border">
                    <div style="display:flex; gap:10px; flex-direction:column; width: 100%; height: 100%;">
                        <div class="d-flex flex-row gap-5 justify-content-between">
                            <div class="d-flex flex-column">
                                <span>Apellidos</span>
                                <span>{{ $alumno->Apellidos }}</span>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Nombre</span>
                                <td>{{ $alumno->Nombre }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Dni</span>
                                <td>{{ $alumno->DNI }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Domicilio</span>
                                <td>{{ $alumno->Domicilio }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Población</span>
                                <td>{{ $alumno->Población }}</td>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-5 justify-content-between">
                            <div class="d-flex flex-column">
                                <span>Codigo postal</span>
                                <td>{{ $alumno->Codigo_postal }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Provincia</span>
                                <td>{{ $alumno->Provincia }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Fecha nacimiento</span>
                                <td>{{ $alumno->Fecha_nacimiento }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Edad</span>
                                <td>{{ $alumno->Edad }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Teléfono</span>
                                <td>{{ $alumno->Teléfono }}</td>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-5 justify-content-between">
                            <div class="d-flex flex-column">
                                <span>Email</span>
                                <td>{{ $alumno->Email }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Género</span>
                                <td>{{ $alumno->Género }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Nombre padre</span>
                                <td>{{ $alumno->Nombre_padre }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Observaciones</span>
                                <td>{{ $alumno->Observaciones }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Tipo empresa fct</span>
                                <td>{{ $alumno->Tipo_empresa_FCT }}</td>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-5 justify-content-between">
                            <div class="d-flex flex-column">
                                <span>Solicita beca</span>
                                <td>{{ $alumno->Solicita_beca }}</td>
                            </div>
                            <div class="d-flex flex-column">
                                <span>Cuenta bancaria</span>
                                <td>{{ $alumno->Cuenta_bancaria }}</td>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection