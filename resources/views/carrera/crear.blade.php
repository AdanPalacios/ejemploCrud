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

<form action="{{ route('crearCarreraPost')}}" method="POST" role= "form">
    {{ csrf_field() }}
    {{--<div class="form-group">
        <label>Identificador de carrera</label>
        <input type="number" min="0" step="1" class="form-control" name="id" placeholder="Ingrese el identificador unico">
    </div>--}}

    <div class="form-group">
        <label for="formGroupExampleInput">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Duracion en meses</label>
        <input type="number" min="1" step="1" max="72" class="form-control" name="duracion_mes" placeholder="00" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


@endsection