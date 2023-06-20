@extends('layouts.app')

@section('template_title')
{{ __('Crear') }} Centro Trabajo
@endsection

@section('content')
<section class="content container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Crear') }} Centro Trabajo</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('centro-trabajo.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('centro-trabajo.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection