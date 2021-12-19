@extends('layouts.app')

@section('content')
    

<table class="table table-bordered table-hover">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">CV</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ( $candidatos as $candidato )
        <tr>
            <th scope="row">{{ $candidato->id }}</th>
            <td><img src="{{ asset('/'.$candidato->Foto) }}" alt="" width="150px"></td>
            <td>{{ $candidato->Nombre }}</td>
            <td>{{ $candidato->Apellido }}</td>
            <td>{{ $candidato->Telefono }}</td>
            <td>{{ $candidato->Correo }}</td>
            <td>{{ $candidato->CV }}</td>
            <td>
                <a href="{{ url('/candidatos/'.$candidato->id.'/edit')}}" class="btn btn-warning"> 
                    Editar  
                </a>
                <!--ELIMINAR UN CANDIDATO-->
                <form action="{{ url('/candidatos/'.$candidato->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

@endsection