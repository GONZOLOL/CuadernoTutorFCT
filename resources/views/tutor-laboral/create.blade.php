@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('template_title')
{{ __('Create') }} Tutor Laboral
@endsection

@section('content')
<section class="content container">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Create') }} Tutor Laboral</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tutor-laboral.store') }}" role="form"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        @include('tutor-laboral.form')

                        <div class="my-3">
                            <h5>Selecciona los alumnos a los que supervisa:</h5>
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
                                                    {{ $alumno->Nombre }} {{ $alumno->Apellidos }}
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
                            <button type="submit" class="btn btn-primary">{{ __('Crear tutor laboral') }}</button>
                        </div>
                    </form>
                    <script>
                    function toggleCardSelected(cardId) {
                        document.getElementById(cardId).classList.toggle('card-selected');
                    }
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
</section>
@endsection