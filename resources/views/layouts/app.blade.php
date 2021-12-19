<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - SGC PROYECT</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body class="bg-gray-100 text-gray-800">

<nav class="flex py-5 bg-indigo-500 text-white">
<div class="w-1/2 px-12 mr-auto">
    <p class="text-2x1 font-bold"> SGC PROYECT </p> <!--PODRIA IR EL LOGO-->
</div>

    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
        <li>
            <a href="{{route('candidatos.create') }}">crear candidato</a>
        </li>
        <li>
            <a href="{{route('candidatos.index') }}">ver candidatos</a>
        </li>
        <li class="mx-6">
            <p class="text-xl">Hola <b>{{auth()->user()->name }}</b></p>
        </li>
        <li>
        <a href="{{route('login.destroy') }}">Log Out</a>
        </li>
        
        @else
            <li class="mx-6">
                <a href="{{ route('login.index') }}" class="font-semibold
        hover:bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
            </li>
            <li>
                <a href="{{ route('register.index') }}" class=" font-semibold
        border-2 border-white py-2 px-4 rounded-md hover:bg-white
        hover:text-indigo-700">Register</a>
            </li>
        @endif
    </ul>
</nav>


@yield('content')


<!-- JavaScript -->
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

</body>
</html>
