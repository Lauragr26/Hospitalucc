@extends('layouts.app')

@section('title')
    Registrar Medico
@endsection

@section('content')
<h1 class="text-center">Registrar Medico</h1>
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
        <form action="{{route('medico.store')}} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Nombre del Medico:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre Medico">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Número de Identificación:</label>
                    <input type="number" class="form-control" name="cedula" placeholder="Nro Identificacón">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Especialidad:</label>
                    <input type="text" class="form-control" name="especialidad" placeholder="Especialidad">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Hospital</label>
                    <select name="idHospital" class="form-control" >

                    @foreach ($hospitals as $hospital)
                    <option value="{{$hospital->id}}">{{$hospital->nombre}}</option>

                    @endforeach

                    </select>
                </div>
            </div>
            
                <button type="submit" class="btn btn-success">Registrar Medico</button>
       
                <a href=" {{route('medico.index')}}" class="btn btn-link">Volver</a>

        </form>
  
      
       </div> 
@endsection