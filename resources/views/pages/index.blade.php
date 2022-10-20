@extends('layouts.app')

@section('content')
@include('inc.messages')
    <div class="container" style="margin-top: 10%">
        <a class="btn btn-success" style="text-decoration: none" href="/table_new">Agregar Objeto</a> 
        <a class="btn btn-success" style="text-decoration: none" href="/show_all">Mostrar Datos</a>
        <br>
    </div>
@endsection
