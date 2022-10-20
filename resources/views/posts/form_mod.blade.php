@extends('layouts.app')

@section('content')
<a class="btn btn-success" style="text-decoration: none" href="/">Volver al Menu</a>
<div class="container">
    @include('inc.messages')
    <h3>Editando Registro {{ $object[0]->id }}</h3>    
    <form action="{{ route('posts.update', $object[0]->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        @foreach ($object[0]->getAttributes() as $key => $value)
            @if ($key === 'id' || $key === 'created_at' || $key === 'updated_at' )
            @else
                <div class="form-group">
                    <label for="{{ strtolower($key) }}">{{ $key }}</label>
                    <input name="{{ strtolower($key) }}" placeholder="{{ $key }}" class='form-control' value="{{ old( $key, $object[0]-> $key ) }}">
                    <br>
                </div>
            @endif
        @endforeach
        
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

@endsection