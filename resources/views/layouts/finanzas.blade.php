<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
</head>
<body>
    <header class="index">

      <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
      <a class="nombrelogo" href="index.php"><h1><img class="logo" src="images/logonuevo.png" alt="" width="50px">Mis Finanzas</h1></a>
      <nav class="menu">
        <ul>
          <li class="hvr-underline-from-center"><a href="contacto.php">Contacto</a></li>
          <li class="hvr-underline-from-center"><a href="registrate.php"> Registrate </a></li>
          <li class="hvr-underline-from-center"><a href="faqs.php">FAQs</a></li>
          <li class="hvr-underline-from-center inicioSesion"><a href="login.php"><img src="images/avatar.svg" width="20px" alt="">INICIÁ SESION</a></li>
        </ul>
      </nav>
      <nav class="menu-movil">
        <ul>
          <h3>MENÚ</h3>
          <li><a href="login.php">Inicia Sesión</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="registrate.php"> Registrate </a></li>
          <li><a href="faqs.php">FAQs</a></li>
        </ul>
      </nav>

    </header>
  </div> <!-- .header -->
    @yield('contenido')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/path/to/parallax.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
