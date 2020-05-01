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
                <div class="card-header text-center">Diagnostico</div>

<div class="card-body">
<table class="table table-hover">


<thead class="thead-dark">
<tr>
    <th>Fecha Diagnostico</th>
    <th>Paciente</th>
    <th>Acciones</th>
</tr>
</thead>
<tbody>
    @foreach ($detdiagnosticos as $detdiagnostico)
        <tr>
           
            <td>{{$detdiagnostico->fecha}}</td>

            <td>

            @foreach ($pacientes as $paciente)
            <option value="{{$paciente->id}}"
                @if ($detdiagnostico->idPaciente == $paciente->id) 
                selected   
                @endif>
                {{$paciente->nombre}}</option>
                
            </td>
  
            <td>
                <form action="{{route('detdiagnostico.destroy', $detdiagnostico->id)}}" method="post">
                <a href="{{route('detdiagnostico.show', $detdiagnostico->id)}}" class="btn btn-info">Ver</a>
                <a href="{{route('detdiagnostico.edit', $detdiagnostico->id)}} " class="btn btn-primary">Editar</a>
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
    <a href="{{route('detdiagnostico.create')}} "><button class="btn btn-primary">Nuevo Detalle</button></a>
</div>
</div>
</div>
</div>
  
@endsection