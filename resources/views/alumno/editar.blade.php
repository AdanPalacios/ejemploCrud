@extends('layouts.navegacion')

@section('title', 'form carrera')

@section('sidebar')
  

@section('content')
<h1>Formulario de carrera</h1>

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

        <form action="{{ route('editarAlumnoPost', $alumno->id)}}" method="POST" role= "form">
            {{ csrf_field() }} {{method_field('POST')}}
            <div class="form-group">
                <label for="formGroupExampleInput">Nombre de alumno</label>
                <input type="text" class="form-control" name="nombre" value="{{old('nombre',$alumno->nombre)}}" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value="{{old('nombre',$alumno->apellidos)}}" placeholder="Ingrese sus apellidos">
            </div>
            <div class="form-group">
                <label>Edad</label>
                <input type="number" min="18" step="1" max="100" class="form-control" name="edad" value="{{old('nombre',$alumno->edad)}}" placeholder="Ingrese su edad">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">email</label>
                <input type="text" class="form-control" name="email" value="{{old('nombre',$alumno->email)}}" placeholder="Ingrese su correo electronico">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="{{old('nombre',$alumno->telefono)}}" placeholder="Ingrese su telefono">
            </div>

            <div class="form-group">
                <label>Grupo</label>
                <input type="text" class="form-control" name="id_grupo" value="{{old('nombre',$alumno->id_grupo)}}" placeholder="Ingrese su telefono">
            </div>
                 
                 <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>a


@endsection