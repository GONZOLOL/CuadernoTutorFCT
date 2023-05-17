<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('DNI_tutor_docente') }}
            {{ Form::text('DNI_tutor_docente', $cuadernoTutor->DNI_tutor_docente, ['class' => 'form-control' . ($errors->has('DNI_tutor_docente') ? ' is-invalid' : ''), 'placeholder' => 'Dni Tutor Docente']) }}
            {!! $errors->first('DNI_tutor_docente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trimestre') }}
            {{ Form::text('trimestre', $cuadernoTutor->trimestre, ['class' => 'form-control' . ($errors->has('trimestre') ? ' is-invalid' : ''), 'placeholder' => 'Trimestre']) }}
            {!! $errors->first('trimestre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciclo_formativo_curso_actual') }}
            {{ Form::text('ciclo_formativo_curso_actual', $cuadernoTutor->ciclo_formativo_curso_actual, ['class' => 'form-control' . ($errors->has('ciclo_formativo_curso_actual') ? ' is-invalid' : ''), 'placeholder' => 'Ciclo Formativo Curso Actual']) }}
            {!! $errors->first('ciclo_formativo_curso_actual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('plan_formativo') }}
            {{ Form::text('plan_formativo', $cuadernoTutor->plan_formativo, ['class' => 'form-control' . ($errors->has('plan_formativo') ? ' is-invalid' : ''), 'placeholder' => 'Plan Formativo']) }}
            {!! $errors->first('plan_formativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CIF_EMPRESA') }}
            {{ Form::text('CIF_EMPRESA', $cuadernoTutor->CIF_EMPRESA, ['class' => 'form-control' . ($errors->has('CIF_EMPRESA') ? ' is-invalid' : ''), 'placeholder' => 'Cif Empresa']) }}
            {!! $errors->first('CIF_EMPRESA', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>