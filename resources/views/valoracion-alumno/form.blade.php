<div class="box box-info padding-1">

    <div class="box-body">
        <input type="hidden" name="Id_cuaderno" value="{{ $cuadernoTutorId }}">

        <div class="form-group">
            {{ Form::label('Alumno') }}
            {{ Form::select('dni_alumno', $alumnos, $valoracionAlumno->dni_alumno, ['class' => 'form-control w-25' . ($errors->has('dni_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un alumno']) }}
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
                                {{ Form::radio('opcion_1', 5, $valoracionAlumno->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 4, $valoracionAlumno->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 3, $valoracionAlumno->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 2, $valoracionAlumno->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 1, $valoracionAlumno->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Cumplimiento del programa formativo por parte de la empresa
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 5, $valoracionAlumno->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 4, $valoracionAlumno->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 3, $valoracionAlumno->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 2, $valoracionAlumno->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 1, $valoracionAlumno->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Seguimiento del alumno realizado por el tutor/a del centro de trabajo
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 5, $valoracionAlumno->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 4, $valoracionAlumno->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 3, $valoracionAlumno->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 2, $valoracionAlumno->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 1, $valoracionAlumno->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Seguimiento hecho por su profesor/a
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 5, $valoracionAlumno->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 4, $valoracionAlumno->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 3, $valoracionAlumno->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 2, $valoracionAlumno->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 1, $valoracionAlumno->opcion_4) }}
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
                                {{ Form::radio('opcion_5', 5, $valoracionAlumno->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 4, $valoracionAlumno->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 3, $valoracionAlumno->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 2, $valoracionAlumno->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 1, $valoracionAlumno->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Adecuación de la formación recibida en el centro docente con las prácticas
                            realizadas.
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 5, $valoracionAlumno->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 4, $valoracionAlumno->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 3, $valoracionAlumno->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 2, $valoracionAlumno->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 1, $valoracionAlumno->opcion_6) }}
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
                                {{ Form::radio('opcion_7', 5, $valoracionAlumno->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 4, $valoracionAlumno->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 3, $valoracionAlumno->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 2, $valoracionAlumno->opcion_7) }}
                                {!! $errors->first('opcion_7', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_7', 1, $valoracionAlumno->opcion_7) }}
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
                                {{ Form::radio('opcion_8', 5, $valoracionAlumno->opcion_8) }}
                                {!! $errors->first('opcion_8', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_8', 4, $valoracionAlumno->opcion_8) }}
                                {!! $errors->first('opcion_8', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_8', 3, $valoracionAlumno->opcion_8) }}
                                {!! $errors->first('opcion_8', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_8', 2, $valoracionAlumno->opcion_8) }}
                                {!! $errors->first('opcion_8', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_8', 1, $valoracionAlumno->opcion_8) }}
                                {!! $errors->first('opcion_8', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Aspectos a mejorar de la fase de formación en centros de trabajo: </td>
                        <td colspan="5">
                            <div class="form-group text-center">
                                {{ Form::text('aspectos_mejorables', $valoracionAlumno->aspectos_mejorables, ['class' => 'form-control' . ($errors->has('aspectos_mejorables') ? ' is-invalid' : '') ]) }}
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
                                {{ Form::text('aspectos_destacables', $valoracionAlumno->aspectos_destacables, ['class' => 'form-control' . ($errors->has('aspectos_destacables') ? ' is-invalid' : '') ]) }}
                                {!! $errors->first('aspectos_destacables', '<div class="invalid-feedback">:message</div>
                                ') !!}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="box-footer mt20 d-flex justify-content-end me-3">
                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
            </div>
        </div>
    </div>
</div>