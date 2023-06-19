<!DOCTYPE html>
<html>

<head>
  <style>
  /* Estilos para el encabezado y el pie de página */
  header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    text-align: center;
    padding: 10px;
    font-family: "Arial", sans-serif;
    font-size: 12px;
    border-bottom: 1px solid #ccc;
  }

  header p {
    display: inline-block;
    /* Mostrar los párrafos en línea */
    margin: 0 10px;
    /* Agregar un margen entre los párrafos */
  }

  footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    text-align: right;
    padding: 10px;
    font-family: "Arial", sans-serif;
    font-size: 12px;
    color: #666;
    border-top: 1px solid #ccc;
  }

  body {
    margin-top: 90px;
    /* Ajusta el margen superior para que el contenido no se superponga al encabezado */
    margin-bottom: 90px;
    /* Ajusta el margen inferior para que el contenido no se superponga al pie de página */
  }
  </style>
</head>

<body>

  <header>
    <div>
      <img src="{{ asset('img/aenor.png') }}" alt="AENOR Logo">
      <img src="{{ asset('img/logo.png') }}" alt="Logo">
      <p>Ciclo Formativo: D.A.W</p>
      <p>CURSO ACTUAL: {{ $cursoActual }}</p>
      <p>MD 75010603 REV 4 {{ \Carbon\Carbon::parse($fechaActualizacion)->format('d/m/y') }}</p>
    </div>
  </header>


  @yield('content')

  <footer>
    <div>
      <p>Cuaderno Tutor FCT</p>
    </div>
  </footer>

</body>

</html>