@extends('layouts.app')

@section('template_title')
Cuestionario Empresa
@endsection

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Cuestionario Empresa') }}
                        </span>

                        @if ($cuestionarioCount == 0)
                        <span>No existe ningún cuestionario de empresa</span>
                        <div class="float-right">
                            <a href="{{ route('cuestionario-empresa.create', ['cuadernoTutor_Id' => $cuadernoTutorId]) }}"
                                class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear cuestionario empresa') }}
                            </a>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            @if ($cuestionarioCount > 0)

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
                            @endif
                            <tbody>
                                @foreach ($cuestionarioEmpresa as $cuestionarioEmpresa)

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
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_1 == 9 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_1 == 8 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_1 == 7 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_1 == 6 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_1 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_1 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_1 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_1 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_1 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>
                                        ¿Cómo valoran sus conocimientos técnicos?
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_2 == 9 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_2 == 8 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_2 == 7 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_2 == 6 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_2 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_2 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_2 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_2 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_2 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>
                                        ¿Cómo valoran la ejecución de los trabajos?
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_3 == 9 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_3 == 8 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_3 == 7 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_3 == 6 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_3 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_3 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_3 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_3 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_3 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>
                                        ¿Cómo valoran la actitud e integración en el
                                        grupo de trabajo?
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_4 == 9 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_4 == 8 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_4 == 7 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_4 == 6 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_4 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_4 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_4 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_4 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_4 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>
                                        ¿Cogería otros alumnos el próximo curso?
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_5 == 9 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_5 == 8 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_5 == 7 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_5 == 6 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_5 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_5 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_5 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_5 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_5 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>
                                        ¿Cómo valora el grado de implicación de los
                                        tutores docentes?
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_6 == 9 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_6 == 8 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_6 == 7 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_6 == 6 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_6 == 5 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_6 == 4 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_6 == 3 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_6 == 2 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                    <td class="text-center">
                                        <i
                                            class="{{ $cuestionarioEmpresa->opcion_6 == 1 ? 'bi bi-check-circle-fill' : 'bi bi-circle' }}"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Sugerencias</td>
                                    <td colspan="9" class="text-center">{{ $cuestionarioEmpresa->sugerencias }}</td>
                                </tr>
                                <td>
                                    <form action="{{ route('cuestionario-empresa.destroy',$cuestionarioEmpresa->ID) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa fa-fw fa-trash"></i>
                                            {{ __('Delete') }}</button>
                                    </form>
                                </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection