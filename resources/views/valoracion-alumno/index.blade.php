@extends('layouts.app')

@section('template_title')
Valoracion Alumno
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Valoracion Alumno') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('valoracion-alumno.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
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
                                    <th>Aspectos Mejorables</th>
                                    <th>Id Cuaderno</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($valoracionAlumno as $valoracionAlumno)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $valoracionAlumno->ID }}</td>
                                    <td>{{ $valoracionAlumno->opcion_1 }}</td>
                                    <td>{{ $valoracionAlumno->opcion_2 }}</td>
                                    <td>{{ $valoracionAlumno->opcion_3 }}</td>
                                    <td>{{ $valoracionAlumno->opcion_4 }}</td>
                                    <td>{{ $valoracionAlumno->opcion_5 }}</td>
                                    <td>{{ $valoracionAlumno->opcion_6 }}</td>
                                    <td>{{ $valoracionAlumno->opción_7 }}</td>
                                    <td>{{ $valoracionAlumno->opción_8 }}</td>
                                    <td>{{ $valoracionAlumno->aspectos_destacables }}</td>
                                    <td>{{ $valoracionAlumno->aspectos_mejorables }}</td>
                                    <td>{{ $valoracionAlumno->Id_cuaderno }}</td>

                                    <td>
                                        <form action="{{ route('valoracion-alumno.destroy',$valoracionAlumno->id) }}"
                                            method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('valoracion-alumno.show',$valoracionAlumno->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('valoracion-alumno.edit',$valoracionAlumno->id) }}"><i
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
            {!! $valoracionAlumno->links() !!}
        </div>
    </div>
</div>
@endsection