@extends('pdf/layout')
@section('content')
<style>
table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid black;
}

th,
td {
  border: 1px solid black;
  padding: 8px;
  font-size: 12px;
  overflow: hidden;
}


th {
  background-color: lightgray;
  text-align: left;
}

h1 {
  font-size: 18px;
  margin-bottom: 10px;
}
</style>
<h1>Datos de alumnos</h1>

<div style="page-break-before: always;"></div>

@foreach ($alumnos as $row)
<h1>FICHA DE ALUMNO/A DE LA FCT</h1>
<table>
  <tr>
    <th>DNI</th>
    <td>{{ $row->DNI }}</td>
  </tr>
  <tr>
    <th>Apellidos</th>
    <td>{{ $row->Apellidos }}</td>
    <th>Nombre</th>
    <td>{{ $row->Nombre }}</td>
  </tr>
  <tr>
    <th>Domicilio</th>
    <td>{{ $row->Domicilio }}</td>
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
    <td>{{ $row->Edad }}</td>
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
  <th>OBSERVACIONES:</th>
  <td>{{ $row->Observaciones }}</td>
  <tr>
    <th>ALUNMO/A:</th>
  </tr>
  <tr>
    <th>ENSEÑANZA:</th>
    <td>CFGS DESARROLLO DE APLICACIONES WEB</td>
    <th>TRIMESTRE:</th>
    <td>
      {{$trimestre}}
    </td>
  </tr>
  <tr>
    <th>CUENTA BANCARIA:</th>
    <td>@if($row->Solicita_beca == 1) {{ $row->Cuenta_bancaria }} @endif</td>
  </tr>

  <tr>
    <th>TIPO DE EMPRESA DONDE DESEA REALIZAR LA FCT:</th>
    <td>{{ $row->Tipo_empresa_FCT }}</td>
  </tr>
  //acaba el bucle de la tabla alumno

  <tr>
    <th>EMPRESA Y CENTROS DE TRABAJO DONDE REALIZA LA FCT</th>
    @forelse ($centrosTrabajo as $centroTrabajo)
    <th>DOMICILIO:</th>
    <td>{{ $centroTrabajo->Domicilio }}</td>
    <th>LOCALIDAD:</th>
    <td>{{ $centroTrabajo->Poblacion }}</td>
    <th>DISTANCIA EN KM (ida y vuelta):</th>
    <td>{{ $centroTrabajo->Telefono }}</td>
    <td>{{ $centroTrabajo->Distancia }}</td>
    <th>TELÉFONO:</th>
    @empty
    <td colspan="7">No hay centros de trabajo disponibles.</td>
    @endforelse
  </tr>
  <tr>
    <th>TUTOR LABORAL:</th>
    @foreach ($tutoresLaborales as $tutorLaboral)
    <td>{{ $tutorLaboral->Nombre }} {{ $tutorLaboral->Apellidos }}</td>
    <th>DNI:</th>
    <td>{{ $tutorLaboral->DNI }}</td>
    @endforeach
  </tr>

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
  <tr>
    <th></th>
    <th>Negativa</th>
    <th>Positiva</th>
    <th>Excelente</th>
  </tr>
  <tr>
    <th>Competencias profesionales</th>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Competencias organizativas</th>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Competencias relacionales</th>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Capacidad de respuesta a las contingencias</th>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Otro aspecto 1</th>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Otro aspecto 2</th>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Otro aspecto 3</th>
    <td></td>
    <td></td>
    <td></td>
  </tr>

</table>

<p>EVALUACIÓN FINAL:</p>
<input type="radio" id="apto" name="evaluacion_final" value="apto">
<label for="apto">APTO</label><br>
<input type="radio" id="no_apto" name="evaluacion_final" value="no_apto">
<label for="no_apto">NO APTO</label><br>
<p>Otros aspectos detalle el otro aspecto 1, otro aspecto 2 y otro aspecto 3:</p>
<textarea name="aspectos_mejorar" rows="5" cols="50"></textarea>

<p>Áreas y puestos de trabajo donde ha desarrollado las actividades formativas:</p>
<textarea name="aspectos_destacar" rows="5" cols="50"></textarea>

<p>Modificaciones a introducir en el programa formativo:</p>
<textarea name="aspectos_destacar" rows="5" cols="50"></textarea>


<p>Finalizada la fase de formación y de acuerdo con la valoracion emitida por el tutor/laboral se determina:</p>

<p>En ________ a _____ de __________________ de___________</p>
<p>El/LA TUTOR/A DEL CENTRO DE TRABAJO</p>


<p>Fdo:_____________________________</p>


<div style="page-break-before: always;"></div>

@endforeach
@foreach ($alumnos as $alumno)

<h1>valoracion DEL TUTOR DOCENTE</h1>
<table>
  <!-- Tabla de Tutores Docentes -->
  <tr>
    <th>Datos del alumno/a </th>
  </tr>
  <td>{{ $alumno->Apellidos }} {{ $alumno->Nombre }}</td>
  <tr>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Cumplimiento del programa formativo por parte de la empresa</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Seguimiento del alumno realizado por el tutor/a del centro de trabajo</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Apoyo dado al profesor/a responsable del seguimiento</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Posibilidades laborales que ofrece la empresa al alumnado que finalice la fase de formación en centros de
      trabajo</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Calidad de los informes del tutor/a del centro de trabajo</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Nivel de satisfacción mostrado con la empresa por el alumnado que ha realizado la fase de formación en centros
      de trabajo en ella</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>valoracion general de las prácticas por el profesor/a responsable del seguimiento</th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
<p>Aspectos a mejorar de la fase de formación en centros de trabajo:</p>
<textarea name="aspectos_mejorar" rows="5" cols="50"></textarea>

<p>Aspectos a destacar de la fase de formación en centros de trabajo:</p>
<textarea name="aspectos_destacar" rows="5" cols="50"></textarea>
<p>Finalizada la fase de formación y de acuerdo con la valoracion emitida por el tutor/laboral se determina:</p>

<p>EVALUACIÓN FINAL:</p>
<input type="radio" id="apto" name="evaluacion_final" value="apto">
<label for="apto">APTO</label><br>
<input type="radio" id="no_apto" name="evaluacion_final" value="no_apto">
<label for="no_apto">NO APTO</label><br>

<p>En ________ a _____ de __________________ de___________</p>
<p>El/LA TUTOR/A DEL CENTRO DE TRABAJO</p>

<div style="page-break-before: always;"></div>

@endforeach
@endsection