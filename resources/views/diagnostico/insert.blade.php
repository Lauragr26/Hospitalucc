@extends('layouts.app')

@section('title')
        Nuevo Diagnostico
@endsection

@section('content')
<h1 class="text-center">Nuevo Diagnostico</h1>
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
        <form action="{{route('diagnostico.store')}} " method="post">
            @csrf
        
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Tipo de Diagnostico:</label>
                    <input type="text" class="form-control" name="tipo" placeholder="Tipo Diagnostico">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Complicaciones:</label>
               
                    <input type="radio" name="complicaciones" value="Si">
                    <label for="Si">Si</label>
            
                    <input type="radio" name="complicaciones" value="No">
                    <label for="No">No</label>
                </div>
            </div>
            
                <button type="submit" class="btn btn-success">Registrar Diagnostico</button>
                <a href=" {{route('diagnostico.index')}}" class="btn btn-link">Volver</a>

        </form>
   
       </div> 
@endsection