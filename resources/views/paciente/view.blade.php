@extends('layouts.app')

@section('title')
    Detalle del Paciente
@endsection  

@section('content')
<div class="container">
   <h1 class="text-center">Detalle del Paciente</h1>
   <br><br>

   <div class="row">
      <div class="col-sm-3">
           <h3>Codigo Paciente:</h3>
       </div>      
       <div class="col-sm-3">
          <p class="lead">{{$paciente->id}}</p>
       </div> 
   </div>

    <div class="row">
       <div class="col-sm-3">
            <h3>Nombre Paciente:</h3>
        </div>      
        <div class="col-sm-3">
           <p class="lead">{{$paciente->nombre}}</p>
        </div> 
    </div>

    <div class="row">
        <div class="col-sm-3">
             <h3>Nro Identificación:</h3>
         </div>      
         <div class="col-sm-3">
            <p class="lead">{{$paciente->cedula}}</p>
         </div> 
    </div>

    <div class="row">
        <div class="col-sm-3">
             <h3>Dirección:</h3>
         </div>      
         <div class="col-sm-3">
            <p class="lead">{{$paciente->direccion}}</p>
         </div> 
    </div>

    <div class="row">
        <div class="col-sm-3">
             <h3>Fecha Nacimiento:</h3>
         </div>      
         <div class="col-sm-3">
            <p class="lead">{{$paciente->nacimiento}}</p>
         </div> 
    </div>

    <div class="row">
        <div class="col-sm-3">
             <h3>Genero:</h3>
         </div>      
         <div class="col-sm-3">
            <p class="lead">{{$paciente->genero}}</p>
         </div> 
      </div>

    <div class="row">
            <div class="col-sm-3">
                 <h3>Nro Registro:</h3>
             </div>      
             <div class="col-sm-3">
                <p class="lead">{{$paciente->nregistro}}</p>
             </div> 
      </div>

      <div class="row">
            <div class="col-sm-3">
                 <h3>Nro Cama:</h3>
             </div>      
             <div class="col-sm-3">
                <p class="lead">{{$paciente->ncama}}</p>
             </div> 
       </div>

        <a href="{{route('paciente.index')}}"><button class="btn btn-primary">Volver</button></a>
        
    </div>
  
@endsection  
