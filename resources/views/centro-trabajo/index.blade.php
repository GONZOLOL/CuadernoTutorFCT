@extends('layouts.app')

@section('template_title')
Centro Trabajo
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Centro Trabajo') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('centro-trabajo.create') }}" class="btn btn-primary btn-sm float-right"
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

                                    <th>Denominacion</th>
                                    <th>Domicilio</th>
                                    <th>Poblacion</th>
                                    <th>Codigo Postal</th>
                                    <th>Provincia</th>
                                    <th>Distancia</th>
                                    <th>Preferencias Alumnado</th>
                                    <th>Cif Empresa</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($centroTrabajo as $centroTrabajo)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $centroTrabajo->Denominacion }}</td>
                                    <td>{{ $centroTrabajo->Domicilio }}</td>
                                    <td>{{ $centroTrabajo->Poblacion }}</td>
                                    <td>{{ $centroTrabajo->Codigo_postal }}</td>
                                    <td>{{ $centroTrabajo->Provincia }}</td>
                                    <td>{{ $centroTrabajo->Distancia }}</td>
                                    <td>{{ $centroTrabajo->Preferencias_alumnado }}</td>
                                    <td>{{ $centroTrabajo->CIF_EMPRESA }}</td>

                                    <td>
                                        <form action="{{ route('centro-trabajo.destroy',$centroTrabajo->id) }}"
                                            method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('centro-trabajo.show',$centroTrabajo->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('centro-trabajo.edit',$centroTrabajo->id) }}"><i
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
            {!! $centroTrabajo->links() !!}
        </div>
    </div>
</div>
@endsection