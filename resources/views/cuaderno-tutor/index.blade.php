@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('template_title')
Cuaderno Tutor
@endsection

@section('content')

<div class="container d-flex flex-column">

  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif

  @if (session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
  @endif

  <div class="mb-1 d-flex justify-content-between">
    <div>
      <h2 class="text-center">Cuadernos de tutor</h1>
    </div>
    <a href="{{ route('cuaderno-tutor.create') }}"
      class="btn btn-success d-flex justify-content-center align-items-center gap-1" data-placement="center"
      style=width:200px>
      {{ __('Crear cuaderno tutor') }}
      <i class="bi bi-plus-lg d-flex align-items-center"></i>
    </a>
  </div>

  <div class="accordion mt-5" id="accordionExample" style="max-width: 1000px">
    @if ($cuadernoTutor->count() > 0)
    @foreach ($cuadernoTutor as $cuadernoTutor)

    <div class="accordion-item border rounded border-0 mb-4 position-relative">
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
          <div class="detail-panel">
            <div class="row">
              <div class="col-12 col-md-4 my-2">
                <span class="detail-label mx-3">Tutor docente</span>
                <span class="detail-input">
                  <span class="detail-value">
                    {{ $cuadernoTutor->get_tutorDocente_name_surname() }}
                  </span>
                </span>
              </div>
              <div class="col-12 col-md-4 my-2">
                <span class="detail-label mx-3">Empresa</span>
                <span class="detail-input">
                  <span class="detail-value">
                    {{ $cuadernoTutor->get_empresa_name() }}
                  </span>
                </span>
              </div>
              <div class="col-12 col-md-4 my-2">
                <span class="detail-label mx-3">Trimestre</span>
                <span class="detail-input">
                  <span class="detail-value">
                    {{ $cuadernoTutor->trimestre }}
                  </span>
                </span>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-4 my-2">
                <span class="detail-label mx-3">Ciclo formativo curso actual</span>
                <span class="detail-input">
                  <span class="detail-value">
                    {{ $cuadernoTutor->ciclo_formativo_curso_actual }}
                  </span>
                </span>
              </div>
              <div class="col-12 col-md-8 my-2">
                <span class="detail-label mx-3">Plan formativo</span>
                <span class="detail-input w-80">
                  <span class="detail-value">
                    {{ $cuadernoTutor->plan_formativo }}
                  </span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form action="{{ route('cuaderno-tutor.destroy',$cuadernoTutor->Id_cuaderno) }}" method="POST"
        class="extra-large-options">
        <a class="btn btn-md btn-primary d-flex align-items-center gap-1"
          href="{{ route('cuaderno-tutor.show',$cuadernoTutor->Id_cuaderno) }}">
          <i class="fa fa-fw fa-show">
          </i> {{ __('Show') }}
          <i class="bi bi-eye"></i>
        </a>
        <a class=" btn btn-md btn-warning d-flex align-items-center gap-1"
          href="{{ route('cuaderno-tutor.edit',$cuadernoTutor->Id_cuaderno) }}">
          <i class="fa fa-fw fa-edit"></i>
          {{ __('Edit') }}
          <i class="bi bi-pencil-square"></i>
        </a>

        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-md d-flex align-items-center gap-1">
          <i class="fa fa-fw fa-trash"></i>
          {{ __('Delete') }}
          <i class="bi bi-trash-fill"></i>

        </button>
      </form>
    </div>
    @endforeach
    @else
    <div class="alert alert-info">
      No se ha creado ningún cuaderno. Haz clic en el botón para crear uno.
    </div>
    @endif
  </div>
</div>
@endsection