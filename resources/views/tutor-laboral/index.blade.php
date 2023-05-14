@extends('layouts.app')

@section('template_title')
    Tutor Laboral
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tutor Laboral') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tutor-laborals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Nombre</th>
										<th>Apellidos</th>
										<th>Denominacion Centro</th>
										<th>Cif Empresa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tutorLaborals as $tutorLaboral)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tutorLaboral->DNI }}</td>
											<td>{{ $tutorLaboral->Nombre }}</td>
											<td>{{ $tutorLaboral->Apellidos }}</td>
											<td>{{ $tutorLaboral->Denominacion_centro }}</td>
											<td>{{ $tutorLaboral->CIF_EMPRESA }}</td>

                                            <td>
                                                <form action="{{ route('tutor-laborals.destroy',$tutorLaboral->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tutor-laborals.show',$tutorLaboral->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tutor-laborals.edit',$tutorLaboral->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tutorLaborals->links() !!}
            </div>
        </div>
    </div>
@endsection
