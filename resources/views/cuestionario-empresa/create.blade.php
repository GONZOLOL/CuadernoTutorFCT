@extends('layouts.app')

@section('template_title')
{{ __('Create') }} Cuestionario Empresa
@endsection

@section('content')
<section class="content container">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Create') }} Cuestionario Empresa</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cuestionario-empresa.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('cuestionario-empresa.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection