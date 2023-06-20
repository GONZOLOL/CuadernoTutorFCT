@extends('layouts.app')

@section('template_title')
Cuestionario Empresa
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
                            {{ __('Valoracion final tutor docente') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('valoracion-final-tutor-docente.create', ['cuadernoTutor_Id' => $cuadernoTutorId]) }}"
                                class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Añadir valoracion final tutor docente') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @foreach ($valoracionFinalTutorDocente as $valoracionFinalTutorDocente)
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="d-flex gap-3 border border-black p-2 px-3 bg-primary rounded text-white">
                            <span>Alumno:</span>
                            <span>
                                {{ $valoracionFinalTutorDocente->alumno->Nombre }}
                                {{ $valoracionFinalTutorDocente->alumno->Apellidos }}
                            </span>
                        </div>
                        <div class="ms-auto">
                            <form
                                action="{{ route('valoracion-final-tutor-docente.destroy',$valoracionFinalTutorDocente->ID) }}"
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
                                    <td>5</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>1</td>
                                </tr>

                                <tr>
                                    <td>Posibilidades formativas que ofrece la empresa</td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_1 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_1 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_1 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_1 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_1 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Cumplimiento del programa formativo por parte de la empresa
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_2 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_2 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_2 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_2 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_2 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Seguimiento del alumno realizado por el tutor/a del centro de trabajo
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_3 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_3 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_3 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_3 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_3 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Apoyo dado al profesor/a responsable del seguimiento.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_4 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_4 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_4 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_4 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_4 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Posibilidades laborales que ofrece la empresa al alumnado que finalice la
                                        fase de formación en centros de trabajo.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_5 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_5 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_5 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_5 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_5 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Calidad de los informes del tutor/a del centro de trabajo.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_6 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_6 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_6 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_6 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_6 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nivel de satisfacción mostrado con la empresa por el alumnado que ha
                                        realizado la fase de formación en centros de trabajo en ella.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_7 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_7 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_7 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_7 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_7 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        valoracion general de las prácticas por el profesor/a responsable del
                                        seguimiento.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_8 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_8 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_8 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_8 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionFinalTutorDocente->opcion_8 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Aspectos a mejorar de la fase de formación en centros de trabajo:
                                    </td>
                                    <td colspan="6" class="text-center">
                                        @if (!empty($valoracionFinalTutorDocente->aspectos_mejorables))
                                        {{ $valoracionFinalTutorDocente->aspectos_mejorables }}
                                        @else
                                        No hay aspectos a mejorar
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Aspectos a destacar de la fase de formación en centros de trabajo:
                                    </td>
                                    <td colspan="6" class="text-center">
                                        @if (!empty($valoracionFinalTutorDocente->aspectos_destacables))
                                        {{ $valoracionFinalTutorDocente->aspectos_destacables }}
                                        @else
                                        No hay aspectos a destacar
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end align-items-center mb-4 border border-black ps-4 py-4">
                            <span class="me-auto fs-4">Evaluación final</span>
                            <div class="d-flex me-2 align-items-center justify-content-center" style="width:200px">
                                @if ($valoracionFinalTutorDocente->evaluacion_final == 1)
                                APTO
                                @elseif ($valoracionFinalTutorDocente->evaluacion_final == 2)
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