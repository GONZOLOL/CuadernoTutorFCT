@extends('layouts.app')

@section('template_title')
Cuaderno Tutor
@endsection

@section('content')

<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="float-end mb-3">
        <a href="{{ route('alumno.index') }}" class="btn btn-primary float-end" data-placement="left" style=width:200px>
            {{ __('Crear cuaderno tutor') }}
        </a>
    </div>

    <div class="accordion" id="accordionExample">
        @foreach ($cuadernoTutor as $cuadernoTutor)

        <div class="accordion-item border rounded border-0 mb-4">
            <h2 class="accordion-header">
                <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse{{ $cuadernoTutor->Id_cuaderno }}" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapse{{ $cuadernoTutor->Id_cuaderno }}">
                    Cuaderno tutor FCT
                    {{ $cuadernoTutor->ciclo_formativo_curso_actual }}
                    |
                    {{ $cuadernoTutor->get_tutorDocente_name_surname() }}
                    |
                    {{ $cuadernoTutor->get_empresa_name() }}

                </button>
            </h2>
            <div id="panelsStayOpen-collapse{{ $cuadernoTutor->Id_cuaderno }}" class="accordion-collapse collapse">
                <div class="accordion-body border">
                    <form action="{{ route('cuaderno-tutor.destroy',$cuadernoTutor->Id_cuaderno) }}" method="POST">
                        <a class="btn btn-sm btn-primary "
                            href="{{ route('cuaderno-tutor.show',$cuadernoTutor->Id_cuaderno) }}"><i
                                class="fa fa-fw fa-eye"></i>
                            {{ __('Show') }}</a>
                        <a class="btn btn-sm btn-success"
                            href="{{ route('cuaderno-tutor.edit',$cuadernoTutor->Id_cuaderno) }}"><i
                                class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                            {{ __('Delete') }}</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection