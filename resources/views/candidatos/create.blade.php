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

        @csrf

        <label for="Nombre"> Nombre </label>
        <input type="text" name="Nombre" id="Nombre">
        <br>

        <label for="Apellido"> Apellido </label>
        <input type="text" name="Apellido" id="Apellido">
        <br>

        <label for="Telefono"> Telefono </label>
        <input type="tel" name="Telefono" id="Telefono">
        <br>

        <label for="Correo"> Correo </label>
        <input type="email" name="Correo" id="Correo">
        <br>


        <label for="Foto"> Foto </label>
        <input type="file" name="Foto" id="Foto">
        <br>

        <label for="CV"> CV </label>
         <input type="file" name="CV" id="CV">
        <br>

        <input type="submit" value="Guardar datos">
        <br>

    </form>


</body>
</html>

@endsection