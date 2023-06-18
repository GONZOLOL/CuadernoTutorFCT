@extends('layouts.app')

@section('template_title')
Valoración final tutor laboral
@endsection

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Valoracion final tutor laboral') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ route('valoracion-final-tutor-laboral.create', ['cuadernoTutor_Id' => $cuadernoTutorId]) }}"
                                class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Añadir valoracion final tutor laboral') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @foreach ($valoracionFinalTutorLaboral as $valoracionFinalTutorLaboral)
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="d-flex gap-3 border border-black p-2 px-3 bg-primary rounded text-white">
                            <span>Alumno:</span>
                            <span>
                                {{ $valoracionFinalTutorLaboral->alumno->Nombre }}
                                {{ $valoracionFinalTutorLaboral->alumno->Apellidos }}
                            </span>
                        </div>
                        <div class="ms-auto">
                            <form action="{{ route('cuestionario-empresa.destroy',$valoracionFinalTutorLaboral->ID) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-md"><i class="fa fa-fw fa-trash"></i>
                                    {{ __('Delete') }}</button>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead text-center">
                                <tr>
                                    <th></th>
                                    <th colspan="5">Centro de trabajo:</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="text-center">
                                    <td></td>
                                    <td>Negativa</td>
                                    <td>Positiva</td>
                                    <td>Excelente</td>
                                </tr>

                                <tr>
                                    <td>Competencias profesionales.</td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_1 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_1 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_1 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Competencias organizativas.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_2 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_2 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_2 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Competencias relacionales.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_3 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_3 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_3 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Capacidad de respuesta a las contingencias.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_4 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_4 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_4 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Otro aspecto 1.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_5 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_5 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_5 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Otro aspecto 2.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_6 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_6 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_6 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Otro aspecto 3.</td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_7 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_7 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorLaboral->opcion_7 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Otros aspectos detalle el otro aspecto 1:
                                    </td>
                                    <td colspan="6" class="text-center">
                                        @if (!empty($valoracionFinalTutorLaboral->opcion_5_detalle))
                                        {{ $valoracionFinalTutorLaboral->opcion_5_detalle }}
                                        @else
                                        No hay detalles
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Otros aspectos detalle el otro aspecto 2:
                                    </td>
                                    <td colspan="6" class="text-center">
                                        @if (!empty($valoracionFinalTutorLaboral->opcion_6_detalle))
                                        {{ $valoracionFinalTutorLaboral->opcion_6_detalle }}
                                        @else
                                        No hay detalles
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Otros aspectos detalle el otro aspecto 3:
                                    </td>
                                    <td colspan="6" class="text-center">
                                        @if (!empty($valoracionFinalTutorLaboral->opcion_7_detalle))
                                        {{ $valoracionFinalTutorLaboral->opcion_7_detalle }}
                                        @else
                                        No hay detalles
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Áreas y puestos de trabajo donde ha desarrollado las actividades formativas:
                                    </td>
                                    <td colspan="6" class="text-center">
                                        @if (!empty($valoracionFinalTutorLaboral->area_trabajo))
                                        {{ $valoracionFinalTutorLaboral->area_trabajo }}
                                        @else
                                        No hay aspectos a mejorar
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Modificaciones a introducir en el programa formativo
                                    </td>
                                    <td colspan="6" class="text-center">
                                        @if (!empty($valoracionFinalTutorLaboral->sugerencias_programa_formativo))
                                        {{ $valoracionFinalTutorLaboral->sugerencias_programa_formativo }}
                                        @else
                                        No hay aspectos a destacar
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end align-items-center mb-4 border border-black ps-4 py-4">
                            <span class="me-auto fs-4">Evaluación global</span>
                            <div class="d-flex me-2 align-items-center justify-content-center" style="width:350px">
                                @if ($valoracionFinalTutorLaboral->evaluacion_final == 1)
                                APTO
                                @elseif ($valoracionFinalTutorLaboral->evaluacion_final == 2)
                                NO APTO
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection