<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('DNI') }}
            {{ Form::text('DNI', $tutorLaboral->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $tutorLaboral->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('Apellidos', $tutorLaboral->Apellidos, ['class' => 'form-control' . ($errors->has('Apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('Apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_centro', 'Centro de trabajo') }}
            {{ Form::select('id_centro', $centrosTrabajo, $tutorLaboral->id_centro, ['class' => 'form-control' . ($errors->has('id_centro') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar centro de trabajo']) }}
            {!! $errors->first('id_centro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CIF_EMPRESA', 'CIF Empresa') }}
            {{ Form::select('CIF_EMPRESA', $empresas, $tutorLaboral->CIF_EMPRESA, ['class' => 'form-control' . ($errors->has('CIF_EMPRESA') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar CIF de Empresa']) }}
            {!! $errors->first('CIF_EMPRESA', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
</div>