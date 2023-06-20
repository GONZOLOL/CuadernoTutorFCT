<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('DNI') }} <span class="text-danger">*</span>
                    {{ Form::text('DNI', $alumno->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni', 'maxlength' => '9']) }}
                    {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Nombre') }} <span class="text-danger">*</span>
                    {{ Form::text('Nombre', $alumno->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Apellidos') }} <span class="text-danger">*</span>
                    {{ Form::text('Apellidos', $alumno->Apellidos, ['class' => 'form-control' . ($errors->has('Apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
                    {!! $errors->first('Apellidos', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Fecha_nacimiento') }} <span class="text-danger">*</span>
                    {{ Form::date('Fecha_nacimiento', isset($alumno->Fecha_nacimiento) ? \Carbon\Carbon::parse($alumno->Fecha_nacimiento)->format('Y-m-d') : null, ['class' => 'form-control' . ($errors->has('Fecha_nacimiento') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('Fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('Domicilio') }} <span class="text-danger">*</span>
                    {{ Form::text('Domicilio', $alumno->Domicilio, ['class' => 'form-control' . ($errors->has('Domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
                    {!! $errors->first('Domicilio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Población') }} <span class="text-danger">*</span>
                    {{ Form::text('Población', $alumno->Población, ['class' => 'form-control' . ($errors->has('Población') ? ' is-invalid' : ''), 'placeholder' => 'Población']) }}
                    {!! $errors->first('Población', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Codigo_postal') }} <span class="text-danger">*</span>
                    {{ Form::text('Codigo_postal', $alumno->Codigo_postal, ['class' => 'form-control' . ($errors->has('Codigo_postal') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Postal']) }}
                    {!! $errors->first('Codigo_postal', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Provincia') }} <span class="text-danger">*</span>
                    {{ Form::select('Provincia', $provincias, $alumno->Provincia, ['class' => 'form-control' . ($errors->has('Provincia') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('Provincia', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('Edad') }} <span class="text-danger">*</span>
                    {{ Form::text('Edad', $alumno->Edad, ['class' => 'form-control' . ($errors->has('Edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad', 'maxlength' => '3']) }}
                    {!! $errors->first('Edad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Teléfono') }} <span class="text-danger">*</span>
                    {{ Form::text('Teléfono', $alumno->Teléfono, ['class' => 'form-control' . ($errors->has('Teléfono') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
                    {!! $errors->first('Teléfono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Email') }} <span class="text-danger">*</span>
                    {{ Form::email('Email', $alumno->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                    {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="form-group">
                    {{ Form::label('Género') }} <span class="text-danger">*</span>
                    {{ Form::select('Género', ['m' => 'Masculino', 'f' => 'Femenino'], $alumno->Género, ['class' => 'form-control' . ($errors->has('Género') ? ' is-invalid' : ''), 'placeholder' => 'Género']) }}
                    {!! $errors->first('Género', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('Nombre_padre') }} <span class="text-danger">*</span>
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
                    {{ Form::label('Solicita_beca') }} <span class="text-danger">*</span>
                    {{ Form::select('Solicita_beca', ['0' => 'No', '1' => 'Sí'], $alumno->Solicita_beca, ['class' => 'form-control' . ($errors->has('Solicita_beca') ? ' is-invalid' : ''), 'placeholder' => 'Solicita Beca', 'id' => 'solicita_beca', 'onchange' => 'toggleBankAccountField()']) }}
                    {!! $errors->first('Solicita_beca', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="form-group" id="cuenta_bancaria_group"
                style="{{ $alumno->Solicita_beca == '0' ? 'display:none;' : '' }}">
                {{ Form::label('Cuenta_bancaria') }}
                {{ Form::text('Cuenta_bancaria', $alumno->Cuenta_bancaria, ['class' => 'form-control' . ($errors->has('Cuenta_bancaria') ? ' is-invalid' : ''), 'placeholder' => 'Cuenta Bancaria']) }}
                {!! $errors->first('Cuenta_bancaria', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    </div>
</div>

<script>
function toggleBankAccountField() {
    var solicitaBecaSelect = document.getElementById('solicita_beca');
    var cuentaBancariaGroup = document.getElementById('cuenta_bancaria_group');

    if (solicitaBecaSelect.value == '1') {
        cuentaBancariaGroup.style.display = 'block';
    } else {
        cuentaBancariaGroup.style.display = 'none';
    }
}

// Call function on page load to ensure correct visibility
document.addEventListener("DOMContentLoaded", function() {
    toggleBankAccountField();
});
</script>