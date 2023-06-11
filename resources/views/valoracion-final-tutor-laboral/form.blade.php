<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ID') }}
            {{ Form::text('ID', $valoracionFinalTutorLaboral->ID, ['class' => 'form-control' . ($errors->has('ID') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_1') }}
            {{ Form::text('opcion_1', $valoracionFinalTutorLaboral->opcion_1, ['class' => 'form-control' . ($errors->has('opcion_1') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 1']) }}
            {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_2') }}
            {{ Form::text('opcion_2', $valoracionFinalTutorLaboral->opcion_2, ['class' => 'form-control' . ($errors->has('opcion_2') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 2']) }}
            {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_3') }}
            {{ Form::text('opcion_3', $valoracionFinalTutorLaboral->opcion_3, ['class' => 'form-control' . ($errors->has('opcion_3') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 3']) }}
            {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_4') }}
            {{ Form::text('opcion_4', $valoracionFinalTutorLaboral->opcion_4, ['class' => 'form-control' . ($errors->has('opcion_4') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 4']) }}
            {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_5') }}
            {{ Form::text('opcion_5', $valoracionFinalTutorLaboral->opcion_5, ['class' => 'form-control' . ($errors->has('opcion_5') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 5']) }}
            {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_6') }}
            {{ Form::text('opcion_6', $valoracionFinalTutorLaboral->opcion_6, ['class' => 'form-control' . ($errors->has('opcion_6') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 6']) }}
            {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opción_7') }}
            {{ Form::text('opción_7', $valoracionFinalTutorLaboral->opción_7, ['class' => 'form-control' . ($errors->has('opción_7') ? ' is-invalid' : ''), 'placeholder' => 'Opción 7']) }}
            {!! $errors->first('opción_7', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_5_detalle') }}
            {{ Form::text('opcion_5_detalle', $valoracionFinalTutorLaboral->opcion_5_detalle, ['class' => 'form-control' . ($errors->has('opcion_5_detalle') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 5 Detalle']) }}
            {!! $errors->first('opcion_5_detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_6_detalle') }}
            {{ Form::text('opcion_6_detalle', $valoracionFinalTutorLaboral->opcion_6_detalle, ['class' => 'form-control' . ($errors->has('opcion_6_detalle') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 6 Detalle']) }}
            {!! $errors->first('opcion_6_detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opción_7_detalle') }}
            {{ Form::text('opción_7_detalle', $valoracionFinalTutorLaboral->opción_7_detalle, ['class' => 'form-control' . ($errors->has('opción_7_detalle') ? ' is-invalid' : ''), 'placeholder' => 'Opción 7 Detalle']) }}
            {!! $errors->first('opción_7_detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area_trabajo') }}
            {{ Form::text('area_trabajo', $valoracionFinalTutorLaboral->area_trabajo, ['class' => 'form-control' . ($errors->has('area_trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Area Trabajo']) }}
            {!! $errors->first('area_trabajo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sugerencias_programa_formativo') }}
            {{ Form::text('sugerencias_programa_formativo', $valoracionFinalTutorLaboral->sugerencias_programa_formativo, ['class' => 'form-control' . ($errors->has('sugerencias_programa_formativo') ? ' is-invalid' : ''), 'placeholder' => 'Sugerencias Programa Formativo']) }}
            {!! $errors->first('sugerencias_programa_formativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('evaluacion_final') }}
            {{ Form::text('evaluacion_final', $valoracionFinalTutorLaboral->evaluacion_final, ['class' => 'form-control' . ($errors->has('evaluacion_final') ? ' is-invalid' : ''), 'placeholder' => 'Evaluacion Final']) }}
            {!! $errors->first('evaluacion_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_cuaderno') }}
            {{ Form::text('Id_cuaderno', $valoracionFinalTutorLaboral->Id_cuaderno, ['class' => 'form-control' . ($errors->has('Id_cuaderno') ? ' is-invalid' : ''), 'placeholder' => 'Id Cuaderno']) }}
            {!! $errors->first('Id_cuaderno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>