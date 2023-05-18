<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('DNI') }}
            {{ Form::text('DNI', $tutorDocente->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido_1') }}
            {{ Form::text('Apellido_1', $tutorDocente->Apellido_1, ['class' => 'form-control' . ($errors->has('Apellido_1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido 1']) }}
            {!! $errors->first('Apellido_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido_2') }}
            {{ Form::text('Apellido_2', $tutorDocente->Apellido_2, ['class' => 'form-control' . ($errors->has('Apellido_2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido 2']) }}
            {!! $errors->first('Apellido_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $tutorDocente->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="d-flex justify-content-end mt-5">
        <button type="submit" class="btn btn-primary btn-lg">{{ __('Siguiente') }}</button>
    </div>
</div>