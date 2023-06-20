@extends('layouts.app')

@section('head')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

@section('template_title')
{{ __('Create') }} Tutor Laboral
@endsection

@section('content')
<section class="content container">
  <div class="row">
    <div class="col-md-12">

      @includeif('partials.errors')

      <div class="card card-default">
        <div class="card-header d-flex align-items-center justify-content-between">
          <span>Crear tutor laboral</span>
          <button type="button" class="btn btn-sm btn-danger" style="width:100px"
            onclick="window.history.back();">{{ __('Volver') }}</button>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('tutor-laboral.store') }}" role="form" enctype="multipart/form-data"
            class="needs-validation" novalidate>
            @csrf

            @include('tutor-laboral.form')




            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button type="submit" class="btn btn-success mt-2" style="width:200px">
                {{ __('Guardar') }}</button>
            </div>
          </form>
          <script>
          function toggleCardSelected(cardId) {
            document.getElementById(cardId).classList.toggle('card-selected');
          }
          (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
              .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                  if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                  }

                  form.classList.add('was-validated')
                }, false)
              })
          })()
          </script>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection