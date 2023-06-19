<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('DNI') }} <span class="text-danger">*</span>
                    {{ Form::text('DNI', $tutorLaboral->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni', 'required' => 'required']) }}
                    {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('Nombre') }} <span class="text-danger">*</span>
                    {{ Form::text('Nombre', $tutorLaboral->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre', 'required' => 'required']) }}
                    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('Apellidos') }} <span class="text-danger">*</span>
                    {{ Form::text('Apellidos', $tutorLaboral->Apellidos, ['class' => 'form-control' . ($errors->has('Apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos', 'required' => 'required']) }}
                    {!! $errors->first('Apellidos', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('CIF_EMPRESA', 'Empresa') }} <span class="text-danger">*</span>
                    {{ Form::select('CIF_EMPRESA', $empresas, $tutorLaboral->CIF_EMPRESA, ['class' => 'form-control' . ($errors->has('CIF_EMPRESA') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona una empresa', 'required' => 'required']) }}
                    {!! $errors->first('CIF_EMPRESA', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('id_centro', 'Centro de trabajo') }} <span class="text-danger">*</span>
                    {{ Form::select('id_centro', $centrosTrabajo, $tutorLaboral->id_centro, ['class' => 'form-control' . ($errors->has('id_centro') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un centro de trabajo', 'required' => 'required']) }}
                    {!! $errors->first('id_centro', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>


</div>