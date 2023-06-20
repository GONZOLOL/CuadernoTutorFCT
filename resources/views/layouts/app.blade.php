<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Cuaderno Tutor FCT') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  @yield('head')

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-md" style="height:60px">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/cuaderno-tutor') }}">
          {{ config('app.name', 'Cuaderno Tutor FCT') }}
          <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse align-items-center justify-content-between"
          style="margin-left:150px; margin-top:21px" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="nav nav-tabs me-auto">

            @auth
            <div class="d-flex">
              <li class="nav-item">
                <a class="nav-link{{ request()->routeIs('cuaderno-tutor.index') ? ' active' : ' text-white' }}"
                  href="{{ route('cuaderno-tutor.index') }}">
                  Home
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link{{ request()->routeIs('alumno.*') ? ' active' : ' text-white' }} dropdown-toggle rounded px-3"
                  href="{{ route('alumno.index') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Alumnos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item{{ request()->routeIs('alumno.index') ? ' active' : '' }}"
                      href="{{ route('alumno.index') }}">Listado de alumnos</a></li>
                  <li><a class="dropdown-item{{ request()->routeIs('alumno.create') ? ' active' : '' }}"
                      href="{{ route('alumno.create') }}">Añadir alumno</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link{{ request()->routeIs('empresa.*', 'centro-trabajo.*') ?  ' active' : ' text-white'}} dropdown-toggle rounded px-3"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Empresas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item{{ request()->routeIs('empresa.index') ? ' active' : '' }}"
                      href="{{ route('empresa.index') }}">Listado de empresas</a></li>
                  <li><a class="dropdown-item{{ request()->routeIs('empresa.create') ? ' active' : '' }}"
                      href="{{ route('empresa.create') }}">Añadir empresa</a></li>
                  <hr class="dropdown-divider">
                  <li><a class="dropdown-item{{ request()->routeIs('centro-trabajo.index') ? ' active' : '' }}"
                      href="{{ route('centro-trabajo.index') }}">Listado de centros de trabajo</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link{{ request()->routeIs('tutor-docente.*') ? ' active' : ' text-white' }} dropdown-toggle rounded px-3"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tutores Docentes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item{{ request()->routeIs('tutor-docente.index') ? ' active' : '' }}"
                      href="{{ route('tutor-docente.index') }}">Listado de tutores docentes</a></li>
                  <li><a class="dropdown-item{{ request()->routeIs('tutor-docente.create') ? ' active' : '' }}"
                      href="{{ route('tutor-docente.create') }}">Añadir tutor docente</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link{{ request()->routeIs('tutor-laboral.*') ? ' active' : ' text-white' }} dropdown-toggle rounded px-3"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tutores Laborales
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item{{ request()->routeIs('tutor-laboral.index') ? ' active' : '' }}"
                      href="{{ route('tutor-laboral.index') }}">Listado de tutores laborales</a></li>
                  <li><a class="dropdown-item{{ request()->routeIs('tutor-laboral.create') ? ' active' : '' }}"
                      href="{{ route('tutor-laboral.create') }}">Añadir tutor laboral</a></li>
                </ul>
              </li>
            </div>

            @endauth
          </ul>


          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto mb-3">
            <!-- Authentication Links -->
            @guest

            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4">
      @yield('security')
      @auth
      @yield('content')
      @endauth
    </main>
  </div>
</body>

</html>