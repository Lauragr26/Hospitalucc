@extends('layouts.app')

@section('titulo','Modificar Medico')
   
@section('content')

<h1 class="text-center">Modificar Medico</h1>
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
        <form action="{{route('medico.update', $medico->id)}} " method="post">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre del Medico:</label>
                    <input type="text" class="form-control" name="nombre" value="{{$medico->nombre}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Número de Identificación:</label>
                    <input type="number" class="form-control" name="cedula" value="{{$medico->cedula}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Especialidad:</label>
                    <input type="text" class="form-control" name="especialidad" value="{{$medico->especialidad}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Hospital:</label>
                    <select name="idHospital" class="form-control" >
                        @foreach ($hospitals as $hospital)
                        <option value="{{$hospital->id}}"
                            @if ($medico->idHospital == $hospital->id) 
                            selected   
                            @endif>
                            {{$hospital->nombre}}</option>
                        @endforeach   
                    </select>
                </div>
            </div>
           
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar Medico</button>
            </div>
        </form>
</div>
@endsection
