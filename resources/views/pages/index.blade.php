@extends('layouts.app')
@extends('layouts.estilo')
@section('content')
<div class="container">
    <div>
        @include('inc.messages')
    </div>
    <main>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark mb-3" style="width: 170px;">
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a class="btn btn-success" style="text-decoration: none" href="/table_new">Agregar Objeto</a> 
            </li>
            <hr>
            <li>
                <a class="btn btn-success" style="text-decoration: none" href="/show_all">Mostrar Datos</a>
            </li>
          </ul>
          <hr>
    </div>
    
    </main>
</div>
@endsection
