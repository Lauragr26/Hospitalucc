@extends('layouts.app')

@section('title')
    Detalle del Servicio
@endsection  

@section('content')
<div class="container">
   <h1 class="text-center">Detalle del Servicio</h1>
   <br><br>

   <div class="row">
      <div class="col-sm-3">
           <h3>Codigo Servicio:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$servicio->id}}</p>
       </div> 
   </div>

   <div class="row">
      <div class="col-sm-3">
           <h3>Fecha del Servicio:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$servicio->fecha}}</p>
       </div> 
   </div>

   <div class="row">
      <div class="col-sm-3">
           <h3>Descripción del Servicio:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$servicio->descripcion}}</p>
       </div> 
   </div>

    <div class="row">
       <div class="col-sm-3">
            <h3>Nombre Hospital:</h3>
        </div>      
        <div class="col-sm-3">
           <p class="lead">{{$servicio->hospital}}</p>
        </div> 
    </div>

    <div class="row">
      <div class="col-sm-3">
           <h3>Nombre Laboratorio:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$servicio->laboratorio}}</p>
       </div> 
   </div>

  
        <a href="{{route('servicio.index')}}"><button class="btn btn-primary">Volver</button></a>
        
    </div>
  
@endsection  
