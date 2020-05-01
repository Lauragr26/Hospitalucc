@extends('layouts.app')

@section('title')
    Detalle del Laboratorio
@endsection  

@section('content')
<div class="container">
   <h1 class="text-center">Detalle del Laboratorio</h1>
   <br><br>

   <div class="row">
      <div class="col-sm-3">
           <h3>Codigo Laboratorio:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$laboratorio->id}}</p>
       </div> 
   </div>


    <div class="row">
       <div class="col-sm-3">
            <h3>Nombre Laboratorio:</h3>
        </div>      
        <div class="col-sm-3">
           <p class="lead">{{$laboratorio->nombre}}</p>
        </div> 
    </div>

    <div class="row">
      <div class="col-sm-3">
           <h3>Dirección:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$laboratorio->direccion}}</p>
       </div> 
  </div>
  
    <div class="row">
        <div class="col-sm-3">
             <h3>Telefono:</h3>
         </div>      
         <div class="col-sm-3">
            <p class="lead">{{$laboratorio->telefono}}</p>
         </div> 
    </div>

        <a href="{{route('laboratorio.index')}}"><button class="btn btn-primary">Volver</button></a>
        
    </div>
  
@endsection  
