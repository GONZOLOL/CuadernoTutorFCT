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
                            {{ __('Valoracion Alumno') }}
                        </span>

                        @if ($valoracionAlumnoCount == 0)
                        <span>No existe ningún cuestionario de empresa</span>
                        <div class="float-right">
                            <a href="{{ route('valoracion-alumno.create', ['cuadernoTutor_Id' => $cuadernoTutorId]) }}"
                                class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Añadir valoracion alumno') }}
                            </a>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            @if ($valoracionAlumnoCount > 0)

                            <thead class="thead text-center">
                                <tr>
                                    <th></th>
                                    <th colspan="5">Centro de trabajo:</th>
                                </tr>
                            </thead>
                            @endif
                            <tbody>
                                @foreach ($valoracionAlumno as $valoracionAlumno)

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
                                            class="{{ $valoracionAlumno->opcion_1 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_1 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_1 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_1 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_1 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Cumplimiento del programa formativo por parte de la empresa
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_2 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_2 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_2 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_2 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_2 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Seguimiento del alumno realizado por el tutor/a del centro de trabajo
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_3 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_3 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_3 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_3 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_3 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Seguimiento hecho por su profesor/a
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_4 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_4 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_4 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_4 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_4 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Posibilidades laborales que ofrece la empresa al alumnado que finalice la
                                        fase de formación en centros de trabajo
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_5 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_5 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_5 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_5 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_5 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Adecuación de la formación recibida en el centro docente con las prácticas
                                        realizadas.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_6 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_6 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_6 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_6 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_6 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Nivel de satisfacción mostrado con la empresa por el alumnado que ha
                                        realizado la fase de formación en centros de trabajo en ella.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_7 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_7 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_7 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_7 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_7 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Valoración general de las prácticas por el profesor/a responsable del
                                        seguimiento.
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_8 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_8 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_8 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_8 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $valoracionAlumno->opcion_8 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Aspectos a mejorar de la fase de formación en centros de trabajo:
                                    </td>
                                    <td colspan="6" class="text-center">
                                        @if (!empty($valoracionAlumno->aspectos_mejorables))
                                        {{ $valoracionAlumno->aspectos_mejorables }}
                                        @else
                                        No hay aspectos a mejorar registrados.
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Aspectos a destacar de la fase de formación en centros de trabajo:
                                    </td>
                                    <td colspan="6" class="text-center">
                                        @if (!empty($valoracionAlumno->aspectos_destacables))
                                        {{ $valoracionAlumno->aspectos_destacables }}
                                        @else
                                        No hay aspectos a destacar registrados.
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <form action="{{ route('valoracion-alumno.destroy',$valoracionAlumno->ID) }}" method="POST"
                            class="d-flex justify-content-center my-3 mx-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-lg"><i class="fa fa-fw fa-trash"></i>
                                {{ __('Delete') }}</button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection