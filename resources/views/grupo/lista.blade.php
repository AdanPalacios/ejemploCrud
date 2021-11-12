@extends('layouts.navegacion')

@section('title', 'listado de grupos')

@section('sidebar')
  

@section('content')
<h1>Listado de grupos</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Letra</th>
            <th scope="col">Semestre</th>
            <th scope="col">Turno</th>
            <th scope="col">Carrera</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($grupos as $grupo)
            <tr>
                <th scope="row">{{ $grupo->id  }}</th>
                <td>{{ $grupo->letra  }}</td>
                <td>{{ $grupo->semestre  }}</td>
                <td>{{ $grupo->turno  }}</td>
                <td>{{ $grupo->id_carrera  }}</td>
                <td><a class="btn btn-primary" href="{{ route('editarGrupo', $grupo->id)}}">Editar</a></td>
                <td>
                    <form method="POST" action="{{ route('eliminarGrupo', $grupo->id)}}">
                        @csrf
                        <button class="btn btn-primary" type="submit">Eliminar</button>
                    </form>
              </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('crearGrupo')}}" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">Registrar grupo</a>
@endsection