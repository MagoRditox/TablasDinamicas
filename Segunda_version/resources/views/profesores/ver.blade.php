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
        <table class="table table-bordered">
            <thead>
                <tr >
                    <th colspan="4"><a href="{{ route('profesores.index') }}"> Ver listado Profesores</a></th>
                </tr>
                <tr>
                  <th colspan="4">Profesor</th>
                </tr>
              </thead>
          <tbody>
            <tr>
              <th><label><strong>Nombres:</strong></label></th>
              <td><label>{{ $profesor->nombre }}</label></td>
              <th><label ><strong>Apellidos</strong></label></th>
              <td><label> <label>{{ $profesor->apellido }}</label></td>
            </tr>
            <tr>
              <th><label><strong>Profesion:</strong></label></th>
              <td><label>{{ $profesor->profesion }}</label></td>
              <th><label><strong>Grado Academico:</strong></label></th>
              <td><label>{{ $profesor->grado_academico }}</label></td>
            </tr>
            <tr>
              <th><label><strong>Telefono</strong></label></th>
              <td colspan="3"><label>{{ $profesor->telefono }}</label></td>
            </tr>
            <tr>
                @if($errors->any())
                <p class="error-message">{{$errors->first('mensaje')}}</p>
                @endif
                <br>
                <td><a href="{{ route('profesores.edit', $profesor->id) }}">Editar</a> <br></td>
                <td colspan="3">
                    <form action="{{ route('profesores.destroy', $profesor->id) }}" method ="POST" >
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Profesor')">
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