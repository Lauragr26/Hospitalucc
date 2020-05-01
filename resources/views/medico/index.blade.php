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
                <div class="card-header text-center">Medico</div>

<div class="card-body">
<table class="table table-hover">


<thead class="thead-dark">
<tr>
    
    <th>Nombre</th>
    <th>Nro Identificación</th>
    <th>Acciones</th>
</tr>
</thead>
<tbody>
    @foreach ($medicos as $medico)
        <tr>
        
            <td>{{$medico->nombre}}</td>
            <td>{{$medico->cedula}}</td>

            <td>
                <form action="{{route('medico.destroy', $medico->id)}}" method="post">
                <a href="{{route('medico.show', $medico->id)}}" class="btn btn-info">Ver</a>
                <a href="{{route('medico.edit', $medico->id)}} " class="btn btn-primary">Editar</a>
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
    <a href="{{route('medico.create')}} "><button class="btn btn-primary">Registrar Medico</button></a>
</div>
</div>
</div>
</div>
  
@endsection