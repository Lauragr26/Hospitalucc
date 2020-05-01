@extends('layouts.app')

@section('titulo','Modificar Laboratorio')
   
@section('content')

<h1 class="text-center">Modificar Laboratorio</h1>
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
        <form action="{{route('laboratorio.update', $laboratorio->id)}} " method="post">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre del Paciente:</label>
                    <input type="text" class="form-control" name="nombre" value="{{$laboratorio->nombre}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Dirección:</label>
                    <input type="text" class="form-control" name="direccion" value="{{$laboratorio->direccion}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Número de Identificación:</label>
                    <input type="number" class="form-control" name="telefono" value="{{$laboratorio->telefono}}">
                </div>
            </div>
       
           
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar Laboratorio</button>
            </div>
        </form>
</div>
@endsection
