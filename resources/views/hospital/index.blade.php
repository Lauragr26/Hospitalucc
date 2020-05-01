@extends('layouts.app')

@section('content')


@if($message = Session::get('exito'))

<div class="alert alert-success">
        <p>{{$message}}</p>
</div>

@endif

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">Hospital</div>

<div class="card-body">
<table class="table table-hover">

<thead class="thead-dark">
<tr>
    <th>Nombre</th>
    <th>Dirección</th>
    <th>Acciones</th>
</tr>
</thead>
<tbody>
    @foreach ($hospitals as $hospital)
        <tr>
            <td>{{$hospital->nombre}}</td>
            <td>{{$hospital->direccion}}</td>
            
            <td>
                <form action="{{route('hospital.destroy', $hospital->id)}}" method="post">
                <a href="{{route('hospital.show', $hospital->id)}}" class="btn btn-info">Ver</a>
                <a href="{{route('hospital.edit', $hospital->id)}}" class="btn btn-primary">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Desea eliminar estos datos?')"  class="btn btn-danger">Eliminar</button>
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
    <a href="{{route('hospital.create')}} "><button class="btn btn-primary">Registrar Hospital</button></a>        
</div>
</div>
</div>

@endsection