<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Curso de laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>p {color: red;}</style>
</head>
<body>
    <div class="container mt-3">
        <table class="table table-bordered ">
          <thead>
            <tr >
                <th colspan="4"><a href="{{ route('cursos.index') }}"> Ver listado Cursos</a></th>
            </tr>
            <tr>
              <th colspan="4">Curso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th><label>Nombre Curso:</label></th>
              <td><label>{{ $curso->nombre }}</label></td>
              <th><label>Nivel:</label></th>
              <td><label>{{ $curso->nivel }}</label></td>
            </tr>
            <tr>
              <th><label>Horas Academicas:</label></th>
              <td colspan="3"><label>{{ $curso->horas_academicas }}</label></td>
            </tr>
            <tr>
              <th><label>Profesor:</label></th>
              <td colspan="3"><label >{{ $curso->profesor->nombre }}</label></td>
            </tr>
            <tr>
                <th><label>Inscritos:</label></th>
                <td colspan="3">
                    <ul>
                        @foreach($alumno_curso as $alumno)
                            <li>{{ $alumno->nombre }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            <tr>
                @if($errors->any())
                <p class="error-message">{{$errors->first('mensaje')}}</p>
                @endif
                <br>
                <td><a href="{{ route('cursos.edit', $curso->id) }}">Editar</a> <br></td>
                <td colspan="3">
                    <form action="{{ route('cursos.destroy', $curso->id) }}" method ="POST" >
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Curso')">
                    </form>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
    
     
    
 
    
</body>
<script>
    function EliminarRegistro(value){
        action = confirm(value) ? true: event.preventDefault()
    }
</script>
</html>