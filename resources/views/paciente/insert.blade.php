@extends('layouts.app')

@section('title')
    Registrar Paciente
@endsection

@section('content')
<h1 class="text-center">Registrar Paciente</h1>
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
<br><br>

<div class="container">
        <form action="{{route('paciente.store')}} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Nombre del Paciente:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre Paciente">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Número de Identificación:</label>
                    <input type="number" class="form-control" name="cedula" placeholder="Nro Identificacón">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Dirección:</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Dirección">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" name="nacimiento" placeholder="Fecha Nacimiento">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Genero:</label>
               
                    <input type="radio" name="genero" value="Masculino">
                    <label for="hombre">Masculino</label>
            
                    <input type="radio" name="genero" value="Femenino">
                    <label for="mujer">Femenino</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Numero de Registro:</label>
                    <input type="text" class="form-control" name="nregistro" placeholder="Nro Registro">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Numero de Cama:</label>
                    <input type="text" class="form-control" name="ncama" placeholder="Nro Cama">
                </div>
            </div>
            
                <button type="submit" class="btn btn-success">Registrar Paciente</button>
        
                <a href=" {{route('paciente.index')}}" class="btn btn-link">Volver</a>
          
        </form>
    
       </div> 
@endsection