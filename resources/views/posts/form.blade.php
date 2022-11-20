@extends('layouts.app')
@extends('layouts.estilo')
@section('content')
<div class="container">
    <div>
        @include('inc.messages')
    </div>
    <main>
        
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark mb-3" style="width: 170px;">
            <a class="btn btn-success" style="text-decoration: none" href="/">Volver al Menu</a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li>
                  <a class="btn btn-success" style="text-decoration: none" href="/show_all">Mostrar Datos</a>
              </li>
              <hr>
            </ul>
            <hr>
        </div>
        <div class="b-example-divider"></div>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark"style="width: 80%;">
            <div class="list-group list-group-flush border-bottom scrollarea">
                <div class="d-flex flex-row mb-3">
                    <div class="p-2 flex-fill">
                        <h6>Nuevo Ingreso</h6>
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
                            <button class="btn btn-success" >Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
    </main>
</div>
@endsection