@extends('layouts.app')

@section('title')
    Registrar Sala
@endsection

@section('content')
<h1 class="text-center">Registrar Sala</h1>
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
        <form action="{{route('sala.store')}} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Nombre de la Sala:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre Sala">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Cantidad de Camas:</label>
                    <input type="number" class="form-control" name="cantcamas" placeholder="Cantidad Camas">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Paciente</label>
                    <select name="idPaciente" class="form-control" >

                    @foreach ($pacientes as $paciente)
                    <option value="{{$paciente->id}}">{{$paciente->nombre}}</option>

                    @endforeach

                    </select>
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
            
                <button type="submit" class="btn btn-success">Registrar Sala</button>
                
                <a href=" {{route('sala.index')}}" class="btn btn-link">Volver</a>

        </form>
       
         
       </div> 
@endsection