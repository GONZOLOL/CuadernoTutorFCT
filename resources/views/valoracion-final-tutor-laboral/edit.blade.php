@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Valoracion Final Tutor Laboral
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Valoracion Final Tutor Laboral</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('valoracion-final-tutor-laboral.update', $valoracionFinalTutorLaboral->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('valoracion-final-tutor-laboral.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
