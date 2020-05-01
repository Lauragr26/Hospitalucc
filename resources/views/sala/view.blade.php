@extends('layouts.app')

@section('title')
    Detalle de Sala
@endsection  

@section('content')
<div class="container">
   <h1 class="text-center">Detalle de Sala</h1>
   <br><br>

   <div class="row">
      <div class="col-sm-3">
           <h3>Codigo Sala:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$sala->id}}</p>
       </div> 
   </div>

    <div class="row">
       <div class="col-sm-3">
            <h3>Nombre Sala:</h3>
        </div>      
        <div class="col-sm-3">
           <p class="lead">{{$sala->nombre}}</p>
        </div> 
    </div>

    <div class="row">
        <div class="col-sm-3">
             <h3>Cantidad de Camas:</h3>
         </div>      
         <div class="col-sm-3">
            <p class="lead">{{$sala->cantcamas}}</p>
         </div> 
    </div>

    <div class="row">
      <div class="col-sm-3">
           <h3>Nombre Paciente:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$sala->paciente}}</p>
       </div> 
   </div>

   <div class="row">
      <div class="col-sm-3">
           <h3>Nombre Hospital:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$sala->hospital}}</p>
       </div> 
   </div>
   
        <a href="{{route('sala.index')}}"><button class="btn btn-primary">Volver</button></a>
        
    </div>
  
@endsection  
