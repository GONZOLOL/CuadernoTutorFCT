@extends('layouts.app')

@section('template_title')
Crear Empresa
@endsection

@section('content')
<section class="content container">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <span>Crear empresa</span>
                    <button type="button" class="btn btn-sm btn-danger" style="width:100px"
                        onclick="window.history.back();">{{ __('Volver') }}</button>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('empresa.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('empresa.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection