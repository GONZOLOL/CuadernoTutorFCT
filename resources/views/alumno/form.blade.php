<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('DNI') }}
            {{ Form::text('DNI', $alumno->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('Apellidos', $alumno->Apellidos, ['class' => 'form-control' . ($errors->has('Apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('Apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $alumno->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Domicilio') }}
            {{ Form::text('Domicilio', $alumno->Domicilio, ['class' => 'form-control' . ($errors->has('Domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
            {!! $errors->first('Domicilio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Población') }}
            {{ Form::text('Población', $alumno->Población, ['class' => 'form-control' . ($errors->has('Población') ? ' is-invalid' : ''), 'placeholder' => 'Población']) }}
            {!! $errors->first('Población', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Codigo_postal') }}
            {{ Form::text('Codigo_postal', $alumno->Codigo_postal, ['class' => 'form-control' . ($errors->has('Codigo_postal') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Postal']) }}
            {!! $errors->first('Codigo_postal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Provincia') }}
            {{ Form::text('Provincia', $alumno->Provincia, ['class' => 'form-control' . ($errors->has('Provincia') ? ' is-invalid' : ''), 'placeholder' => 'Provincia']) }}
            {!! $errors->first('Provincia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_nacimiento') }}
            {{ Form::text('Fecha_nacimiento', $alumno->Fecha_nacimiento, ['class' => 'form-control' . ($errors->has('Fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('Fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Edad') }}
            {{ Form::text('Edad', $alumno->Edad, ['class' => 'form-control' . ($errors->has('Edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('Edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Teléfono') }}
            {{ Form::text('Teléfono', $alumno->Teléfono, ['class' => 'form-control' . ($errors->has('Teléfono') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('Teléfono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $alumno->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Género') }}
            {{ Form::text('Género', $alumno->Género, ['class' => 'form-control' . ($errors->has('Género') ? ' is-invalid' : ''), 'placeholder' => 'Género']) }}
            {!! $errors->first('Género', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_padre') }}
            {{ Form::text('Nombre_padre', $alumno->Nombre_padre, ['class' => 'form-control' . ($errors->has('Nombre_padre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Padre']) }}
            {!! $errors->first('Nombre_padre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('Observaciones', $alumno->Observaciones, ['class' => 'form-control' . ($errors->has('Observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('Observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_empresa_FCT') }}
            {{ Form::text('Tipo_empresa_FCT', $alumno->Tipo_empresa_FCT, ['class' => 'form-control' . ($errors->has('Tipo_empresa_FCT') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Empresa Fct']) }}
            {!! $errors->first('Tipo_empresa_FCT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Solicita_beca') }}
            {{ Form::text('Solicita_beca', $alumno->Solicita_beca, ['class' => 'form-control' . ($errors->has('Solicita_beca') ? ' is-invalid' : ''), 'placeholder' => 'Solicita Beca']) }}
            {!! $errors->first('Solicita_beca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cuenta_bancaria') }}
            {{ Form::text('Cuenta_bancaria', $alumno->Cuenta_bancaria, ['class' => 'form-control' . ($errors->has('Cuenta_bancaria') ? ' is-invalid' : ''), 'placeholder' => 'Cuenta Bancaria']) }}
            {!! $errors->first('Cuenta_bancaria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>