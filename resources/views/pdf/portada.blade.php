@extends('pdf/layout')
@section('content')
<!DOCTYPE html>
<html>

<head>
  <style>
  /* Estilos CSS para la portada */
  body {
    font-family: Arial, sans-serif;
  }

  .portada {
    text-align: center;
    margin-top: 100px;
  }

  .portada h1 {
    font-size: 50px;
    color: #333;
    margin-bottom: 20px;
  }

  .portada p {
    font-size: 15px;
    color: #555;
    margin-bottom: 40px;
  }
  </style>
</head>

<body>
  <div class="portada">
    <h1>CUADERNO</h1>
    <h1>TUTOR FCT</h1>
    <p>TUTOR:
      @foreach ($tutoresDocentes as $tutorDocente)
      {{ $tutorDocente->Nombre }} {{ $tutorDocente->Apellido_1 }} {{ $tutorDocente->Apellido_2 }}
      @endforeach
    </p>
    <p>ALUMNOS:
      @php
      $alumnoNombres = [];
      foreach ($alumnos as $alumno) {
      $alumnoNombres[] = $alumno->Nombre . ' ' . $alumno->Apellidos;
      }
      $alumnosTexto = implode(', ', $alumnoNombres);
      echo $alumnosTexto;
      @endphp
    </p>
  </div>
</body>

</html>
@endsection