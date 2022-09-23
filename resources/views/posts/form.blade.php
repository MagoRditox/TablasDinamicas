@extends('layouts.app')

@section('content')

<div class="container">
@include('inc.messages')
<form method="POST" action="addT">
    @csrf
    <div class="form-group">
    <input name="title" placeholder="Nombre Del Producto" class='form-control' required><br>
    </div>
    <div class="form-group">
    <input name="body" placeholder="Descripcion" class='form-control' required><br>
    </div>
    <div class="form-group">
    <input name="color" placeholder="Color" class='form-control' required><br>
    </div>
    <button>Agregar</button>

</form>
</div>

@endsection