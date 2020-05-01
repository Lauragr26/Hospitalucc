@extends('layouts.app')

@section('title')
    Registrar Laboratorio
@endsection

@section('content')
<h1 class="text-center">Registrar Laboratorio</h1>
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
        <form action="{{route('laboratorio.store')}} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Nombre del Laboratorio:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre Laboratorio">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Dirección:</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Dirección">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Telefono:</label>
                    <input type="number" class="form-control" name="telefono" placeholder="Telefono">
                </div>
            </div>
        
           
                <button type="submit" class="btn btn-success">Registrar Laboratorio</button>
                <a href=" {{route('laboratorio.index')}}" class="btn btn-link">Volver</a>

        </form>
        
      
       </div> 
@endsection