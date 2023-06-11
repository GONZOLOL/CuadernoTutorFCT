@extends('layouts.app')

@section('template_title')
Cuestionario Empresa
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Cuestionario Empresa') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('cuestionario-empresa.create') }}"
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
                                    <th>Sugerencias</th>
                                    <th>Id Cuaderno</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cuestionarioEmpresa as $cuestionarioEmpresa)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $cuestionarioEmpresa->ID }}</td>
                                    <td>{{ $cuestionarioEmpresa->opcion_1 }}</td>
                                    <td>{{ $cuestionarioEmpresa->opcion_2 }}</td>
                                    <td>{{ $cuestionarioEmpresa->opcion_3 }}</td>
                                    <td>{{ $cuestionarioEmpresa->opcion_4 }}</td>
                                    <td>{{ $cuestionarioEmpresa->opcion_5 }}</td>
                                    <td>{{ $cuestionarioEmpresa->opcion_6 }}</td>
                                    <td>{{ $cuestionarioEmpresa->sugerencias }}</td>
                                    <td>{{ $cuestionarioEmpresa->Id_cuaderno }}</td>

                                    <td>
                                        <form
                                            action="{{ route('cuestionario-empresa.destroy',$cuestionarioEmpresa->ID) }}"
                                            method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('cuestionario-empresa.show',$cuestionarioEmpresa->ID) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('cuestionario-empresa.edit',$cuestionarioEmpresa->ID) }}"><i
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
        </div>
    </div>
</div>
@endsection