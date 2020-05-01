@extends('layouts.app')

@section('title')
    Detalle del Diagnostico Paciente
@endsection  

@section('content')
<div class="container">
   <h1 class="text-center">Detalle del Diagnostico Paciente</h1>
   <br><br>

   <div class="row">
      <div class="col-sm-3">
           <h3>Codigo Detalle:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$detdiagnostico->id}}</p>
       </div> 
   </div>

   <div class="row">
      <div class="col-sm-3">
           <h3>Fecha de Diagnostico:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$detdiagnostico->fecha}}</p>
       </div> 
   </div>

    <div class="row">
       <div class="col-sm-3">
            <h3>Nombre del Paciente:</h3>
        </div>      
        <div class="col-sm-3">
           <p class="lead">{{$detdiagnostico->paciente}}</p>
        </div> 
    </div>

    <div class="row">
      <div class="col-sm-3">
           <h3>Tipo de Diagnostico:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$detdiagnostico->diagnostico}}</p>
       </div> 
   </div>

        <a href="{{route('detdiagnostico.index')}}"><button class="btn btn-primary">Volver</button></a>
        
    </div>
  
@endsection  
