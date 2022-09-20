@extends('templates.template')
@section('content')
    <h1 class="text-center">Datos</h1>
    <hr>
    <a href="Nuevo" class="btn btn-warning">Nuevo Registro</a>
    <table class="table">
        <thead>
            <td>N. Profesor</td>
            <td>A. Profesor</td>
        </thead>
        <tbody>
            @foreach($listado as $lis)
            <tr>
                <td>{{$lis->Teacher_Name}}</td>
                <td>{{$lis->Teacher_Lastname}}</td>
                <td><a class="btn btn-warning">Editar</a> <a class="btn btn-success">Detalles</a></td>
            </tr>    
            @endforeach
        </tbody>
    </table>
@endsection