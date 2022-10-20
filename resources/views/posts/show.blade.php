@extends('layouts.app')

@section('content')
<a class="btn btn-success" style="text-decoration: none" href="/">Volver al Menu</a>
@include('inc.messages')
    <h3>Mostrando datos de la db</h3>
    <table class="table">
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
                <td><form action="{{ route('posts.destroy', $object->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger bi bi-trash" onclick="return eliminarobjeto('Seguro que quieres eliminar este Objeto?')"></button>
                    </form>
                    </td>  
                </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection

