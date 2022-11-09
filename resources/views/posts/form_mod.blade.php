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
                    <a class="btn btn-success" style="text-decoration: none" href="/table_new">Agregar Objeto</a> 
                </li>
                <hr>
                <li>
                    <a class="btn btn-success" style="text-decoration: none" href="/show_all">Mostrar Datos</a>
                </li>
              </ul>
              <hr>
        </div>
            <div class="b-example-divider"></div>
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark"style="width: 80%;">
                <div class="scrollbar scrollbar-success">
                    <div class="force-overflow">
                        <div class="d-flex flex-row mb-3">
                            <div class="p-2 flex-fill">
                                <h6>Editando Registro {{ $object[0]->id }}</h6> 
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
                                    
                                    <div>
                                        <button class="btn btn-success">Enviar</button>
                                    </div>
                
                                </form>
                            </div>
                            
                            <div class="vr"></div>
                            <div class="p-2">
                                <form action="{{ route('campo.update') }}" method="post">
                                    @csrf
                                    <h6>Agregar Nuevo Campo</h6>
                            
                                    <div class="form-group">
                                        <label for="nombrecampo">Nombre</label>
                                        <input name="nombrecampo" placeholder="Nombre del campo" class='form-control'><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="tipocampo">Tipo de Dato</label>
                                        <select name="tipocampo" class='form-control'>
                                            <option value="varchar(255)">Varchar</option>
                                            <option value="INT">Numero</option>
                                            <option value="FLOAT(53)">Float</option>
                                            <option value="DATETIME">Fecha</option>
                                            <option value="TEXT">Texto</option>
                                        </select>
                                        <br>
                                    </div>
                                    <button class="btn btn-success">Agregar Campo</button>
                                </form>
                                <br>
                                <hr><hr>
                                <form action="{{ route('campo.destroy') }}" method="post">
                                    @csrf   
                                    <h6>Eliminar un Campo</h6>
                                    <div class="form-group">
                                        <label for="nombrecampodel">Nombre del Campo a Eliminar</label><br>
                                        <input name="nombrecampodel" placeholder="Nombre del Campo" class='form-control'>
                                    </div>
                                    <br>
                                    <button class="btn btn-success">Eliminar Campo</button>
                                </form>
                            </div>
                    </div>
                </div>
                    
                
                    </div>
                </div>
            </div>
    </main> 
</div>

@endsection