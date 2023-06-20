<div class="box box-info padding-1">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="box-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('DNI') }} <span class="text-danger">*</span>
                    {{ Form::text('DNI', $tutorDocente->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
                    {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('Nombre') }} <span class="text-danger">*</span>
                    {{ Form::text('Nombre', $tutorDocente->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('Apellido_1') }} <span class="text-danger">*</span>
                    {{ Form::text('Apellido_1', $tutorDocente->Apellido_1, ['class' => 'form-control' . ($errors->has('Apellido_1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido 1']) }}
                    {!! $errors->first('Apellido_1', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {{ Form::label('Apellido_2') }} <span class="text-danger">*</span>
                    {{ Form::text('Apellido_2', $tutorDocente->Apellido_2, ['class' => 'form-control' . ($errors->has('Apellido_2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido 2']) }}
                    {!! $errors->first('Apellido_2', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
</div>