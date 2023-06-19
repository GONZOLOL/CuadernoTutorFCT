@extends('layouts.app')

@section('template_title')
Visita
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Registro de visitas') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('visita.create', ['cuadernoTutor_Id' => $cuadernoTutorId]) }}"
                                class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear visita') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Nº visita</th>
                                    <th>Fecha</th>
                                    <th>Incidencia</th>
                                    <th>Observaciones</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1; // Inicializar la variable $i a 1
                                @endphp
                                @foreach ($visita as $visita)
                                <tr>
                                    <td>{{ $visita->num_visita }}</td>
                                    <td>{{ $visita->Fecha }}</td>
                                    <td>{{ $visita->Incidencia }}</td>
                                    <td>{{ $visita->Observaciones }}</td>

                                    <td>
                                        <form action="{{ route('visita.destroy',$visita->Id_visita) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i>
                                                {{ __('Delete') }}</button>
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