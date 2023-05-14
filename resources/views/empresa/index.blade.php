@extends('layouts.app')

@section('template_title')
Empresa
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Empresa') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('empresa.create') }}" class="btn btn-primary btn-sm float-right"
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

                                    <th>Cif</th>
                                    <th>Nombre</th>
                                    <th>Domicilio Social</th>
                                    <th>Poblacion</th>
                                    <th>Codigo Postal</th>
                                    <th>Provincia</th>
                                    <th>Telefono</th>
                                    <th>Fax</th>
                                    <th>Movil</th>
                                    <th>Titularidad</th>
                                    <th>Actividad</th>
                                    <th>Nif Representante Legal</th>
                                    <th>Nombre Representante Legal</th>
                                    <th>Cargo Representante Legal</th>
                                    <th>Horario Apertura</th>
                                    <th>Horario Cierre</th>
                                    <th>Observaciones</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empresa as $empresa)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $empresa->CIF }}</td>
                                    <td>{{ $empresa->Nombre }}</td>
                                    <td>{{ $empresa->Domicilio_social }}</td>
                                    <td>{{ $empresa->Poblacion }}</td>
                                    <td>{{ $empresa->Codigo_postal }}</td>
                                    <td>{{ $empresa->Provincia }}</td>
                                    <td>{{ $empresa->Telefono }}</td>
                                    <td>{{ $empresa->Fax }}</td>
                                    <td>{{ $empresa->Movil }}</td>
                                    <td>{{ $empresa->Titularidad }}</td>
                                    <td>{{ $empresa->Actividad }}</td>
                                    <td>{{ $empresa->NIF_representante_legal }}</td>
                                    <td>{{ $empresa->Nombre_representante_legal }}</td>
                                    <td>{{ $empresa->Cargo_representante_legal }}</td>
                                    <td>{{ $empresa->Horario_apertura }}</td>
                                    <td>{{ $empresa->Horario_cierre }}</td>
                                    <td>{{ $empresa->Observaciones }}</td>

                                    <td>
                                        <form action="{{ route('empresa.destroy',$empresa->CIF) }}" method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('empresa.show',$empresa->CIF) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('empresa.edit',$empresa->CIF) }}"><i
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