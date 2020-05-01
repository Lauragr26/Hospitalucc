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
                <div class="card-header text-center">Consulta</div>

<div class="card-body">
<table class="table table-hover">


<thead class="thead-dark">
<tr>
    <th>Fecha Consulta</th>
    <th>Paciente</th>
    <th>Acciones</th>
</tr>
</thead>
<tbody>
    @foreach ($consultas as $consulta)
        <tr>
           
            <td>{{$consulta->fecha}}</td>

            <td>

            @foreach ($pacientes as $paciente)
            <option value="{{$paciente->id}}"
                @if ($consulta->idPaciente == $paciente->id) 
                selected   
                @endif>
                {{$paciente->nombre}}</option>
                
            </td>
  
            <td>
                <form action="{{route('consulta.destroy', $consulta->id)}}" method="post">
                <a href="{{route('consulta.show', $consulta->id)}}" class="btn btn-info">Ver</a>
                <a href="{{route('consulta.edit', $consulta->id)}} " class="btn btn-primary">Editar</a>
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
    <a href="{{route('consulta.create')}} "><button class="btn btn-primary">Nueva Consulta</button></a>
</div>
</div>
</div>
</div>
  
@endsection