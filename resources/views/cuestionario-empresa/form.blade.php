<div class="box box-info padding-1">
    <div class="box-body">
        <input type="hidden" name="Id_cuaderno" value="{{ $cuadernoTutorId }}">

        <div class="form-group">
            {{ Form::label('Alumno') }}
            {{ Form::select('dni_alumno', $alumnos, $cuestionarioEmpresa->dni_alumno, ['class' => 'form-control w-25' . ($errors->has('dni_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un alumno']) }}
            {!! $errors->first('dni_alumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead text-center">
                    <tr>
                        <th></th>
                        <th></th>
                        <th colspan="2">Mucho</th>
                        <th colspan="2">Bastante</th>
                        <th></th>
                        <th colspan="2">Poco</th>
                        <th colspan="2">Nada</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td></td>
                        <td></td>
                        <td>9</td>
                        <td>8</td>
                        <td>7</td>
                        <td>6</td>
                        <td>5</td>
                        <td>4</td>
                        <td>3</td>
                        <td>2</td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td>1.</td>
                        <td>¿Cómo valoran el grado de preparación de nuestro alumno?</td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 9, $cuestionarioEmpresa->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 8, $cuestionarioEmpresa->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 7, $cuestionarioEmpresa->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 6, $cuestionarioEmpresa->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 5, $cuestionarioEmpresa->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 4, $cuestionarioEmpresa->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 3, $cuestionarioEmpresa->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 2, $cuestionarioEmpresa->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_1', 1, $cuestionarioEmpresa->opcion_1) }}
                                {!! $errors->first('opcion_1', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            ¿Cómo valoran sus conocimientos técnicos?
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 9, $cuestionarioEmpresa->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 8, $cuestionarioEmpresa->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 7, $cuestionarioEmpresa->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 6, $cuestionarioEmpresa->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 5, $cuestionarioEmpresa->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 4, $cuestionarioEmpresa->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 3, $cuestionarioEmpresa->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 2, $cuestionarioEmpresa->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_2', 1, $cuestionarioEmpresa->opcion_2) }}
                                {!! $errors->first('opcion_2', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            ¿Cómo valoran la ejecución de los trabajos?
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 9, $cuestionarioEmpresa->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 8, $cuestionarioEmpresa->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 7, $cuestionarioEmpresa->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 6, $cuestionarioEmpresa->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 5, $cuestionarioEmpresa->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 4, $cuestionarioEmpresa->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 3, $cuestionarioEmpresa->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 2, $cuestionarioEmpresa->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_3', 1, $cuestionarioEmpresa->opcion_3) }}
                                {!! $errors->first('opcion_3', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            ¿Cómo valoran la actitud e integración en el
                            grupo de trabajo?
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 9, $cuestionarioEmpresa->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 8, $cuestionarioEmpresa->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 7, $cuestionarioEmpresa->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 6, $cuestionarioEmpresa->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 5, $cuestionarioEmpresa->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 4, $cuestionarioEmpresa->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 3, $cuestionarioEmpresa->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 2, $cuestionarioEmpresa->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_4', 1, $cuestionarioEmpresa->opcion_4) }}
                                {!! $errors->first('opcion_4', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            ¿Cogería otros alumnos el próximo curso?
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 9, $cuestionarioEmpresa->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 8, $cuestionarioEmpresa->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 7, $cuestionarioEmpresa->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 6, $cuestionarioEmpresa->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 5, $cuestionarioEmpresa->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 4, $cuestionarioEmpresa->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 3, $cuestionarioEmpresa->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 2, $cuestionarioEmpresa->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_5', 1, $cuestionarioEmpresa->opcion_5) }}
                                {!! $errors->first('opcion_5', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>
                            ¿Cómo valora el grado de implicación de los
                            tutores docentes?
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 9, $cuestionarioEmpresa->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 8, $cuestionarioEmpresa->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 7, $cuestionarioEmpresa->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 6, $cuestionarioEmpresa->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 5, $cuestionarioEmpresa->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 4, $cuestionarioEmpresa->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 3, $cuestionarioEmpresa->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 2, $cuestionarioEmpresa->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-group">
                                {{ Form::radio('opcion_6', 1, $cuestionarioEmpresa->opcion_6) }}
                                {!! $errors->first('opcion_6', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            {{ Form::label('sugerencias') }}
                        </td>
                        <td colspan="10">
                            <div class="form-group text-center">
                                {{ Form::text('sugerencias', $cuestionarioEmpresa->sugerencias, ['class' => 'form-control' . ($errors->has('sugerencias') ? ' is-invalid' : ''), 'placeholder' => 'Sugerencias']) }}
                                {!! $errors->first('sugerencias', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="box-footer mt20 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
            </div>
        </div>
    </div>
</div>