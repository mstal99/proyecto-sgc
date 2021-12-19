@extends('layouts.app')

@section('content')

<!--formulario de edicion de candidato-->

<form action="{{ url('/candidatos/'.$candidatos->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    <label for="Nombre"> Nombre </label>
        <input type="text" name="Nombre" value="{{$candidatos->Nombre}}" id="Nombre">
        <br>

        <label for="Apellido"> Apellido </label>
        <input type="text" name="Apellido" value="{{$candidatos->Apellido}}" id="Apellido">
        <br>

        <label for="Telefono"> Telefono </label>
        <input type="tel" name="Telefono" value="{{$candidatos->Telefono}}" id="Telefono">
        <br>

        <label for="Correo"> Correo </label>
        <input type="email" name="Correo" value="{{$candidatos->Correo}}" id="Correo">
        <br>


        <label for="Foto"> Foto </label>
        <input type="file" name="Foto" value="{{$candidatos->Foto}}" id="Foto">
        <br>

        <label for="CV"> CV </label>
         <input type="file" name="CV" value="{{$candidatos->CV}}" id="CV">
        <br>

        <input type="submit" value="Guardar datos">
        <br>

</form>

<a href='{{ route('candidatos.index') }}'>Volver</a>

@endsection