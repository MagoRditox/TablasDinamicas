@extends('layouts.app')

@section('content')

<div class="container">
@include('inc.messages')
<form method="POST" action="table_new">
    @csrf
    <div class="form-group">
        <input name="nombre" placeholder="Nombre" class='form-control' required><br>
    </div>
    <div class="form-group">
        <input name="descripcion" placeholder="Descripcion" class='form-control' required><br>
    </div>
    <div class="form-group">
        <input name="rol" placeholder="Rol" class='form-control' required><br>
    </div>
    <div class="form-group">
        <input name="color" placeholder="Color (Opcional)" class='form-control'><br>
    </div>
    <div class="form-group">
        <input name="tamano" placeholder="Tamaño (Opcional)" class='form-control'><br>
    </div>
    <div class="form-group">
        <input name="formato" placeholder="Formato (Opcional)" class='form-control'><br>
    </div>
    <button>Agregar</button>
</form>
</div>

@endsection