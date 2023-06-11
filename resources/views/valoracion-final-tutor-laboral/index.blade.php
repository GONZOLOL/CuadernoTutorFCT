@extends('layouts.app')

@section('template_title')
Valoracion Final Tutor Laboral
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Valoracion Final Tutor Laboral') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('valoracion-final-tutor-laboral.create') }}"
                                class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Id</th>
                                    <th>Opcion 1</th>
                                    <th>Opcion 2</th>
                                    <th>Opcion 3</th>
                                    <th>Opcion 4</th>
                                    <th>Opcion 5</th>
                                    <th>Opcion 6</th>
                                    <th>Opción 7</th>
                                    <th>Opcion 5 Detalle</th>
                                    <th>Opcion 6 Detalle</th>
                                    <th>Opción 7 Detalle</th>
                                    <th>Area Trabajo</th>
                                    <th>Sugerencias Programa Formativo</th>
                                    <th>Evaluacion Final</th>
                                    <th>Id Cuaderno</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($valoracionFinalTutorLaboral as $valoracionFinalTutorLaboral)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $valoracionFinalTutorLaboral->ID }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->opcion_1 }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->opcion_2 }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->opcion_3 }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->opcion_4 }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->opcion_5 }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->opcion_6 }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->opción_7 }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->opcion_5_detalle }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->opcion_6_detalle }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->opción_7_detalle }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->area_trabajo }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->sugerencias_programa_formativo }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->evaluacion_final }}</td>
                                    <td>{{ $valoracionFinalTutorLaboral->Id_cuaderno }}</td>

                                    <td>
                                        <form
                                            action="{{ route('valoracion-final-tutor-laboral.destroy',$valoracionFinalTutorLaboral->id) }}"
                                            method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('valoracion-final-tutor-laboral.show',$valoracionFinalTutorLaboral->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('valoracion-final-tutor-laboral.edit',$valoracionFinalTutorLaboral->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $valoracionFinalTutorLaboral->links() !!}
        </div>
    </div>
</div>
@endsection