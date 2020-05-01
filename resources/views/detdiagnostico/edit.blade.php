@extends('layouts.app')

@section('titulo','Modificar Detalle Diagnostico')
   
@section('content')

<h1 class="text-center">Modificar Detalle Diagnostico</h1>
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
        <form action="{{route('detdiagnostico.update', $detdiagnostico->id)}} " method="post">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Fecha de Consulta:</label>
                    <input type="date" class="form-control" name="fecha" value="{{$detdiagnostico->fecha}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Paciente:</label>
                    <select name="idPaciente" class="form-control" >
                        @foreach ($pacientes as $paciente)
                        <option value="{{$paciente->id}}"
                            @if ($detdiagnostico->idPaciente == $paciente->id) 
                            selected   
                            @endif>
                            {{$paciente->nombre}}</option>
                        @endforeach   
                    </select>
                </div>
            </div>
           
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Tipo Diagnostico:</label>
                    <select name="idDiagnostico" class="form-control" >
                        @foreach ($diagnosticos as $diagnostico)
                        <option value="{{$diagnostico->id}}"
                            @if ($detdiagnostico->idDiagnostico == $diagnostico->id) 
                            selected   
                            @endif>
                            {{$diagnostico->tipo}}</option>
                        @endforeach   
                    </select>
                </div>
            </div>

            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar Diagnostico</button>
            </div>
        </form>
</div>
@endsection
