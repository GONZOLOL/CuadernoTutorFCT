<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('CIF_EMPRESA') }}
                    {{ Form::text('CIF_EMPRESA', $centroTrabajo->CIF_EMPRESA, ['class' => 'form-control' . ($errors->has('CIF_EMPRESA') ? ' is-invalid' : ''), 'placeholder' => 'Cif Empresa', 'readonly' => 'readonly']) }}
                    {!! $errors->first('CIF_EMPRESA', '<div class="invalid-feedback">:message</div>') !!}
                </div>

            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('Denominacion') }} <span class="text-danger">*</span>
                    {{ Form::text('Denominacion', $centroTrabajo->Denominacion, ['class' => 'form-control' . ($errors->has('Denominacion') ? ' is-invalid' : ''), 'placeholder' => 'Denominacion']) }}
                    {!! $errors->first('Denominacion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('Domicilio') }} <span class="text-danger">*</span>
                    {{ Form::text('Domicilio', $centroTrabajo->Domicilio, ['class' => 'form-control' . ($errors->has('Domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
                    {!! $errors->first('Domicilio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="col-md-3">

                <div class="form-group">
                    {{ Form::label('Poblacion') }} <span class="text-danger">*</span>
                    {{ Form::text('Poblacion', $centroTrabajo->Poblacion, ['class' => 'form-control' . ($errors->has('Poblacion') ? ' is-invalid' : ''), 'placeholder' => 'Poblacion']) }}
                    {!! $errors->first('Poblacion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('Codigo_postal') }} <span class="text-danger">*</span>
                {{ Form::text('Codigo_postal', $centroTrabajo->Codigo_postal, ['class' => 'form-control' . ($errors->has('Codigo_postal') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Postal']) }}
                {!! $errors->first('Codigo_postal', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('Provincia') }} <span class="text-danger">*</span>
                {{ Form::select('Provincia', $provincias, $centroTrabajo->Provincia, ['class' => 'form-control' . ($errors->has('Provincia') ? ' is-invalid' : '')]) }}
                {!! $errors->first('Provincia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('Distancia') }} <span class="text-danger">*</span>
                {{ Form::text('Distancia', $centroTrabajo->Distancia, ['class' => 'form-control' . ($errors->has('Distancia') ? ' is-invalid' : ''), 'placeholder' => 'Distancia']) }}
                {!! $errors->first('Distancia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('Preferencia alumnado') }}
                {{ Form::text('Preferencias_alumnado', $centroTrabajo->Preferencias_alumnado, ['class' => 'form-control' . ($errors->has('Preferencias_alumnado') ? ' is-invalid' : ''), 'placeholder' => 'Preferencias Alumnado']) }}
                {!! $errors->first('Preferencias_alumnado', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    </div>
</div>

<div class="box-footer mt-4 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
</div>