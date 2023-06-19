@extends('layouts.app')

@section('template_title')
{{ __('Update') }} Tutor Docente
@endsection

@section('content')
<section class="content container">
    <div class="d-flex justify-content-center">
        <div class="col-md-8">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <span>Editar tutor docente</span>
                    <button type="button" class="btn btn-sm btn-danger" style="width:100px"
                        onclick="window.history.back();">{{ __('Volver') }}</button>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tutor-docente.update', $tutorDocente) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('tutor-docente.form')


                        <div class="box-footer mt-4 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success"
                                style=width:200px>{{ __('Actualizar') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection