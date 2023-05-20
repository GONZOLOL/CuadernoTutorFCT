@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection


@section('template_title')
Tutor Docente
@endsection

@section('content')
<div class="container d-flex flex-column">

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="mb-1 d-flex justify-content-between">
        <div>
            <h2 class="text-center">Tutor docente</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Tutor Docente') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('tutor-docente.create') }}" class="btn btn-primary btn-sm float-right"
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
                                    <td>{{ $tutorDocente->DNI }}</td>
                                    <td>{{ $tutorDocente->Apellido_1 }}</td>
                                    <td>{{ $tutorDocente->Apellido_2 }}</td>
                                    <td>{{ $tutorDocente->Nombre }}</td>

                                    <td>
                                        <form action="{{ route('tutor-docente.destroy',$tutorDocente->tutor_docente) }}"
                                            method="POST">
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('tutor-docente.edit',$tutorDocente->tutor_docente) }}"><i
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
            {!! $tutorDocentes->links() !!}
        </div>
    </div>
</div>
@endsection