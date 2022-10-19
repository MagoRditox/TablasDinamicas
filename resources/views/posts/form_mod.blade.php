@extends('layouts.app')

@section('content')

<div class="container">
@include('inc.messages')
<form action="{{ route('posts.update', $object[0]->id) }}" method ="POST">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input name="nombre" placeholder="Nombre" class='form-control' value="{{ old('nombre', $object[0]->Nombre) }}">
        <br>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input name="descripcion" placeholder="Descripcion" class='form-control' value="{{ old('descripcion', $object[0]->Descripcion) }}">
        <br>
    </div>

    <div class="form-group">
        <label for="rol">Rol</label>
        <input name="rol" placeholder="Rol" class='form-control' value="{{ old('rol', $object[0]->Rol) }}">
        <br>
    </div>

    <div class="form-group">
        <label for="color">Color</label>
        <input name="color" placeholder="Color" class='form-control' value="{{ old('color', $object[0]->Color) }}">
        <br>
    </div>

    <div class="form-group">
        <label for="tamano">Tamaño</label>
        <input name="tamano" placeholder="Tamaño" class='form-control' value="{{ old('tamano', $object[0]->Tamano) }}">
        <br>
    </div>

    <div class="form-group">
        <label for="formato">Formato</label>  
        <input name="formato" placeholder="Formato" class='form-control' value="{{ old('formato', $object[0]->Formato) }}">
        <br>
    </div>
    <button class="btn btn-success">Enviar</button>
</form>
<br>
<form action="{{ route('campo.update') }}" method="post">
    @csrf
    <h3>Agregar Nuevo Campo</h3>
    <br>
    <div class="form-group">
        <label for="nombrecampo">Nombre del Campo</label>
        <input name="nombrecampo" placeholder="Nombre del campo" class='form-control'><br>
    </div>

    <div class="form-group">
        <label for="tipocampo">Tipo de Dato</label>

        <select name="tipocampo" class='form-control'>
            <option value="varchar(255)">Varchar</option>
            <option value="INT">Numero</option>
        </select>
        <br>
    </div>

    <button class="btn btn-success">Agregar Campo</button>

</form>
<br>
<form action="{{ route('campo.destroy') }}" method="post">
    @csrf   
    <h3>Eliminar un Campo</h3>
    <br>
    <div class="form-group">
    <label for="nombrecampodel">Nombre del Campo a Eliminar</label>
    <input name="nombrecampodel" placeholder="Nombre del Campo" class='form-control'>
    </div>
    <button class="btn btn-success">Eliminar Campo</button>
</form>
</div>
    </div>
<a class="btn btn-success" style="text-decoration: none" href="/">Volver al Menu</a>
</div>

@endsection