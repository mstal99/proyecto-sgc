@extends('layouts.app')

@section('content')
    

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Foto</th>
            <th>CV</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        
        @foreach ( $candidatos as $candidato )
        <tr>
            <td>{{ $candidato->id }}</td>

            <td>
                
                
                
            </td>

            <td>{{ $candidato->Nombre }}</td>
            <td>{{ $candidato->Apellido }}</td>
            <td>{{ $candidato->Telefono }}</td>
            <td>{{ $candidato->Correo }}</td>
            <td><img src="{{ asset('/'.$candidato->Foto) }}" alt="" width="150px"></td>
            <td>{{ $candidato->CV }}</td>
            <td>
                
                <a href="{{ url('/candidatos/'.$candidato->id.'/edit')}}"> 
                    Editar  
                </a>
            
                <!--ELIMINAR UN CANDIDATO-->
                <form action="{{ url('/candidatos/'.$candidato->id) }}" method="post">
                    @csrf

                    {{ method_field('DELETE') }}

                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

                </form>
            
            
            
            </td>
        </tr>

        @endforeach

        
        
    </tbody>
</table>
@endsection