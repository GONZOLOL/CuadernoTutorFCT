<div class="box box-info padding-1">
    <div class="box-body">
        <input type="hidden" name="Id_cuaderno" value="{{ $cuadernoTutorId }}">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('Numero de visita') }}
                    {{ Form::text('num_visita', $visita->num_visita, ['class' => 'form-control' . ($errors->has('num_visita') ? ' is-invalid' : ''), 'placeholder' => 'num_visita']) }}
                    {!! $errors->first('num_visita', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('Fecha') }}
                    {{ Form::date('Fecha', $visita->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
                    {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('Incidencia') }}
                    {{ Form::text('Incidencia', $visita->Incidencia, ['class' => 'form-control' . ($errors->has('Incidencia') ? ' is-invalid' : ''), 'placeholder' => 'Incidencia']) }}
                    {!! $errors->first('Incidencia', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('Observaciones') }}
                    {{ Form::textarea('Observaciones', $visita->Observaciones, ['class' => 'form-control' . ($errors->has('Observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones', 'rows' => 4]) }}
                    {!! $errors->first('Observaciones', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>


    <div class="box-footer mt-4 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary" style=width:200px>{{ __('Guardar') }}</button>
    </div>
</div>