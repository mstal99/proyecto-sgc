@extends('layouts.app')

@section('content')
    
<div class="container-fluid table-responsive">
<table class="table table-bordered table-hover ">
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
            <td><a href="{{ $candidato->CV }}" target="_blank">VER</a></td>
            <td>
                <div class="container d-flex flex-column">
                <a href="{{ url('/candidatos/'.$candidato->id.'/edit')}}" class="btn btn-warning p-2" style="width: 80px"> 
                    Editar  
                </a>
                <!--ELIMINAR UN CANDIDATO-->
                <form action="{{ url('/candidatos/'.$candidato->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger p-2" style="width: 80px" type="submit" onclick="return confirm('¿Seguro que desea borrar este candidato?')" value="Borrar">
                </form>
            </div>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
</div>

@endsection