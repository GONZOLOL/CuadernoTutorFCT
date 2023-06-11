<div class="container">
    <div class="box box-info padding-1">
        <div class="box-body">
            <div class="form-group">
                {{ Form::label('Tutor docente') }}
                {{ Form::select('DNI_tutor_docente', [route('tutor-docente.cuadernoDocenteCreate') => 'Crear tutor docente'] + $tutores_docentes->toArray(), $cuadernoTutor->DNI_tutor_docente, ['class' => 'form-control' . ($errors->has('DNI_tutor_docente') ? ' is-invalid' : ''), 'placeholder' => 'Añadir tutor docente', 'id' => 'dniTutorDocenteSelect']) }}
                {!! $errors->first('DNI_tutor_docente', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Empresa') }}
                {{ Form::select('CIF_EMPRESA', [route('empresa.create') => 'Crear empresa'] + $empresas->toArray(), $cuadernoTutor->CIF_EMPRESA, ['class' => 'form-control' . ($errors->has('CIF_EMPRESA') ? ' is-invalid' : ''), 'placeholder' => 'Añadir empresa', 'id' => 'empresaSelect']) }}
                {!! $errors->first('CIF_EMPRESA', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('trimestre') }}
                {{ Form::select('trimestre', [1 => 'Primero', 2 => 'Segundo', 3 => 'Tercero'], $cuadernoTutor->trimestre, ['class' => 'form-control' . ($errors->has('trimestre') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un trimestre...']) }}
                {!! $errors->first('trimestre', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                {{ Form::label('ciclo_formativo_curso_actual') }}
                {{ Form::text('ciclo_formativo_curso_actual', $cuadernoTutor->ciclo_formativo_curso_actual, ['class' => 'form-control' . ($errors->has('ciclo_formativo_curso_actual') ? ' is-invalid' : ''), 'placeholder' => 'Ciclo Formativo Curso Actual']) }}
                {!! $errors->first('ciclo_formativo_curso_actual', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('visitas_previstas') }}
                {{ Form::text('visitas_previstas', $cuadernoTutor->visitas_previstas, ['class' => 'form-control' . ($errors->has('visitas_previstas') ? ' is-invalid' : ''), 'placeholder' => 'Visitas previstas']) }}
                {!! $errors->first('visitas_previstas', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('plan_formativo') }}
                {{ Form::file('plan_formativo', ['class' => 'form-control' . ($errors->has('plan_formativo') ? ' is-invalid' : '')]) }}
                {!! $errors->first('plan_formativo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <a href="{{ route('cuaderno-tutor.download', $cuadernoTutor->Id_cuaderno) }}">Descargar archivo de plan
                formativo</a>
        </div>
    </div>
</div>