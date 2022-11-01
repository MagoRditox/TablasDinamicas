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
            </ul>
            <hr>
        </div>
        <div class="b-example-divider"></div>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark"style="width: 80%;">
            <div class="list-group list-group-flush border-bottom scrollarea">
                <div class="d-flex flex-row mb-3">
                    <div class="p-2 flex-fill">
                        <h6>Datos</h6>
                        <table class="table table-dark">
                            <thead>
                                @foreach ($objects[0]->getAttributes() as $key => $value)
                                    @if ($key === 'created_at' || $key === 'updated_at' )
                                    @else
                                        <th>{{ $key }}</th>
                                    @endif
                                @endforeach
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                            </thead>
                            <tbody>
                                @foreach($objects as $object)
                                    <tr>
                                    @foreach ($object->getAttributes() as $key => $value)
                                    @if ($key === 'created_at' || $key === 'updated_at' )
                                    @else
                                        <td>{{ $value }}</td>
                                    @endif
                                    @endforeach
                                    <td><a class="btn btn-warning bi bi-pencil-fill" href="{{ route('posts.edit', $object->id) }}"></a></td>
                                    <td>
                                        <form action="{{ route('posts.destroy', $object->id) }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger bi bi-trash" onclick="return eliminarobjeto('Seguro que quieres eliminar este Objeto?')"></button>
                                        </form>
                                    </td>  
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

