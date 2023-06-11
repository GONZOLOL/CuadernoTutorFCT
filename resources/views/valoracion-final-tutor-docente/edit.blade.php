@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Valoracion Final Tutor Docente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Valoracion Final Tutor Docente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('valoracion-final-tutor-docente.update', $valoracionFinalTutorDocente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('valoracion-final-tutor-docente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
