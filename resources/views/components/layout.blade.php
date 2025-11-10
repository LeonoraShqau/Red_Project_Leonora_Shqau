<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
      <!-- cdn font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CDN googlefonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Square&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <title>
        The Post
    </title>
</head>
<body>
    <!-- INIZIO NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-white">
      <div class="container-fluid d-flex flex-column">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img class="logo-piccolo" src="{{ asset('img/logo.png') }}" alt="">
        </a>
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item mx-lg-5 px-lg-5">
            <a class="nav-link fw-lighter fs-6" aria-current="page" href="{{ route('PrimoLink') }}">Primo link</a>
          </li>
          <li class="nav-item mx-lg-5 px-lg-5">
            <a class="nav-link fw-lighter fs-6" href="#">Altro link</a>
          </li>
          <li class="nav-item mx-lg-5 px-lg-5">
            <a class="nav-link fw-lighter fs-6" href="#">Terzo link</a>
          </li>
          <li class="nav-item mx-lg-5 px-lg-5">
            <a class="nav-link fw-lighter fs-6" href="#">Ultimo link</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- FINE NAVBAR -->
    <div class="min-vh-100">
        {{$slot}}
    </div>
</body>
</html>