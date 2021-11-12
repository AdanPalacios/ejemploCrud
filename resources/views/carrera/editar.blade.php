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

<form action="{{ route('editarCarreraPost', $carrera->id)}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" value="{{old('nombre',$carrera->nombre)}}">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Duracion en meses</label>
        <input type="number"  class="form-control" name="duracion_mes" placeholder="00"  value="{{old('nombre',$carrera->duracion_mes)}}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


@endsection