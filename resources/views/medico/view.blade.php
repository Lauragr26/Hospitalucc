@extends('layouts.app')

@section('title')
    Detalle del Medico
@endsection  

@section('content')
<div class="container">
   <h1 class="text-center">Detalle del Medico</h1>
   <br><br>

   <div class="row">
      <div class="col-sm-3">
           <h3>Codigo Medico:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$medico->id}}</p>
       </div> 
   </div>

    <div class="row">
       <div class="col-sm-3">
            <h3>Nombre Medico:</h3>
        </div>      
        <div class="col-sm-3">
           <p class="lead">{{$medico->nombre}}</p>
        </div> 
    </div>

    <div class="row">
        <div class="col-sm-3">
             <h3>Nro Identificación:</h3>
         </div>      
         <div class="col-sm-3">
            <p class="lead">{{$medico->cedula}}</p>
         </div> 
    </div>

    <div class="row">
        <div class="col-sm-3">
             <h3>Especialidad:</h3>
         </div>      
         <div class="col-sm-3">
            <p class="lead">{{$medico->especialidad}}</p>
         </div> 
    </div>

    <div class="row">
      <div class="col-sm-3">
           <h3>Nombre Hospital:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$medico->hospital}}</p>
       </div> 
   </div>
   
        <a href="{{route('medico.index')}}"><button class="btn btn-primary">Volver</button></a>
        
    </div>
  
@endsection  
