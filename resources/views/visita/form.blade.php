<div class="box box-info padding-1">
    <div class="box-body">
        
       
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $visita->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Incidencia') }}
            {{ Form::text('Incidencia', $visita->Incidencia, ['class' => 'form-control' . ($errors->has('Incidencia') ? ' is-invalid' : ''), 'placeholder' => 'Incidencia']) }}
            {!! $errors->first('Incidencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('Observaciones', $visita->Observaciones, ['class' => 'form-control' . ($errors->has('Observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('Observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Núm_visitas_previstas') }}
            {{ Form::text('Núm_visitas_previstas', $visita->Núm_visitas_previstas, ['class' => 'form-control' . ($errors->has('Núm_visitas_previstas') ? ' is-invalid' : ''), 'placeholder' => 'Núm visita Previstas']) }}
            {!! $errors->first('Núm_visitas_previstas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>