@extends('layouts.app')

@section('title')
    Nueva Consulta
@endsection

@section('content')
<h1 class="text-center">Nueva Consulta</h1>
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
        <form action="{{route('consulta.store')}} " method="post">
            @csrf
           
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Fecha de Consulta:</label>
                    <input type="date" class="form-control" name="fecha" placeholder="Fecha Consulta">
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
                    <label>Nombre del Medico</label>
                    <select name="idMedico" class="form-control" >

                    @foreach ($medicos as $medico)
                    <option value="{{$medico->id}}">{{$medico->nombre}}</option>

                    @endforeach

                    </select>
                </div>
            </div>

                <button type="submit" class="btn btn-success">Registrar Consulta</button>
        
                <a href=" {{route('consulta.index')}}" class="btn btn-link">Volver</a>

        </form>
    
       </div> 
@endsection