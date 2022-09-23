@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 10%">
        <a class="btn btn-success" style="text-decoration: none" href="/addT">Agregar Tabla</a>
        <br>
        <a class="btn btn-success" style="text-decoration: none" href="/add"> Agregar Campos</a>
        <br>
    </div>
@endsection

{{--
<table class="table">
    <thead>
        <th>ID_administrador</th>
        <th>Nombre_Admin</th>
    </thead>
    <tbody>
        @foreach($listado as $l)
            <tr>
                <td>{{$l->ID_administrador}}</td>
                <td>{{$l->Nombre_Admin}}</td>
                <td><a class="btn btn-warning">Editar</a> <a class="btn btn-success">detalles</a></td>
            </tr>
        @endforeach
    </tbody>
</table>


<div class="row">
    <div class="col-sm">
    <a style="background-color: rgba(98, 98, 255, 0.575)" href="/addT">Agregar Tabla</a> 
    </div>
    <div class="col-sm">
    <a style="background-color: rgba(98, 98, 255, 0.575)" href="/add"> Agregar Campos</a>
    </div>
    <div class="col-sm">
    <a style="background-color: rgba(98, 98, 255, 0.575)" href=""> Eliminar Tabla</a>
    </div>
    <div class="col-sm">
    <a style="background-color: rgba(98, 98, 255, 0.575)" href=""> Eliminar Campos</a>
    </div>    


--}}