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
<form action="{{ route('crearGrupoPost')}}" method="POST" role= "form">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="formGroupExampleInput">Letra</label>
        <input type="text" class="form-control" name="letra" placeholder="Ingrese la letra del grupo" required>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Semestre</label>
        <input type="number" min="1" step="1" max="12" class="form-control" name="semestre" placeholder="Ingrese el semestre" required>
    </div>
    <div class="form-group">
        <label>Turno</label>
        <input type="number" min="1" step="1" max="2" class="form-control" name="turno" placeholder="Turno" required>
    </div>
    <div class="form-group">
        <label>Carrera</label>
        <input type="text" class="form-control" name="id_carrera" placeholder="id_carrera" required>

    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection