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
    <th>Codigo</th>
    <th>Tipo Diagnostico</th>
    <th>Acciones</th>
</tr>
</thead>
<tbody>
    @foreach ($diagnosticos as $diagnostico)
        <tr>
            <td>{{$diagnostico->id}}</td>
            <td>{{$diagnostico->tipo}}</td>
         
            <td>
                <form action="{{route('diagnostico.destroy', $diagnostico->id)}}" method="post">
                <a href="{{route('diagnostico.show', $diagnostico->id)}}" class="btn btn-info">Ver</a>
                <a href="{{route('diagnostico.edit', $diagnostico->id)}} " class="btn btn-primary">Editar</a>
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
    <a href="{{route('diagnostico.create')}} "><button class="btn btn-primary">Nuevo Diagnostico</button></a>
</div>
</div>
</div>
</div>
  
@endsection