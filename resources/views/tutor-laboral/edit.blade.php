@extends('layouts.app')

@section('template_title')
{{ __('Update') }} Tutor Laboral
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Update') }} Tutor Laboral</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tutor-laboral.update', $tutorLaboral->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('tutor-laboral.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection