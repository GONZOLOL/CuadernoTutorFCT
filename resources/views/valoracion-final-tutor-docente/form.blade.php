<div class="box box-info padding-1">

    <div class="box-body">
        <input type="hidden" name="Id_cuaderno" value="{{ $cuadernoTutorId }}">

        <div class="form-group">
            {{ Form::label('Alumno') }}
            {{ Form::select('dni_alumno', $alumnos, $valoracionFinalTutorDocente->dni_alumno, ['class' => 'form-control w-25' . ($errors->has('dni_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un alumno']) }}
            {!! $errors->first('dni_alumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

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
                        <td>5</td>
                        <td>4</td>
                        <td>3</td>
                        <td>2</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Posibilidades formativas que ofrece la empresa</td>
                        <td class=" text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 5, $valoracionFinalTutorDocente->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 4, $valoracionFinalTutorDocente->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 3, $valoracionFinalTutorDocente->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 2, $valoracionFinalTutorDocente->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 1, $valoracionFinalTutorDocente->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Cumplimiento del programa formativo por parte de la empresa.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 5, $valoracionFinalTutorDocente->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 4, $valoracionFinalTutorDocente->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 3, $valoracionFinalTutorDocente->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 2, $valoracionFinalTutorDocente->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 1, $valoracionFinalTutorDocente->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Seguimiento del alumno realizado por el tutor/a del centro de trabajo.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 5, $valoracionFinalTutorDocente->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 4, $valoracionFinalTutorDocente->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 3, $valoracionFinalTutorDocente->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 2, $valoracionFinalTutorDocente->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 1, $valoracionFinalTutorDocente->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Apoyo dado al profesor/a responsable del seguimiento.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 5, $valoracionFinalTutorDocente->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 4, $valoracionFinalTutorDocente->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 3, $valoracionFinalTutorDocente->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 2, $valoracionFinalTutorDocente->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 1, $valoracionFinalTutorDocente->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Posibilidades laborales que ofrece la empresa al alumnado que finalice la
                            fase de formación en centros de trabajo
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 5, $valoracionFinalTutorDocente->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 4, $valoracionFinalTutorDocente->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 3, $valoracionFinalTutorDocente->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 2, $valoracionFinalTutorDocente->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 1, $valoracionFinalTutorDocente->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Calidad de los informes del tutor/a del centro de trabajo.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 5, $valoracionFinalTutorDocente->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 4, $valoracionFinalTutorDocente->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 3, $valoracionFinalTutorDocente->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 2, $valoracionFinalTutorDocente->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 1, $valoracionFinalTutorDocente->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nivel de satisfacción mostrado con la empresa por el alumnado que ha
                            realizado la fase de formación en centros de trabajo en ella.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 5, $valoracionFinalTutorDocente->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 4, $valoracionFinalTutorDocente->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 3, $valoracionFinalTutorDocente->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 2, $valoracionFinalTutorDocente->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 1, $valoracionFinalTutorDocente->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            valoracion general de las prácticas por el profesor/a responsable del
                            seguimiento.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_8', 5, $valoracionFinalTutorDocente->opcion_8) }}
                                {!! $errors->first('opcion_8', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_8', 4, $valoracionFinalTutorDocente->opcion_8) }}
                                {!! $errors->first('opcion_8', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_8', 3, $valoracionFinalTutorDocente->opcion_8) }}
                                {!! $errors->first('opcion_8', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_8', 2, $valoracionFinalTutorDocente->opcion_8) }}
                                {!! $errors->first('opcion_8', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_8', 1, $valoracionFinalTutorDocente->opcion_8) }}
                                {!! $errors->first('opcion_8', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Aspectos a mejorar de la fase de formación en centros de trabajo: </td>
                        <td colspan="5">
                            <div class="form-group text-center">
                                {{ Form::text('aspectos_mejorables', $valoracionFinalTutorDocente->aspectos_mejorables, ['class' => 'form-control' . ($errors->has('aspectos_mejorables') ? ' is-invalid' : '') ]) }}
                                {!! $errors->first('aspectos_mejorables', '<div class="invalid-feedback">:message</div>
                                ') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Aspectos a destacar de la fase de formación en centros de trabajo:
                        </td>
                        <td colspan="5">
                            <div class="form-group text-center">
                                {{ Form::text('aspectos_destacables', $valoracionFinalTutorDocente->aspectos_destacables, ['class' => 'form-control' . ($errors->has('aspectos_destacables') ? ' is-invalid' : '') ]) }}
                                {!! $errors->first('aspectos_destacables', '<div class="invalid-feedback">:message</div>
                                ') !!}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end align-items-center mb-4 border border-black ps-4 py-4">
                <span class="me-auto fs-4">Evaluación final</span>
                <div class="d-flex gap-5 me-2 align-items-center" style="width:200px">
                    <div class="form-group text-center">
                        {{ Form::radio('evaluacion_final', 1, $valoracionFinalTutorDocente->evaluacion_final) }}
                        {{ Form::label("APTO") }}
                        {!! $errors->first('evaluacion_final', '<div class="invalid-feedback">:message</div>
                        ')!!}
                    </div>
                    <div class="form-group text-center">
                        {{ Form::radio('evaluacion_final', 2, $valoracionFinalTutorDocente->evaluacion_final) }}
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