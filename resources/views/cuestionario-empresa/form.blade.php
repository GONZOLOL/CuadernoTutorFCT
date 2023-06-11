<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ID') }}
            {{ Form::text('ID', $cuestionarioEmpresa->ID, ['class' => 'form-control' . ($errors->has('ID') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('ID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_1') }}
            {{ Form::text('opcion_1', $cuestionarioEmpresa->opcion_1, ['class' => 'form-control' . ($errors->has('opcion_1') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 1']) }}
            {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_2') }}
            {{ Form::text('opcion_2', $cuestionarioEmpresa->opcion_2, ['class' => 'form-control' . ($errors->has('opcion_2') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 2']) }}
            {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_3') }}
            {{ Form::text('opcion_3', $cuestionarioEmpresa->opcion_3, ['class' => 'form-control' . ($errors->has('opcion_3') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 3']) }}
            {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_4') }}
            {{ Form::text('opcion_4', $cuestionarioEmpresa->opcion_4, ['class' => 'form-control' . ($errors->has('opcion_4') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 4']) }}
            {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_5') }}
            {{ Form::text('opcion_5', $cuestionarioEmpresa->opcion_5, ['class' => 'form-control' . ($errors->has('opcion_5') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 5']) }}
            {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('opcion_6') }}
            {{ Form::text('opcion_6', $cuestionarioEmpresa->opcion_6, ['class' => 'form-control' . ($errors->has('opcion_6') ? ' is-invalid' : ''), 'placeholder' => 'Opcion 6']) }}
            {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sugerencias') }}
            {{ Form::text('sugerencias', $cuestionarioEmpresa->sugerencias, ['class' => 'form-control' . ($errors->has('sugerencias') ? ' is-invalid' : ''), 'placeholder' => 'Sugerencias']) }}
            {!! $errors->first('sugerencias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_cuaderno') }}
            {{ Form::text('Id_cuaderno', $cuestionarioEmpresa->Id_cuaderno, ['class' => 'form-control' . ($errors->has('Id_cuaderno') ? ' is-invalid' : ''), 'placeholder' => 'Id Cuaderno']) }}
            {!! $errors->first('Id_cuaderno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>