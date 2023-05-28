@extends('layouts.app')

@section('template_title')
{{ __('Update') }} Centro Trabajo
@endsection

@section('content')
<section class="content container">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Update') }} Centro Trabajo</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('centro-trabajo.update', $centroTrabajo->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('centro-trabajo.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection