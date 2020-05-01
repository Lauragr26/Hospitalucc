@extends('layouts.app')

@section('title')
    Detalle del Hospital
@endsection  

@section('content')
<div class="container">
   <h1 class="text-center">Detalle del Hospital</h1>
   <br><br>

   <div class="row">
    <div class="col-sm-3">
         <h3>Codigo Hospital:</h3>
     </div>      
     <div class="col-sm-3">
        <p class="lead">{{$hospital->id}}</p>
     </div> 
 </div>

    <div class="row">
       <div class="col-sm-3">
            <h3>Nombre Hospital:</h3>
        </div>      
        <div class="col-sm-3">
           <p class="lead">{{$hospital->nombre}}</p>
        </div> 
    </div>
    <div class="row">
        <div class="col-sm-3">
             <h3>Dirección:</h3>
         </div>      
         <div class="col-sm-3">
            <p class="lead">{{$hospital->direccion}}</p>
         </div> 
    </div>
    <div class="row">
        <div class="col-sm-3">
             <h3>Telefono:</h3>
         </div>      
         <div class="col-sm-3">
            <p class="lead">{{$hospital->telefono}}</p>
         </div> 
    </div>
        <a href="{{route('hospital.index')}}"><button class="btn btn-primary">Volver</button></a>
    </div>
  
@endsection  
