@extends('layouts.app')

@section('template_title')
Valoracion Final Tutor Docente
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Valoracion Final Tutor Docente') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('valoracion-final-tutor-docente.create') }}"
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
                                    <th>Opción 8</th>
                                    <th>Aspectos Destacables</th>
                                    <th>Evaluación Final</th>
                                    <th>Aspectos Mejorables</th>
                                    <th>Id Cuaderno</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($valoracionFinalTutorDocente as $valoracionFinalTutorDocente)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $valoracionFinalTutorDocente->ID }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->opcion_1 }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->opcion_2 }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->opcion_3 }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->opcion_4 }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->opcion_5 }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->opcion_6 }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->opción_7 }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->opción_8 }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->aspectos_destacables }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->evaluación_final }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->aspectos_mejorables }}</td>
                                    <td>{{ $valoracionFinalTutorDocente->Id_cuaderno }}</td>

                                    <td>
                                        <form
                                            action="{{ route('valoracion-final-tutor-docente.destroy',$valoracionFinalTutorDocente->id) }}"
                                            method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('valoracion-final-tutor-docente.show',$valoracionFinalTutorDocente->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('valoracion-final-tutor-docente.edit',$valoracionFinalTutorDocente->id) }}"><i
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
            {!! $valoracionFinalTutorDocente->links() !!}
        </div>
    </div>
</div>
@endsection