@extends('layouts.app')

@section('template_title')
{{ __('Create') }} Tutor Docente
@endsection


@section('content')
<section class="content container-sm">
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Añadir datos tutor docente</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tutor-docente.customStore') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('tutor-docente.form')
                        <div class="box-footer mt-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary"
                                style="width:200px">{{ __('Guardar') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection