@extends('layouts.navegacion')

@section('title', 'listado de estudiante')

@section('sidebar')
  

@section('content')
<h1>Listado de alumnos</h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Edad</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Grupo</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($alumnos as $alumno)
    <tr>
      <th scope="row">{{ $alumno->id  }}</th>
      <td>{{ $alumno->nombre  }}</td>
      <td>{{ $alumno->apellidos  }}</td>
      <td>{{ $alumno->edad  }}</td>
      <td>{{ $alumno->email  }}</td>
      <td>{{ $alumno->telefono  }}</td>
      <td>{{ $alumno->id_grupo }}</td>
      <td><a class="btn btn-primary" href="{{ route('editarAlumno', $alumno->id)}}">Editar</a></td>
      <td>
          <form method="POST" action="{{ route('eliminarAlumno', $alumno->id)}}">
              @csrf
              <button class="btn btn-primary" type="submit">Eliminar</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('crearAlumno') }}" class="btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">Registrar estudiante</a>



@endsection