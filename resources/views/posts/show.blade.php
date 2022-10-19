@extends('layouts.app')

@section('content')
@include('inc.messages')
    <h1>Mostrando datos de la db</h1>
    <table class="table">
        <thead>
            <th>id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Rol</th>
            <th>Color</th>
            <th>Tamaño</th>
            <th>Formato</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($objects as $object)
                <tr>
                    <td>{{$object->id}}</td>
                    <td>{{$object->Nombre}}</td>
                    <td>{{$object->Descripcion}}</td>
                    <td>{{$object->Rol}}</td>
                    <td>{{$object->Color}}</td>
                    <td>{{$object->Tamano}}</td>
                    <td>{{$object->Formato}}</td>
                    <td>
                    <a href="{{ route('posts.edit', $object->id) }}"> Editar</a> /
                    <a href="/posts/{{$object->id}}" onclick="return eliminarcurso('Eliminar curso')"> Eliminar</a></td>  
                </tr>
            @endforeach

            <a class="btn btn-success" style="text-decoration: none" href="/">Volver al Menu</a>
        </tbody>
    </table>
@endsection

