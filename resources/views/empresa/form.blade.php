<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('CIF') }}
            {{ Form::text('CIF', $empresa->CIF, ['class' => 'form-control' . ($errors->has('CIF') ? ' is-invalid' : ''), 'placeholder' => 'Cif']) }}
            {!! $errors->first('CIF', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $empresa->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Domicilio_social') }}
            {{ Form::text('Domicilio_social', $empresa->Domicilio_social, ['class' => 'form-control' . ($errors->has('Domicilio_social') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio Social']) }}
            {!! $errors->first('Domicilio_social', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Poblacion') }}
            {{ Form::text('Poblacion', $empresa->Poblacion, ['class' => 'form-control' . ($errors->has('Poblacion') ? ' is-invalid' : ''), 'placeholder' => 'Poblacion']) }}
            {!! $errors->first('Poblacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Codigo_postal') }}
            {{ Form::text('Codigo_postal', $empresa->Codigo_postal, ['class' => 'form-control' . ($errors->has('Codigo_postal') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Postal']) }}
            {!! $errors->first('Codigo_postal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Provincia') }}
            {{ Form::text('Provincia', $empresa->Provincia, ['class' => 'form-control' . ($errors->has('Provincia') ? ' is-invalid' : ''), 'placeholder' => 'Provincia']) }}
            {!! $errors->first('Provincia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $empresa->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fax') }}
            {{ Form::text('Fax', $empresa->Fax, ['class' => 'form-control' . ($errors->has('Fax') ? ' is-invalid' : ''), 'placeholder' => 'Fax']) }}
            {!! $errors->first('Fax', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Movil') }}
            {{ Form::text('Movil', $empresa->Movil, ['class' => 'form-control' . ($errors->has('Movil') ? ' is-invalid' : ''), 'placeholder' => 'Movil']) }}
            {!! $errors->first('Movil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Titularidad') }}
            {{ Form::text('Titularidad', $empresa->Titularidad, ['class' => 'form-control' . ($errors->has('Titularidad') ? ' is-invalid' : ''), 'placeholder' => 'Titularidad']) }}
            {!! $errors->first('Titularidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actividad') }}
            {{ Form::text('Actividad', $empresa->Actividad, ['class' => 'form-control' . ($errors->has('Actividad') ? ' is-invalid' : ''), 'placeholder' => 'Actividad']) }}
            {!! $errors->first('Actividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NIF_representante_legal') }}
            {{ Form::text('NIF_representante_legal', $empresa->NIF_representante_legal, ['class' => 'form-control' . ($errors->has('NIF_representante_legal') ? ' is-invalid' : ''), 'placeholder' => 'Nif Representante Legal']) }}
            {!! $errors->first('NIF_representante_legal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_representante_legal') }}
            {{ Form::text('Nombre_representante_legal', $empresa->Nombre_representante_legal, ['class' => 'form-control' . ($errors->has('Nombre_representante_legal') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Representante Legal']) }}
            {!! $errors->first('Nombre_representante_legal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo_representante_legal') }}
            {{ Form::text('Cargo_representante_legal', $empresa->Cargo_representante_legal, ['class' => 'form-control' . ($errors->has('Cargo_representante_legal') ? ' is-invalid' : ''), 'placeholder' => 'Cargo Representante Legal']) }}
            {!! $errors->first('Cargo_representante_legal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horario_apertura') }}
            {{ Form::text('Horario_apertura', $empresa->Horario_apertura, ['class' => 'form-control' . ($errors->has('Horario_apertura') ? ' is-invalid' : ''), 'placeholder' => 'Horario Apertura']) }}
            {!! $errors->first('Horario_apertura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horario_cierre') }}
            {{ Form::text('Horario_cierre', $empresa->Horario_cierre, ['class' => 'form-control' . ($errors->has('Horario_cierre') ? ' is-invalid' : ''), 'placeholder' => 'Horario Cierre']) }}
            {!! $errors->first('Horario_cierre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('Observaciones', $empresa->Observaciones, ['class' => 'form-control' . ($errors->has('Observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('Observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-4 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary" style=width:200px>{{ __('Submit') }}</button>
    </div>
</div>