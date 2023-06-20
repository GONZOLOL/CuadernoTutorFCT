@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('template_title')
Tutor Laboral
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
            <h2 class="text-center">Tutores Laborales</h2>
        </div>
        <a href="{{ route('tutor-laboral.create') }}"
            class="btn btn-success d-flex justify-content-center align-items-center" data-placement="center"
            style=width:180px>
            {{ __('Añadir tutor laboral') }}
            <i class="bi bi-plus"></i>
        </a>
    </div>
    <div class="accordion" id="accordionExample" style="max-width:1100px; margin-top: 40px;">
        @foreach ($tutorLaboral as $tutor)
        <div class="accordion-item border rounded mb-2 position-relative">
            <h2 class="accordion-header">
                <button class="accordion-button border" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse{{ $tutor->DNI }}" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapse{{ $tutor->DNI }}">
                    {{ $tutor->Nombre }}
                    {{ $tutor->Apellidos }}
                    <strong class="ms-3">{{ $tutor->DNI }}</strong>
                </button>
            </h2>

            <div id="panelsStayOpen-collapse{{ $tutor->DNI }}" class="accordion-collapse collapse">
                <div class="accordion-body border">
                    <div class="detail-panel">
                        <div class="row">
                            <div class="col-12 col-md-6 my-2">
                                <span class="detail-label mx-3">DNI</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $tutor->DNI }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-6 my-2">
                                <span class="detail-label mx-3">Nombre</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $tutor->Nombre }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-6 my-2">
                                <span class="detail-label mx-3">Apellidos</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $tutor->Apellidos }}
                                    </span>
                                </span>
                            </div>
                            <div class="col-12 col-md-6 my-2">
                                <span class="detail-label mx-3">id_centro</span>
                                <span class="detail-input">
                                    <span class="detail-value">
                                        {{ $tutor->id_centro }}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('tutor-laboral.destroy', $tutor->DNI) }}" method="POST" class="options">
                <a href="{{ route('tutor-laboral.edit', $tutor->DNI) }}"
                    class=" btn btn-md btn-warning d-flex align-items-center gap-1">
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
    </div>
</div>
@endsection