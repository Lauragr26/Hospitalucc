@extends('layouts.app')

@section('titulo','Modificar Paciente')
   
@section('content')

<h1 class="text-center">Modificar Paciente</h1>
<br><br>

@if($errors->any())
<div class="alert alert-danger">
    <div class="header"><strong>Ups.</strong> Algo anda mal...</div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
    
@endif

<div class="container">
        <form action="{{route('paciente.update', $paciente->id)}} " method="post">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre del Paciente:</label>
                    <input type="text" class="form-control" name="nombre" value="{{$paciente->nombre}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Número de Identificación:</label>
                    <input type="number" class="form-control" name="cedula" value="{{$paciente->cedula}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Dirección:</label>
                    <input type="text" class="form-control" name="direccion" value="{{$paciente->direccion}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" name="nacimiento" value="{{$paciente->nacimiento}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Genero:</label>
                    <input type="text" class="form-control" name="genero" value="{{$paciente->genero}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Numero de Registro:</label>
                    <input type="text" class="form-control" name="nregistro" value="{{$paciente->nregistro}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Numero de Cama:</label>
                    <input type="text" class="form-control" name="ncama" value="{{$paciente->ncama}}">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar Paciente</button>
            </div>
        </form>
</div>
@endsection
