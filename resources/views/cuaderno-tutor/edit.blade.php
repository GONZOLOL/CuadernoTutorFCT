@extends('layouts.app')

@section('template_title')
{{ __('Update') }} Cuaderno Tutor
@endsection

@section('content')
<section class="content container">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Update') }} Cuaderno Tutor</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cuaderno-tutor.update', $cuadernoTutor->Id_cuaderno) }}"
                        role="form" enctype="multipart/form-data" class="needs-validation" novalidate>
                        {{ method_field('PATCH') }}
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
                                                    onchange="toggleCardSelected('card{{ $alumno->DNI }}')"
                                                    {{ in_array($alumno->DNI, old('alumnos', $cuadernoTutor->alumnos->pluck('DNI')->toArray())) ? 'checked' : '' }}>
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
                            <button type="submit" class="btn btn-primary">{{ __('Update cuaderno tutor') }}</button>
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
</section>
@endsection