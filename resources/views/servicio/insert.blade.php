@extends('layouts.app')

@section('title')
        Nuevo Servicio
@endsection

@section('content')
<h1 class="text-center">Nuevo Servicio</h1>
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
<br><br>

<div class="container">
        <form action="{{route('servicio.store')}} " method="post">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Fecha de Servicio:</label>
                    <input type="date" class="form-control" name="fecha" placeholder="Fecha Consulta">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Descripción:</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion del Servicio">
                </div>
            </div>
  
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Nombre del Hospital</label>
                    <select name="idHospital" class="form-control" >

                    @foreach ($hospitals as $hospital)
                    <option value="{{$hospital->id}}">{{$hospital->nombre}}</option>

                    @endforeach

                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Nombre del Laboratorio</label>
                    <select name="idLaboratorio" class="form-control" >

                    @foreach ($laboratorios as $laboratorio)
                    <option value="{{$laboratorio->id}}">{{$laboratorio->nombre}}</option>

                    @endforeach

                    </select>
                </div>
            </div>
            
      
                <button type="submit" class="btn btn-success">Registrar Servicio</button>
                <a href=" {{route('servicio.index')}}" class="btn btn-link">Volver</a>

        </form>
   
 
       </div> 
@endsection