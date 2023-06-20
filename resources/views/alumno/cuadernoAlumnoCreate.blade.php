@extends('layouts.app')

@section('template_title')
{{ __('Create') }} Alumno
@endsection

@section('content')
<section class="content container">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <span>Crear alumno</span>
                    <button type="button" class="btn btn-sm btn-danger" style="width:100px"
                        onclick="window.history.back();">{{ __('Volver') }}</button>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('alumno.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('alumno.form')

                        <div class="d-flex justify-content-end">
                            <div class="box-footer mt-4 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success" style="width:200px"
                                    onclick="window.history.back();">{{ __('Guardar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection