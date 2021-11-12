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
<form action="{{ route('editarGrupoPost', $grupo->id)}}" method="POST" role= "form">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="formGroupExampleInput">Letra</label>
        <input type="text" class="form-control" name="letra" value="{{old('nombre',$grupo->letra)}}" placeholder="Ingrese la letra del grupo">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Semestre</label>
        <input type="number"  class="form-control" name="semestre" value="{{old('nombre',$grupo->semestre)}}"  placeholder="Ingrese el semestre">
    </div>
    <div class="form-group">
        <label>Turno</label>
        <input type="number" class="form-control" name="turno" value="{{old('nombre',$grupo->turno)}}"  placeholder="Turno">
    </div>
   {{--<div class="form-group">
        <label>Carrera</label>
        <input type="number"  class="form-control" name="id_carrera" value="{{old('nombre',$grupo->id_carrera)}}"  placeholder="Id carrera">
    </div>--}} 
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>
@endsection