<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('DNI_alumno') }}
            {{ Form::text('DNI_alumno', $tiene->DNI_alumno, ['class' => 'form-control' . ($errors->has('DNI_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Dni Alumno']) }}
            {!! $errors->first('DNI_alumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_cuaderno') }}
            {{ Form::text('Id_cuaderno', $tiene->Id_cuaderno, ['class' => 'form-control' . ($errors->has('Id_cuaderno') ? ' is-invalid' : ''), 'placeholder' => 'Id Cuaderno']) }}
            {!! $errors->first('Id_cuaderno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>