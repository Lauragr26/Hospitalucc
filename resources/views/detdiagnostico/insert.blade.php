@extends('layouts.app')

@section('title')
    Nuevo Detalle Diagnostico
@endsection

@section('content')
<h1 class="text-center">Nuevo Detalle Diagnostico</h1>
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
        <form action="{{route('detdiagnostico.store')}} " method="post">
            @csrf
           
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Fecha de Diagnostico:</label>
                    <input type="date" class="form-control" name="fecha" placeholder="Fecha Diagnostico">
                </div>
            </div>
      
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Nombre del Paciente</label>
                    <select name="idPaciente" class="form-control" >

                    @foreach ($pacientes as $paciente)
                    <option value="{{$paciente->id}}">{{$paciente->nombre}}</option>

                    @endforeach

                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Diagnostico</label>
                    <select name="idDiagnostico" class="form-control" >

                    @foreach ($diagnosticos as $diagnostico)
                    <option value="{{$diagnostico->id}}">{{$diagnostico->tipo}}</option>

                    @endforeach

                    </select>
                </div>
            </div>

                <button type="submit" class="btn btn-success">Registrar</button>
        
                <a href=" {{route('detdiagnostico.index')}}" class="btn btn-link">Volver</a>

        </form>
    
       </div> 
@endsection