<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - SGC PROYECT</title>

    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />

    @yield('meta')
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<div class="container-fluid ">
    <a class="navbar-brand" href="">
        <img src={{ asset("Images/sgc.png")}} width="120" height="90" alt="" srcset="" />
        <span id="mainName">Sistema de Gestion de Candidatos</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
        @if(auth()->check())
        <li class="nav-item">
            <a class="btn btn-primary" href="{{route('candidatos.create') }}">crear candidato</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-primary" href="{{route('candidatos.index') }}">ver candidatos</a>
        </li>
        <li class="nav-item">
            <p>Hola <b>{{auth()->user()->name }}</b></p>
        </li>
        <li class="nav-item">
        <a class="btn btn-primary" href="{{route('login.destroy') }}">Log Out</a>
        </li>
        
        @else
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="{{ route('login.index') }}">Log In</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="{{ route('register.index') }}">Register</a>
            </li>
        @endif
    </ul>
</div>
</div>
</nav>


@yield('content')


<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

</body>
</html>
