@extends('layouts.app')

@section('content')

@if($message = Session::get('exito'))

<div class="alert alert-success">
        <p>{{$message}}</p>
</div>

@endif

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">Servicio</div>

<div class="card-body">
<table class="table table-hover">


<thead class="thead-dark">
<tr>
    <th>Fecha Servicio</th>
    <th>Hospital</th>
    <th>Acciones</th>
</tr>
</thead>
<tbody>
    @foreach ($servicios as $servicio)
        <tr>
     
            <td>{{$servicio->fecha}}</td>

            <td>

                @foreach ($hospitals as $hospital)
                <option value="{{$hospital->id}}"
                    @if ($servicio->idHospital == $hospital->id) 
                    selected   
                    @endif>
                    {{$hospital->nombre}}</option>

            </td>

  
            <td>
                <form action="{{route('servicio.destroy', $servicio->id)}}" method="post">
                <a href="{{route('servicio.show', $servicio->id)}}" class="btn btn-info">Ver</a>
                <a href="{{route('servicio.edit', $servicio->id)}} " class="btn btn-primary">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Desea eliminar estos datos?')" class="btn btn-danger">Eliminar</button>
                </form>
             </td>
        </tr>
@endforeach
@endforeach
</tbody>
</table>
</div>
</div>
<br>
<div>
    <a href="{{route('servicio.create')}} "><button class="btn btn-primary">Nuevo Servicio</button></a>
</div>
</div>
</div>
</div>
  
@endsection