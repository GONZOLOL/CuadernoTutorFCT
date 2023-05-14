@extends('layouts.app')

@section('template_title')
Cuaderno Tutor
@endsection

@section('content')
<div class="float-right">
    <a href="{{ route('cuaderno-tutor.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
        {{ __('Create New') }}
    </a>
</div>
<div class="container-fluid">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="accordion" id="accordionExample">
        @foreach ($cuadernoTutor as $cuadernoTutor)

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Cuaderno tutor FCT {{ $cuadernoTutor->ciclo_formativo_curso_actual }} |
                    {{ $cuadernoTutor->DNI_tutor_docente }}
                    {{ $cuadernoTutor->CIF_EMPRESA }}
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
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