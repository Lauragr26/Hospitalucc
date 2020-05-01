@extends('layouts.app')

@section('title')
    Detalle del Diagnostico
@endsection  

@section('content')
<div class="container">
   <h1 class="text-center">Detalle del Diagnostico</h1>
   <br><br>

   <div class="row">
      <div class="col-sm-3">
           <h3>Codigo Diagnostico:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$diagnostico->id}}</p>
       </div> 
   </div>

   <div class="row">
      <div class="col-sm-3">
           <h3>Tipo de Diagnostico</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$diagnostico->tipo}}</p>
       </div> 
   </div>

   <div class="row">
      <div class="col-sm-3">
           <h3>Complicaciones</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$diagnostico->complicaciones}}</p>
       </div> 
   </div>

        <a href="{{route('diagnostico.index')}}"><button class="btn btn-primary">Volver</button></a>
        
    </div>
  
@endsection  
