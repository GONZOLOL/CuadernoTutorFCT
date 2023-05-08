@extends('layouts.app')

@section('template_title')
    Alumno
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alumno') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('alumno.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Dni</th>
										<th>Apellidos</th>
										<th>Nombre</th>
										<th>Domicilio</th>
										<th>Población</th>
										<th>Codigo Postal</th>
										<th>Provincia</th>
										<th>Fecha Nacimiento</th>
										<th>Edad</th>
										<th>Teléfono</th>
										<th>Email</th>
										<th>Género</th>
										<th>Nombre Padre</th>
										<th>Observaciones</th>
										<th>Tipo Empresa Fct</th>
										<th>Solicita Beca</th>
										<th>Cuenta Bancaria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumno as $alumno)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $alumno->DNI }}</td>
											<td>{{ $alumno->Apellidos }}</td>
											<td>{{ $alumno->Nombre }}</td>
											<td>{{ $alumno->Domicilio }}</td>
											<td>{{ $alumno->Población }}</td>
											<td>{{ $alumno->Codigo_postal }}</td>
											<td>{{ $alumno->Provincia }}</td>
											<td>{{ $alumno->Fecha_nacimiento }}</td>
											<td>{{ $alumno->Edad }}</td>
											<td>{{ $alumno->Teléfono }}</td>
											<td>{{ $alumno->Email }}</td>
											<td>{{ $alumno->Género }}</td>
											<td>{{ $alumno->Nombre_padre }}</td>
											<td>{{ $alumno->Observaciones }}</td>
											<td>{{ $alumno->Tipo_empresa_FCT }}</td>
											<td>{{ $alumno->Solicita_beca }}</td>
											<td>{{ $alumno->Cuenta_bancaria }}</td>

                                            <td>
                                                <form action="{{ route('alumno.destroy',$alumno->DNI) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('alumno.show',$alumno->DNI) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('alumno.edit',$alumno->DNI) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
