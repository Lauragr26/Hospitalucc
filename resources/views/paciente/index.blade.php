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
                <div class="card-header text-center">Paciente</div>

<div class="card-body">
<table class="table table-hover">


<thead class="thead-dark">
<tr>
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Nro Identificación</th>
    <th>Acciones</th>
</tr>
</thead>
<tbody>
    @foreach ($pacientes as $paciente)
        <tr>
            <td>{{$paciente->id}}</td>
            <td>{{$paciente->nombre}}</td>
            <td>{{$paciente->cedula}}</td>

  
            <td>
                <form action="{{route('paciente.destroy', $paciente->id)}}" method="post">
                <a href="{{route('paciente.show', $paciente->id)}}" class="btn btn-info">Ver</a>
                <a href="{{route('paciente.edit', $paciente->id)}}" class="btn btn-primary">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Desea eliminar estos datos?')" class="btn btn-danger">Eliminar</button>
                </form>
             </td>
        </tr>
@endforeach
</tbody>
</table>
</div>
</div>
<br>
<div>
    <a href="{{route('paciente.create')}} "><button class="btn btn-success">Registrar Paciente</button></a>
</div>
</div>
</div>
</div>
  
@endsection