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
                    <form method="POST" action="{{ route('tutor-docente.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('tutor-docente.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection