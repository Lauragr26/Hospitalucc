@extends('layouts.app')

@section('title')
    Registrar Hospital
@endsection

@section('content')
<h1 class="text-center">Registrar Hospital</h1>
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
        <form action="{{route('hospital.store')}} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre del Hospital:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre Hospital">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Dirección:</label>
                    <input type="number" class="form-control" name="direccion" placeholder="Dirección">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Telefono:</label>
                    <input type="number" class="form-control" name="telefono" placeholder="Telefono">
                </div>
            </div>
            
                <button type="submit" class="btn btn-success">Registrar Hospital</button>
          
                <a href=" {{route('hospital.index')}}" class="btn btn-link">Volver</a>
               
        </form>
      
       </div> 
@endsection