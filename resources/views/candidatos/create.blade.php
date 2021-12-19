@extends('layouts.app')

@section('content')

<!--formulario de creacion de candidato-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ url('/candidatos') }}" method="post" enctype="multipart/form-data">
        <div class="container">
        <div class="form-group">
        @csrf

        <label for="Nombre"> Nombre </label>
        <input class="form-control" type="text" name="Nombre" id="Nombre">
        <br>

        <label for="Apellido"> Apellido </label>
        <input class="form-control" type="text" name="Apellido" id="Apellido">
        <br>

        <label for="Telefono"> Telefono </label>
        <input class="form-control" type="tel" name="Telefono" id="Telefono">
        <br>

        <label for="Correo"> Correo </label>
        <input class="form-control" type="email" name="Correo" id="Correo">
        <br>

        <label for="Foto"> Foto </label>
        <input class="form-control" type="file" name="Foto" id="Foto">
        <br>

        <label for="CV"> CV </label>
         <input class="form-control" type="file" name="CV" id="CV">
        <br>

        <input class="form-control" type="submit" value="Guardar datos">
        <br>
    </div>
    </div>
    </form>


</body>
</html>

@endsection