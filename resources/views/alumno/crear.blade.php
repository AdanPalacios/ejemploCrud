@extends('layouts.navegacion')

@section('title', 'form grupo')

@section('sidebar')
  

@section('content')
<h1>Formulario de grupo</h1>
@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('crearAlumnoPost')}}" method="POST" id="formularioEstudiante">
    {{ csrf_field() }}
   
    <div class="form-group">
        <label for="formGroupExampleInput">Nombre de alumno</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos">
    </div>
    <div class="form-group">
        <label>Edad</label>
        <input type="number" step="1" class="form-control" name="edad" id="edad" placeholder="Ingrese su edad">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Ingrese su correo electronico">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese su telefono">
    </div>

    <div class="form-group">
        <label>Grupo</label>
        <input type="text" class="form-control" name="id_grupo" id="id_grupo" placeholder="Ingrese su id grupo">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection