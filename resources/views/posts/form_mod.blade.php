@extends('layouts.app')

@section('content')

<div class="container">
@include('inc.messages')
<form action="{{ route('posts.update', $object->id) }}" method ="POST">
    @csrf
    {{ method_field('PUT') }}
    <div class="form-group">
    <input name="color" placeholder="Color" class='form-control' value="{{ old('Color', $object->Color) }}"><br>
    </div>
    <div class="form-group">
    <input name="tamano" placeholder="Tamaño" class='form-control' value="{{ old('Tamano', $object->Tamano) }}"><br>
    </div>
    <div class="form-group">
    <input name="formato" placeholder="Formato" class='form-control' value="{{ old('Formato', $object->Formato) }}"><br>
    </div>
    <button>Agregar</button>
</form>
<a class="btn btn-success" style="text-decoration: none" href="/">Volver al Menu</a>
<livewire:nuevo-campo/>
@livewireScripts
</div>
@endsection