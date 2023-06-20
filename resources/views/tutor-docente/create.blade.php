@extends('layouts.app')

@section('template_title')
{{ __('Create') }} Tutor Docente
@endsection


@section('content')
<section class="content container">
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <span>Añadir datos tutor docente</span>
                    <button type="button" class="btn btn-sm btn-danger" style="width:100px"
                        onclick="window.history.back();">{{ __('Volver') }}</button>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tutor-docente.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('tutor-docente.form')

                        <div class="box-footer mt-4 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success" style=width:200px>{{ __('Guardar') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection