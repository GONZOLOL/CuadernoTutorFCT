<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ID') }}
            {{ Form::text('ID', $valoracionFinalTutorDocente->ID, ['class' => 'form-control' . ($errors->has('ID') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_1') }}
            {{ Form::text('opcion_1', $valoracionFinalTutorDocente->opcion_1, ['class' => 'form-control' . ($errors->has('opcion_1') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 1']) }}
            {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_2') }}
            {{ Form::text('opcion_2', $valoracionFinalTutorDocente->opcion_2, ['class' => 'form-control' . ($errors->has('opcion_2') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 2']) }}
            {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_3') }}
            {{ Form::text('opcion_3', $valoracionFinalTutorDocente->opcion_3, ['class' => 'form-control' . ($errors->has('opcion_3') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 3']) }}
            {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_4') }}
            {{ Form::text('opcion_4', $valoracionFinalTutorDocente->opcion_4, ['class' => 'form-control' . ($errors->has('opcion_4') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 4']) }}
            {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_5') }}
            {{ Form::text('opcion_5', $valoracionFinalTutorDocente->opcion_5, ['class' => 'form-control' . ($errors->has('opcion_5') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 5']) }}
            {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_6') }}
            {{ Form::text('opcion_6', $valoracionFinalTutorDocente->opcion_6, ['class' => 'form-control' . ($errors->has('opcion_6') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 6']) }}
            {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opción_7') }}
            {{ Form::text('opción_7', $valoracionFinalTutorDocente->opción_7, ['class' => 'form-control' . ($errors->has('opción_7') ? ' is-invalid' : ''), 'placeholder' => 'Opción 7']) }}
            {!! $errors->first('opción_7', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opción_8') }}
            {{ Form::text('opción_8', $valoracionFinalTutorDocente->opción_8, ['class' => 'form-control' . ($errors->has('opción_8') ? ' is-invalid' : ''), 'placeholder' => 'Opción 8']) }}
            {!! $errors->first('opción_8', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aspectos_destacables') }}
            {{ Form::text('aspectos_destacables', $valoracionFinalTutorDocente->aspectos_destacables, ['class' => 'form-control' . ($errors->has('aspectos_destacables') ? ' is-invalid' : ''), 'placeholder' => 'Aspectos Destacables']) }}
            {!! $errors->first('aspectos_destacables', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('evaluación_final') }}
            {{ Form::text('evaluación_final', $valoracionFinalTutorDocente->evaluación_final, ['class' => 'form-control' . ($errors->has('evaluación_final') ? ' is-invalid' : ''), 'placeholder' => 'Evaluación Final']) }}
            {!! $errors->first('evaluación_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aspectos_mejorables') }}
            {{ Form::text('aspectos_mejorables', $valoracionFinalTutorDocente->aspectos_mejorables, ['class' => 'form-control' . ($errors->has('aspectos_mejorables') ? ' is-invalid' : ''), 'placeholder' => 'Aspectos Mejorables']) }}
            {!! $errors->first('aspectos_mejorables', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_cuaderno') }}
            {{ Form::text('Id_cuaderno', $valoracionFinalTutorDocente->Id_cuaderno, ['class' => 'form-control' . ($errors->has('Id_cuaderno') ? ' is-invalid' : ''), 'placeholder' => 'Id Cuaderno']) }}
            {!! $errors->first('Id_cuaderno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>