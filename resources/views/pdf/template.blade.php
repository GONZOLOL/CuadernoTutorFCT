@extends('pdf/layout')
@section('content')
<style>
body {
  font-family: Arial, sans-serif;
}

h1 {
  font-size: 20px;
  text-align: center;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th,
td {
  font-size: 12px;

  border: 1px solid black;
  padding: 8px;
}

th {
  font-size: 12px;

  background-color: lightgray;
  text-align: left;
}
</style>
<h1>Datos de alumnos</h1>

<div style="page-break-after: always;"></div>

@foreach ($alumnos as $row)
<h1>FICHA DE ALUMNO/A DE LA FCT</h1>
<table>
  <tr>
    <th>DNI</th>
    <td colspan='5'>{{ $row->DNI }}</td>
  </tr>
  <tr>
    <th>Apellidos</th>
    <td>{{ $row->Apellidos }}</td>
    <th>Nombre</th>
    <td colspan='3'>{{ $row->Nombre }}</td>
  </tr>
  <tr>
    <th>Domicilio</th>
    <td colspan='5'>{{ $row->Domicilio }}</td>
  </tr>
  <tr>
    <th>POBLACIÓN:</th>
    <td>{{ $row->Población }}</td>
    <th>
      CP:
    <td>
      </th>{{ $row->Codigo_postal }}</td>
    <th>PROVINCIA:</th>
    <td>{{ $row->Provincia }}</td>
  </tr>
  <tr>
    <th>FECHA NACIMIENTO:</th>
    <td>{{ $row->Fecha_nacimiento }}</td>
    <th>EDAD:</th>
    <td colspan='3'>{{ $row->Edad }}</td>
  </tr>
  <tr>
    <th>TELÉFONO</th>
    <td>{{ $row->Teléfono }}</td>
    <th>e-mail:</th>
    <td>{{ $row->Email }}</td>
    <th>NOMBRE DEL PADRE:</th>
    <td>{{ $row->Nombre_padre }}</td>
  </tr>
  <tr>
    <th>SOLICITA BECA:</th>
    <td>@if($row->Solicita_beca == 1) X @endif</td>
    <th>HOMBRE</th>
    <td>@if($row->Género == 'm') X @endif</td>
    <th>MUJER</th>
    <td>@if($row->Género == 'f') X @endif</td>
  </tr>
  <td colspan='6'>
    OBSERVACIONES:
    {{ $row->Observaciones }}</td>
  <tr>
    <th colspan='6'>ALUNMO/A:</th>
  </tr>
  <tr>
    <th>ENSEÑANZA:</th>
    <td colspan='3'>CFGS DESARROLLO DE APLICACIONES WEB</td>
    <th>TRIMESTRE:</th>
    <td>
      {{$trimestre}}
    </td>
  </tr>
  <tr>
    <th>CUENTA BANCARIA:</th>
    <td colspan='5'>@if($row->Solicita_beca == 1) {{ $row->Cuenta_bancaria }} @endif</td>
  </tr>

  <tr>
    <th colspan='3'>TIPO DE EMPRESA DONDE DESEA REALIZAR LA FCT:</th>
    <td>{{ $row->Tipo_empresa_FCT }}</td>
  </tr>
  //acaba el bucle de la tabla alumno

  <tr>
    <th colspan='6'>EMPRESA Y CENTROS DE TRABAJO DONDE REALIZA LA FCT</th>
  </tr>
  @forelse ($centrosTrabajo as $centroTrabajo)
  <tr>
    <th>CENTRO DE TRABAJO:</th>
    <td>{{ $centroTrabajo->Denominacion }}</td>
    <th>DOMICILIO:</th>
    <td>{{ $centroTrabajo->Domicilio }}</td>
    <th>LOCALIDAD:</th>
    <td>{{ $centroTrabajo->Poblacion }}</td>
  <tr>
    <th>DISTANCIA EN KM (ida y vuelta):</th>
    <td>{{ $centroTrabajo->Distancia }}</td>
    //OBTENERLO DE EMPRESAS
    <th>TELÉFONO:</th>
    <td colspan='3'>{{$empresa->Telefono}}</td>
  </tr>
  @empty
  <td colspan="7">No hay centros de trabajo disponibles.</td>
  @endforelse
  </tr>
  @foreach ($tutoresLaborales as $tutorLaboral)
  @if ($tutorLaboral->Id_cuaderno == $cuaderno->Id_cuaderno)
  <tr>
    <th>TUTOR LABORAL:</th>
    <td>{{ $tutorLaboral->Nombre }} {{ $tutorLaboral->Apellidos }}</td>
    <th>DNI:</th>
    <td>{{ $tutorLaboral->DNI }}</td>
  </tr>
  @endif
  @endforeach


  @foreach ($tutoresDocentes as $tutorDocente)
  <tr>
    <th>TUTOR DOCENTE:</th>
    <td>{{ $tutorDocente->Nombre }} {{ $tutorDocente->Apellido_1 }} {{ $tutorDocente->Apellido_2 }}</td>
    <th>DNI:</th>
    <td>{{ $tutorDocente->DNI }}</td>
  </tr>
  @endforeach

</table>
<div style="page-break-before: always;"></div>

@endforeach

<div style="page-break-before: always;"></div>

@foreach ($alumnos as $alumno)
<h1>EVALUACIÓN FINAL</h1>
<h1>valoracion DEL TUTOR LABORAL</h1>

<table>
  <!-- Tabla de Tutores Docentes -->
  <tr>
    <th>Datos del alumno/a </th>
  </tr>
  <td>{{ $alumno->Apellidos }} {{ $alumno->Nombre }}</td>
  <tr>
  <tr>
  </tr>
  <th>Tutor/a del alumno/a en el centro de trabajo </th>
  </tr>
  <tr>
    @foreach ($tutoresLaborales as $tutorLaboral)
    <td>{{ $tutorLaboral->Nombre }} {{ $tutorLaboral->Apellidos }}</td>
    @endforeach
  </tr>
  <tr>
    <th>valoracion de centros de trabajo</th>
  </tr>
  @foreach ($tutorLaboralValoracion as $valoracion)
  @if ($valoracion->dni_alumno == $alumno->DNI)

  <tr>
    <th></th>
    <th>Negativa</th>
    <th>Positiva</th>
    <th>Excelente</th>
  </tr>
  <tr>
    <th>Competencias profesionales</th>
    <td>@if ($valoracion->opcion_1 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_1 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_1 == 1) X @endif</td>
  </tr>
  <tr>
    <th>Competencias organizativas</th>
    <td>@if ($valoracion->opcion_2 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_2 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_2 == 1) X @endif</td>
  </tr>
  <tr>
    <th>Competencias relacionales</th>
    <td>@if ($valoracion->opcion_3 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_3 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_3 == 1) X @endif</td>
  </tr>
  <tr>
    <th>Capacidad de respuesta a las contingencias</th>
    <td>@if ($valoracion->opcion_4 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_4 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_4 == 1) X @endif</td>
  </tr>
  <tr>
    <th>Otro aspecto 1</th>
    <td>@if ($valoracion->opcion_5 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_5 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_5 == 1) X @endif</td>
  </tr>
  <tr>
    <th>Otro aspecto 2</th>
    <td>@if ($valoracion->opcion_6 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_6 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_6 == 1) X @endif</td>
  </tr>
  <tr>
    <th>Otro aspecto 3</th>
    <td>@if ($valoracion->opcion_7 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_7 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_7 == 1) X @endif</td>
  </tr>
</table>

<div style="display: flex; justify-content: space-between; align-items: center;">
  <p>EVALUACIÓN FINAL:</p>
  <label for="apto">APTO</label>
  <input type="radio" id="apto" name="evaluacion_final" value="apto" @if ($valoracion->evaluacion_final == 1) checked
  @endif>
  <label for="no_apto">NO APTO</label>
  <input type="radio" id="no_apto" name="evaluacion_final" value="no_apto" @if ($valoracion->evaluacion_final == 2)
  checked @endif>
</div>



<p>Otros aspectos detalle el otro aspecto 1, otro aspecto 2 y otro aspecto 3:</p>
<textarea name="aspectos_mejorar" rows="5" cols="50">{{$valoracion->opcion_5_detalle}}</textarea>

<p>Áreas y puestos de trabajo donde ha desarrollado las actividades formativas:</p>
<textarea name="aspectos_destacar" rows="5" cols="50">{{$valoracion->opcion_6_detalle}}</textarea>

<p>Modificaciones a introducir en el programa formativo:</p>
<textarea name="aspectos_destacar" rows="5" cols="50">{{$valoracion->opcion_7_detalle}}</textarea>
@endif

@endforeach


<p>Finalizada la fase de formación y de acuerdo con la valoracion emitida por el tutor/laboral se determina:</p>

<p>En ________ a _____ de __________________ de___________</p>
<p>El/LA TUTOR/A DEL CENTRO DE TRABAJO</p>


<p>Fdo:_____________________________</p>


<div style="page-break-before: always;"></div>

@endforeach
@foreach ($alumnos as $alumno)

<div style="page-break-before: always;"></div>

<h1>valoracion DEL TUTOR DOCENTE</h1>
<table>
  <!-- Tabla de Tutores Docentes -->
  <tr>
    <th>Datos del alumno/a </th>
  </tr>
  <td>{{ $alumno->Apellidos }} {{ $alumno->Nombre }}</td>
  <tr>
    @foreach ($tutorDocenteValoracion as $valoracion)

    @if ($valoracion->dni_alumno == $alumno->DNI)
  <tr>
    <th>Centro de trabajo:</th>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
  </tr>
  <tr>
    <th>Posibilidades formativas que ofrece la empresa</th>
    <td>@if ($valoracion->opcion_1 == 1) X @endif</td>
    <td>@if ($valoracion->opcion_1 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_1 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_1 == 4) X @endif</td>
    <td>@if ($valoracion->opcion_1 == 5) X @endif</td>
  </tr>
  <tr>
    <th>Cumplimiento del programa formativo por parte de la empresa</th>
    <td>@if ($valoracion->opcion_2 == 1) X @endif</td>
    <td>@if ($valoracion->opcion_2 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_2 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_2 == 4) X @endif</td>
    <td>@if ($valoracion->opcion_2 == 5) X @endif</td>
  </tr>
  <tr>
    <th>Seguimiento del alumno realizado por el tutor/a del centro de trabajo</th>
    <td>@if ($valoracion->opcion_3 == 1) X @endif</td>
    <td>@if ($valoracion->opcion_3 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_3 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_3 == 4) X @endif</td>
    <td>@if ($valoracion->opcion_3 == 5) X @endif</td>
  </tr>
  <tr>
    <th>Apoyo dado al profesor/a responsable del seguimiento</th>
    <td>@if ($valoracion->opcion_4 == 1) X @endif</td>
    <td>@if ($valoracion->opcion_4 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_4 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_4 == 4) X @endif</td>
    <td>@if ($valoracion->opcion_4 == 5) X @endif</td>
  </tr>
  <tr>
    <th>Posibilidades laborales que ofrece la empresa al alumnado que finalice la fase de formación en centros de
      trabajo</th>
    <td>@if ($valoracion->opcion_5 == 1) X @endif</td>
    <td>@if ($valoracion->opcion_5 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_5 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_5 == 4) X @endif</td>
    <td>@if ($valoracion->opcion_5 == 5) X @endif</td>
  </tr>
  <tr>
    <th>Calidad de los informes del tutor/a del centro de trabajo</th>
    <td>@if ($valoracion->opcion_6 == 1) X @endif</td>
    <td>@if ($valoracion->opcion_6 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_6 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_6 == 4) X @endif</td>
    <td>@if ($valoracion->opcion_6 == 5) X @endif</td>
  </tr>
  <tr>
    <th>Nivel de satisfacción mostrado con la empresa por el alumnado que ha realizado la fase de formación en
      centros de trabajo en ella</th>
    <td>@if ($valoracion->opcion_7 == 1) X @endif</td>
    <td>@if ($valoracion->opcion_7 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_7 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_7 == 4) X @endif</td>
    <td>@if ($valoracion->opcion_7 == 5) X @endif</td>
  </tr>
  <tr>
    <th>valoracion general de las prácticas por el profesor/a responsable del seguimiento</th>
    <td>@if ($valoracion->opcion_8 == 1) X @endif</td>
    <td>@if ($valoracion->opcion_8 == 2) X @endif</td>
    <td>@if ($valoracion->opcion_8 == 3) X @endif</td>
    <td>@if ($valoracion->opcion_8 == 4) X @endif</td>
    <td>@if ($valoracion->opcion_8 == 5) X @endif</td>
  </tr>
</table>

<p>Aspectos a mejorar de la fase de formación en centros de trabajo:</p>
<textarea name="aspectos_mejorar" rows="5" cols="50">{{$valoracion->aspectos_mejorables}}</textarea>

<p>Aspectos a destacar de la fase de formación en centros de trabajo:</p>
<textarea name="aspectos_destacar" rows="5" cols="50">{{$valoracion->aspectos_destacables}}</textarea>

<p>Finalizada la fase de formación y de acuerdo con la valoracion emitida por el tutor/laboral se determina:</p>

<div style="display: flex; justify-content: space-between; align-items: center;">
  <p>EVALUACIÓN FINAL:</p>
  <label for="apto">APTO</label>
  <input type="radio" id="apto" name="evaluacion_final" value="apto" @if ($valoracion->evaluacion_final == 1)
  checked
  @endif>
  <label for="no_apto">NO APTO</label>
  <input type="radio" id="no_apto" name="evaluacion_final" value="no_apto" @if ($valoracion->evaluacion_final == 2)
  checked @endif>
</div>
@endif
@endforeach
<p>En ________ a _____ de __________________ de___________</p>
<p>El/LA TUTOR/A DEL CENTRO DE TRABAJO</p>


@endforeach


<div style="page-break-before: always;"></div>
@foreach ($cuestionarioEmpresa as $cuestionarioEmpresa)
@foreach ($alumnos as $Alumno)

@if ($cuestionarioEmpresa->dni_alumno == $Alumno->DNI)
<h2>CUESTIONARIO A LA EMPRESA</h2>
<div>
  <label for="alumno">ALUMNO: {{$Alumno -> Nombre}} {{$Alumno -> Apellidos}}</label>
</div>
<div>
  <label for="empresa">EMPRESA: {{$empresa->Nombre}}
  </label>
</div>
<p>Queremos recoger su opinión para saber si están satisfechos con la preparación que los alumnos llevan a la Formación
  en Centros de Trabajo.</p>
<p>En cada apartado señale con una cruz el número que se corresponda con tu valoración desde 9 (Muy satisfecho) a 1
  (Nada Satisfecho).</p>
<p>Por último, recordar que la encuesta es anónima, por lo que no deben poner nombres ni señales de identificación, y
  deben entregarla al tutor en el sobre adjunto cerrado.</p>

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
    <tr>
      <td>1.</td>
      <td>¿Cómo valoran el grado de preparación de nuestro alumno?</td>
      @for ($i = 9; $i >= 1; $i--)
      <td class="text-center">
        @if ($cuestionarioEmpresa->opcion_1 == $i)
        X
        @endif
      </td>
      @endfor
    </tr>
    <tr>
      <td>2.</td>
      <td>¿Cómo valoran sus conocimientos técnicos?</td>
      @for ($i = 9; $i >= 1; $i--)
      <td class="text-center">
        @if ($cuestionarioEmpresa->opcion_2 == $i)
        X
        @endif
      </td>
      @endfor
    </tr>
    <tr>
      <td>3.</td>
      <td>¿Cómo valoran la ejecución de los trabajos?</td>
      @for ($i = 9; $i >= 1; $i--)
      <td class="text-center">
        @if ($cuestionarioEmpresa->opcion_3 == $i)
        X
        @endif
      </td>
      @endfor
    </tr>
    <tr>
      <td>4.</td>
      <td>¿Cómo valoran la actitud e integración en el grupo de trabajo?</td>
      @for ($i = 9; $i >= 1; $i--)
      <td class="text-center">
        @if ($cuestionarioEmpresa->opcion_4 == $i)
        X
        @endif
      </td>
      @endfor
    </tr>
    <tr>
      <td>5.</td>
      <td>¿Cogería otros alumnos el próximo curso?</td>
      @for ($i = 9; $i >= 1; $i--)
      <td class="text-center">
        @if ($cuestionarioEmpresa->opcion_5 == $i)
        X
        @endif
      </td>
      @endfor
    </tr>
    <tr>
      <td>6.</td>
      <td>¿Cómo valora el grado de implicación de los tutores docentes?</td>
      @for ($i = 9; $i >= 1; $i--)
      <td class="text-center">
        @if ($cuestionarioEmpresa->opcion_6 == $i)
        X
        @endif
      </td>
      @endfor
    </tr>
    //arreglar sugerencias copia en txt
  </tbody>
</table>
@endif
@endforeach
@endforeach

@foreach ($valoracionAlumno as $valoracion)
@foreach ($alumnos as $alumno)
<div style="page-break-before: always;"></div>


<h1colspan="2">VALORACIÓN DEL ALUMNO/A</h1>

  <table>

    <tbody>
      <tr>
        <td colspan="2">Datos del ciclo formativo</td>
      </tr>
      <tr>
        <td>Nombre del ciclo:</td>
        <td>DESARROLLO DE APLICACIONES WEB</td>
      </tr>
      <tr>
        <td>Grado:</td>
        <td>SUPERIOR</td>
      </tr>
      <tr>
        <td colspan="2">Datos del alumno/alumna</td>
      </tr>
      <tr>
        <td>Nombre y apellidos:</td>
        <td>{{$alumno->Nombre}}{{$alumno->Apellidos}}</td>
      </tr>
      <tr>
        <td colspan="2">Datos de la prácticas</td>
      </tr>
      <tr>
        <td>Curso académico:</td>
        <td>{{$cursoActual}}</td>
      </tr>
      <tr>
        <td>Periodo de Realización de la FCT</td>
        <td>
          Primer trimestre <input type="checkbox" {{ $trimestre == 1 ? 'checked' : '' }}>
          Segundo trimestre <input type="checkbox" {{ $trimestre == 2 ? 'checked' : '' }}>
          Tercer trimestre <input type="checkbox" {{ $trimestre == 3 ? 'checked' : '' }}>
        </td>
      </tr>
    </tbody>
  </table>

  <table class="table table-striped table-hover">

    <thead class="thead text-center">

      <tr>
        <th></th>
        <th colspan="5">Centro de trabajo:</th>
      </tr>
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
        <td class="text-center">
          {{ $valoracion->opcion_1 == 5 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_1 == 4 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_1 == 3 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_1 == 2 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_1 == 1 ? 'X' : '' }}
        </td>
      </tr>
      <tr>
        <td>
          Cumplimiento del programa formativo por parte de la empresa
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_2 == 5 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_2 == 4 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_2 == 3 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_2 == 2 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_2 == 1 ? 'X' : '' }}
        </td>
      </tr>
      <tr>
        <td>
          Seguimiento del alumno realizado por el tutor/a del centro de trabajo
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_3 == 5 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_3 == 4 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_3 == 3 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_3 == 2 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_3 == 1 ? 'X' : '' }}
        </td>
      </tr>
      <tr>
        <td>
          Seguimiento hecho por su profesor/a
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_4 == 5 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_4 == 4 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_4 == 3 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_4 == 2 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_4 == 1 ? 'X' : '' }}
        </td>
      </tr>
      <tr>
        <td>
          Posibilidades laborales que ofrece la empresa al alumnado que finalice la
          fase de formación en centros de trabajo
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_5 == 5 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_5 == 4 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_5 == 3 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_5 == 2 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_5 == 1 ? 'X' : '' }}
        </td>
      </tr>
      <tr>
        <td>
          Adecuación de la formación recibida en el centro docente con las prácticas
          realizadas.
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_6 == 5 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_6 == 4 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_6 == 3 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_6 == 2 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_6 == 1 ? 'X' : '' }}
        </td>
      </tr>
      <tr>
        <td>
          Nivel de satisfacción mostrado con la empresa por el alumnado que ha
          realizado la fase de formación en centros de trabajo en ella.
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_7 == 5 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_7 == 4 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_7 == 3 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_7 == 2 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_7 == 1 ? 'X' : '' }}
        </td>
      </tr>
      <tr>
        <td>
          valoracion general de las prácticas por el profesor/a responsable del
          seguimiento.
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_8 == 5 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_8 == 4 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_8 == 3 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_8 == 2 ? 'X' : '' }}
        </td>
        <td class="text-center">
          {{ $valoracion->opcion_8 == 1 ? 'X' : '' }}
        </td>
      </tr>
      <tr>
        <td>
          Aspectos a mejorar de la fase de formación en centros de trabajo:
        </td>
        <td colspan="6" class="text-center">
          @if (!empty($valoracion->aspectos_mejorables))
          {{ $valoracion->aspectos_mejorables }}
          @else
          No hay aspectos a mejorar registrados.
          @endif
        </td>
      </tr>
      <tr>
        <td>
          Aspectos a destacar de la fase de formación en centros de trabajo:
        </td>
        <td colspan="6" class="text-center">
          @if (!empty($valoracion->aspectos_destacables))
          {{ $valoracion->aspectos_destacables }}
          @else
          No hay aspectos a destacar registrados.
          @endif
        </td>
      </tr>
    </tbody>
  </table>
  @endforeach
  <div style="page-break-before: always;"></div>
  @endforeach

  <h1>DATOS EMPRESA</h1>
  <div style="page-break-before: always;"></div>
  <h1>FICHA DE EMPRESAS COLABORADORAS</h1>
  <table>
    <tr>
      <th>CIF:</th>
      <td>{{ $empresa->CIF }}</td>
    </tr>
    <tr>
      <th>NOMBRE DE LA EMPRESA:</th>
      <td>{{ $empresa->Nombre }}</td>
    </tr>
    <tr>
      <th>DOMICILIO SOCIAL:</th>
      <td>{{ $empresa->Domicilio_social }}</td>
    </tr>
    <tr>
      <th>POBLACIÓN:</th>
      <td>{{ $empresa->Poblacion }}</td>
      <th>CP:</th>
      <td>{{ $empresa->Codigo_postal }}</td>
      <th>PROVINCIA:</th>
      <td>{{ $empresa->Provincia }}</td>
    </tr>
    <tr>
      <th>TELÉFONO:</th>
      <td>{{ $empresa->Telefono }}</td>
      <th>FAX:</th>
      <td>{{ $empresa->Fax }}</td>

    </tr>
    <tr>
      <th>MÓVIL:</th>
      <td>{{ $empresa->Movil }}</td>
    </tr>
    <tr>
      <th>TITULARIDAD:</th>
      <td><input type="checkbox" name="titularidad" value="PÚBLICA"
          {{ $empresa->Titularidad == 'PÚBLICA' ? 'checked' : '' }}> PÚBLICA</td>
      <td><input type="checkbox" name="titularidad" value="PRIVADA"
          {{ $empresa->Titularidad == 'PRIVADA' ? 'checked' : '' }}> PRIVADA</td>
      <td><input type="checkbox" name="titularidad" value="COLABORA"
          {{ $empresa->Titularidad == 'COLABORA' ? 'checked' : '' }}> COLABORA EN EL PRESENTE CURSO</td>
    </tr>
    <tr>
      <th>ACTIVIDAD:</th>
      <td>{{ $empresa->Actividad }}</td>
    </tr>
    <tr>
      <th>REPRESENTANTE LEGAL:</th>
      <td>{{ $empresa->Nombre_representante_legal }}</td>
    </tr>
    <tr>
      <th>NIF:</th>
      <td>{{ $empresa->Nombre_representante_legal }}</td>
    </tr>
    <tr>
      <th>CARGO EN LA EMPRESA:</th>
      <td>{{ $empresa->Cargo_representante_legal }}</td>
    </tr>
    <tr>
      <th>HORA DE APERTURA:</th>
      <td>{{ $empresa->Horario_apertura }}</td>
      <th>HORA DE CIERRE:</th>
      <td>{{ $empresa->Horario_cierre }}</td>
    </tr>
    <tr>
      <th>OBSERVACIONES:</th>
      <td>{{ $empresa->Observaciones }}</td>
    </tr>
  </table>
  @forelse ($centrosTrabajo as $centroTrabajo)
  @if ($centroTrabajo->CIF_EMPRESA == $empresa->CIF)

  <table>
    <tr>
      <th>CENTRO DE TRABAJO</th>
    </tr>
    <tr>
      <th>DENOMINACIÓN:</th>
      <td>{{ $centroTrabajo->Denominacion }}</td>
    </tr>
    <tr>
      <th>DOMICILIO:</th>
      <td>{{ $centroTrabajo->Domicilio }}</td>
    </tr>
    <tr>
      <th>POBLACIÓN:</th>
      <td>{{ $centroTrabajo->Poblacion }}</td>
      <th>CP:</th>
      <td>{{ $centroTrabajo->Codigo_postal }}</td>
      <th>PROVINCIA:</th>
      <td>{{ $centroTrabajo->Provincia }}</td>
    </tr>
    <tr>
      <th>DISTANCIA EN KM (ida y vuelta):</th>
      <td>{{ $centroTrabajo->Distancia }}</td>
    </tr>
    @foreach ($tutoresLaborales as $tutorLaboral)
    @if ($tutorLaboral->Id_cuaderno == $cuaderno->Id_cuaderno)

    <tr>
      <th>TUTOR LABORAL:</th>
      <td>{{ $tutorLaboral->Nombre }} {{ $tutorLaboral->Apellidos }}</td>
      <th>D.N.I:</th>
      <td>{{ $tutorLaboral->DNI }}</td>
    </tr>
    @endif
    @endforeach
    @foreach ($tutoresDocentes as $tutorDocente)
    <tr>
      <th>TUTOR DOCENTE:</th>
      <td>{{ $tutorDocente->Nombre }} {{ $tutorDocente->Apellido_1 }} {{ $tutorDocente->Apellido_2 }}</td>
      <th>DNI:</th>
      <td>{{ $tutorDocente->DNI }}</td>
    </tr>
    @endforeach
    <tr>
      <td>PREFERENCIAS DE ALUMNADO PARA FCT:</td>
    </tr>
  </table>
  @endif

  @empty
  <p>No hay centros de trabajo disponibles.</p>
  @endforelse


  <div style="page-break-before: always;"></div>

  <h1>PLAN DE FORMACIÓN DE LA FCT</h1>
  <p>EL PLAN DE FORMACIÓN APARECE COMO UN DOCUMENTO ANEXO A ESTE CUADERNO DEL TUTOR (ANEXO I)</p>
  <div style="page-break-before: always;"></div>
  <h1>REGISTRO DE VISITAS</h1>

  <table>
    <tr>
      <th>EMPRESA</th>
      <td>{{ $empresa->Nombre }}</td>
    </tr>
    <tr>
      <th>CENTRO DE TRABAJO</th>
      <td>{{ $centroTrabajo->Denominacion }}</td>
    </tr>
    <tr>
      <th>DOMICILIO</th>
      <td>{{ $centroTrabajo->Domicilio }}</td>
    </tr>
    <tr>
      <th>POBLACIÓN</th>
      <td>{{ $centroTrabajo->Poblacion }}</td>
    </tr>
    @foreach ($tutoresLaborales as $tutorLaboral)
    @if ($tutorLaboral->Id_cuaderno == $cuaderno->Id_cuaderno)
    <tr>
      <th>TUTOR LABORAL:</th>
      <td>{{ $tutorLaboral->Nombre }} {{ $tutorLaboral->Apellidos }}</td>
    </tr>
    @endif
    @endforeach
    @foreach ($tutoresDocentes as $tutorDocente)
    <tr>
      <th>TUTOR DOCENTE:</th>
      <td>{{ $tutorDocente->Nombre }} {{ $tutorDocente->Apellido_1 }} {{ $tutorDocente->Apellido_2 }}</td>
    </tr>
    @endforeach
    <tr>
      <th>ALUMNOS</th>
      <td>
        @foreach ($alumnos as $alumno)
        <p>{{ $alumno->Nombre }} {{ $alumno->Apellidos }}</p>
        @endforeach
      </td>
    </tr>
    <tr>
      <th>DISTANCIA IES-EMPRESA</th>
      <td>{{ $centroTrabajo->Distancia }} KM</td>
    </tr>
  </table>

  <table>
    <tr>
      <th>NÚMERO TOTAL DE VISITAS PREVISTAS</th>
      <td>{{ $visitas_previstas }}</td>
    </tr>
  </table>

  @foreach($visitas as $visita)
  <table>
    <tr>
      <th>FECHA</th>
      <th>INCIDENCIAS</th>
      <th>EMPRESA (SELLO)</th>
      <th>TRAYECTO (Km)</th>
    </tr>
    <tr>
      <td>{{$visita -> Fecha}}</td>
      <td>{{$visita -> Incidencia}}</td>
      <td></td>
      <td>{{$centroTrabajo -> Distancia}} KM</td>

    </tr>
  </table>
  @endforeach
  <textarea name="Observaciones" id="" cols="30" rows="10">
  {{$visita -> Observaciones}}
  </textarea>



  @foreach($visitas as $visita)
  <div style="page-break-before: always;"></div>
  <h1>REGISTRO DE VISITAS</h1>
  <table>
    <tr>
      <th>EMPRESA</th>
      <td>{{ $empresa->Nombre }}</td>
    </tr>
    <tr>
      <th>CENTRO DE TRABAJO</th>
      <td>{{ $centroTrabajo->Denominacion }}</td>
    </tr>
    <tr>
      <th>DOMICILIO</th>
      <td>{{ $centroTrabajo->Domicilio }}</td>
    </tr>
    <tr>
      <th>POBLACIÓN</th>
      <td>{{ $centroTrabajo->Poblacion }}</td>
    </tr>
    @foreach ($tutoresLaborales as $tutorLaboral)
    @if ($tutorLaboral->Id_cuaderno == $cuaderno->Id_cuaderno)
    <tr>
      <th>TUTOR LABORAL:</th>
      <td>{{ $tutorLaboral->Nombre }} {{ $tutorLaboral->Apellidos }}</td>
    </tr>
    @endif
    @endforeach
    @foreach ($tutoresDocentes as $tutorDocente)
    <tr>
      <th>TUTOR DOCENTE:</th>
      <td>{{ $tutorDocente->Nombre }} {{ $tutorDocente->Apellido_1 }} {{ $tutorDocente->Apellido_2 }}</td>
    </tr>
    @endforeach
    <tr>
      <th>ALUMNOS</th>
      <td>
        @foreach ($alumnos as $alumno)
        <p>{{ $alumno->Nombre }} {{ $alumno->Apellidos }}</p>
        @endforeach
      </td>
    </tr>
    <tr>
      <th>DISTANCIA IES-EMPRESA</th>
      <td>{{ $centroTrabajo->Distancia }} KM</td>
    </tr>
  </table>
  <table>
    <tr>
      <th>NÚMERO TOTAL DE VISITAS PREVISTAS</th>
      <td>{{ $visitas_previstas }}</td>
    </tr>
  </table>


  <table>
    <tr>
      <th>FECHA</th>
      <th>INCIDENCIAS</th>
      <th>EMPRESA (SELLO)</th>
      <th>TRAYECTO (Km)</th>
    </tr>
    <tr>
      <td>{{$visita -> Fecha}}</td>
      <td>{{$visita -> Incidencia}}</td>
      <td></td>
      <td>{{ $centroTrabajo->Distancia }} KM</td>
    </tr>

  </table>

  <textarea name="Observaciones" id="" cols="30" rows="10">
  {{$visita -> Observaciones}}
  </textarea>
  @endforeach
  @endsection