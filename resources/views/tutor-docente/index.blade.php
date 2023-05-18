@extends('layouts.app')

@section('template_title')
    Tutor Docente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tutor Docente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tutor-docente.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Apellido 1</th>
										<th>Apellido 2</th>
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tutorDocentes as $tutorDocente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tutorDocente->DNI }}</td>
											<td>{{ $tutorDocente->Apellido_1 }}</td>
											<td>{{ $tutorDocente->Apellido_2 }}</td>
											<td>{{ $tutorDocente->Nombre }}</td>

                                            <td>
                                                <form action="{{ route('tutor-docente.destroy',$tutorDocente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tutor-docente.show',$tutorDocente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tutor-docente.edit',$tutorDocente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tutorDocentes->links() !!}
            </div>
        </div>
    </div>
@endsection
