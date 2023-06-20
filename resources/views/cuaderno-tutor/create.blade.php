@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('template_title')
{{ __('Create') }} Cuaderno Tutor
@endsection

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @includeif('partials.errors')

            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title">{{ __('Crear') }} Cuaderno Tutor</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cuaderno-tutor.store') }}" role="form"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @include('cuaderno-tutor.form')

                        <div class="my-3">
                            <div class="d-flex justify-content-between items-center">
                                <h5>Selecciona los alumnos:</h5>
                                <a href="{{ route('alumno.cuadernoAlumnoCreate') }}"
                                    class="btn btn-success d-flex justify-content-center align-items-center"
                                    data-placement="center" style=width:180px>
                                    {{ __('Añadir alumno') }}
                                    <i class="bi bi-plus"></i>
                                </a>
                            </div>
                            <div class="row">
                                @foreach ($alumnos as $alumno)
                                <div class="col-lg-3 my-2">
                                    <div class="card" id="card{{ $alumno->DNI }}">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $alumno->DNI }}" id="alumno{{ $alumno->DNI }}"
                                                    name="alumnos[]" required
                                                    onchange="toggleCardSelected('card{{ $alumno->DNI }}')">
                                                <label class="form-check-label" for="alumno{{ $alumno->DNI }}">
                                                    {{ $alumno->Nombre }} {{ $alumno->Apellidos }} {{ $alumno->DNI }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="invalid-feedback">
                                Por favor selecciona al menos un alumno.
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">{{ __('Crear cuaderno tutor') }}</button>
                        </div>
                    </form>

                    <script>
                    // JavaScript to toggle 'card-selected' class on card when checkbox state changes
                    function toggleCardSelected(cardId) {
                        document.getElementById(cardId).classList.toggle('card-selected');
                    }
                    </script>

                    <script>
                    // JavaScript to disable form submission if there are invalid fields
                    (function() {
                        'use strict'

                        var forms = document.querySelectorAll('.needs-validation')

                        Array.prototype.slice.call(forms)
                            .forEach(function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (!form.checkValidity()) {
                                        event.preventDefault()
                                        event.stopPropagation()
                                    }

                                    form.classList.add('was-validated')
                                }, false)
                            })
                    })()
                    </script>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection