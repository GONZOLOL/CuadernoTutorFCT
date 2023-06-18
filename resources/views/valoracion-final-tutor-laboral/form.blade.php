<div class="box box-info padding-1">

    <div class="box-body">
        <input type="hidden" name="Id_cuaderno" value="{{ $cuadernoTutorId }}">

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead text-center">
                    <thead class="thead text-center">
                        <tr>
                            <th></th>
                            <th colspan="5">Centro de trabajo:</th>
                        </tr>
                    </thead>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td></td>
                        <td>Negativa</td>
                        <td>Positiva</td>
                        <td>Excelente</td>
                    </tr>
                    <tr>
                        <td>Competencias profesionales.</td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 3, $valoracionFinalTutorLaboral->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 2, $valoracionFinalTutorLaboral->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 1, $valoracionFinalTutorLaboral->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Competencias organizativas.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 3, $valoracionFinalTutorLaboral->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 2, $valoracionFinalTutorLaboral->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 1, $valoracionFinalTutorLaboral->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Competencias relacionales.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 3, $valoracionFinalTutorLaboral->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 2, $valoracionFinalTutorLaboral->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 1, $valoracionFinalTutorLaboral->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Capacidad de respuesta a las contingencias.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 3, $valoracionFinalTutorLaboral->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 2, $valoracionFinalTutorLaboral->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 1, $valoracionFinalTutorLaboral->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Otro aspecto 1.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 3, $valoracionFinalTutorLaboral->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 2, $valoracionFinalTutorLaboral->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 1, $valoracionFinalTutorLaboral->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Otro aspecto 2.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 3, $valoracionFinalTutorLaboral->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 2, $valoracionFinalTutorLaboral->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 1, $valoracionFinalTutorLaboral->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Otro aspecto 3.</td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 3, $valoracionFinalTutorLaboral->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 2, $valoracionFinalTutorLaboral->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 1, $valoracionFinalTutorLaboral->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Otros aspectos detalle el otro aspecto 1:
                        </td>
                        <td colspan="5">
                            <div class="form-group text-center">
                                {{ Form::text('opcion_5_detalle', $valoracionFinalTutorLaboral->opcion_5_detalle, ['class' => 'form-control' . ($errors->has('opcion_5_detalle') ? ' is-invalid' : '') ]) }}
                                {!! $errors->first('opcion_5_detalle', '<div class="invalid-feedback">:message</div>
                                ') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Otros aspectos detalle el otro aspecto 2:
                        </td>
                        <td colspan="5">
                            <div class="form-group text-center">
                                {{ Form::text('opcion_6_detalle', $valoracionFinalTutorLaboral->opcion_6_detalle, ['class' => 'form-control' . ($errors->has('opcion_6_detalle') ? ' is-invalid' : '') ]) }}
                                {!! $errors->first('opcion_6_detalle', '<div class="invalid-feedback">:message</div>
                                ') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Otros aspectos detalle el otro aspecto 3:
                        </td>
                        <td colspan="5">
                            <div class="form-group text-center">
                                {{ Form::text('opcion_7_detalle', $valoracionFinalTutorLaboral->opcion_7_detalle, ['class' => 'form-control' . ($errors->has('opcion_7_detalle') ? ' is-invalid' : '') ]) }}
                                {!! $errors->first('opcion_7_detalle', '<div class="invalid-feedback">:message</div>
                                ') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Áreas y puestos de trabajo donde ha desarrollado las actividades formativas:
                        </td>
                        <td colspan="5">
                            <div class="form-group text-center">
                                {{ Form::text('area_trabajo', $valoracionFinalTutorLaboral->area_trabajo, ['class' => 'form-control' . ($errors->has('area_trabajo') ? ' is-invalid' : '') ]) }}
                                {!! $errors->first('area_trabajo', '<div class="invalid-feedback">:message</div>
                                ') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Modificaciones a introducir en el programa formativo
                        </td>
                        <td colspan="5">
                            <div class="form-group text-center">
                                {{ Form::text('sugerencias_programa_formativo', $valoracionFinalTutorLaboral->sugerencias_programa_formativo, ['class' => 'form-control' . ($errors->has('sugerencias_programa_formativo') ? ' is-invalid' : '') ]) }}
                                {!! $errors->first('sugerencias_programa_formativo', '<div class="invalid-feedback">
                                    :message</div>
                                ') !!}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end align-items-center mb-4 border border-black ps-4 py-4">
                <span class="me-auto fs-4">Evaluación global</span>
                <div class="d-flex gap-5 me-2 align-items-center" style="width:200px">
                    <div class="form-group text-center">
                        {{ Form::radio('evaluacion_final', 1, $valoracionFinalTutorLaboral->evaluacion_final) }}
                        {{ Form::label("APTO") }}
                        {!! $errors->first('evaluacion_final', '<div class="invalid-feedback">:message</div>
                        ')!!}
                    </div>
                    <div class="form-group text-center">
                        {{ Form::radio('evaluacion_final', 2, $valoracionFinalTutorLaboral->evaluacion_final) }}
                        {{ Form::label("NO APTO") }}
                        {!! $errors->first('evaluacion_final', '<div class="invalid-feedback">:message</div>
                        ')!!}
                    </div>
                </div>
            </div>
            <div class="box-footer mt20 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
            </div>
        </div>
    </div>
</div>