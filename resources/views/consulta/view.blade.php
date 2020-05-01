@extends('layouts.app')

@section('title')
    Detalle de la Consulta
@endsection  

@section('content')
<div class="container">
   <h1 class="text-center">Detalle de la Consulta</h1>
   <br><br>

   <div class="row">
      <div class="col-sm-3">
           <h3>Codigo Consulta:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$consulta->id}}</p>
       </div> 
   </div>

   <div class="row">
      <div class="col-sm-3">
           <h3>Fecha de Consulta:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$consulta->fecha}}</p>
       </div> 
   </div>

    <div class="row">
       <div class="col-sm-3">
            <h3>Nombre del Paciente:</h3>
        </div>      
        <div class="col-sm-3">
           <p class="lead">{{$consulta->paciente}}</p>
        </div> 
    </div>

    <div class="row">
      <div class="col-sm-3">
           <h3>Nombre del Medico:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$consulta->medico}}</p>
       </div> 
   </div>

        <a href="{{route('consulta.index')}}"><button class="btn btn-primary">Volver</button></a>
        
    </div>
  
@endsection  
