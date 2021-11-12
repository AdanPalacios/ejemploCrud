@extends('layouts.navegacion')

@section('title', 'listado de carrera')

@section('sidebar')
  
@section('content')
<h1>Listado de carreras</h1>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Duracion en meses</th>    
      </tr>
    </thead>
    <tbody>
        @foreach($carreras as $carrera)
            <tr>
              <th scope="row">{{ $carrera->id  }}</th>
              <td>{{ $carrera->nombre  }}</td>
              <td>{{ $carrera->duracion_mes  }}</td>   
              <td><a class="btn btn-primary" href="{{ route('editarCarrera', $carrera->id)}}">Editar</a></td>
              <td>
                  <form method="POST" action="{{ route('eliminarCarrera', $carrera->id)}}">
                      @csrf
                      <button class="btn btn-primary" type="submit">Eliminar</button>
                  </form>
              </td>
              
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('crearCarrera') }}" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">Crear carrera</a>
@endsection