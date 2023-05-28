@extends('layouts.app')

@section('template_title')
    Visita
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('visita') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('visita.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Fecha</th>
										<th>Incidencia</th>
										<th>Observaciones</th>
										<th>Núm visita Previstas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visita as $visita)
                                        <tr>
											<td>{{ $visita->Fecha }}</td>
											<td>{{ $visita->Incidencia }}</td>
											<td>{{ $visita->Observaciones }}</td>
											<td>{{ $visita->Núm_visitas_previstas }}</td>

                                            <td>
                                                <form action="{{ route('visita.destroy',$visita->Id_visita) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('visita.show',$visita->Id_visita) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('visita.edit',$visita->Id_visita) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    
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
