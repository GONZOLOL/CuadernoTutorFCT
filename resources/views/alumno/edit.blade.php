@extends('layouts.app')

@section('template_title')
{{ __('Update') }} Alumno
@endsection

@section('content')
<section class="content container">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <span>Editar alumno</span>
                    <button type="button" class="btn btn-sm btn-danger" style="width:100px"
                        onclick="window.history.back();">{{ __('Volver') }}</button>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('alumno.update', $alumno->DNI) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('alumno.form')

                        <div class="box-footer my-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" style=width:200px>{{ __('Guardar') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection