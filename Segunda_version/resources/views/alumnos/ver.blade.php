<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curso de laravel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <style>p {color: red;}</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <a href="{{ route('alumnos.index') }}"> Ver listado Alumnos</a>
        </div>
        <div class="container pt-3 my-3 bg-dark text-white">
            <div class="row">
              <div class="col"><label><strong>Nombres:</strong> </div>
              <div class="col">{{ $alumno->nombre }}</label><br></div>
              <div class="col"><label><strong>Apellidos:</strong> </div>
              <div class="col">{{ $alumno->apellido }}</label><br></div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
              <div class="col"><label><strong>Edad:</strong></div>
              <div class="col">{{ $alumno->edad }}</label><br></div>
              <div class="col"><label><strong>Teléfono:</strong></div>
              <div class="col">{{ $alumno->telefono }}</label><br></div>
            </div>
            <div class="row">
              <div class="col-6"><label><strong>Dirección:</strong></div>
              <div class="col">{{ $alumno->direccion }}</label><br></div>
            </div>
            <div class="row">
              <div class="col"><a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a></div>
              <div class="col">
                <form action="{{ route('alumnos.destroy', $alumno->id) }}" method ="POST" >
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Alumno')">
                </form>
              </div>
            </div>
          </div>
        @if($errors->any())
        <p class="error-message">{{$errors->first('mensaje')}}</p>
        @endif
    </div>
    <div class="container">
      
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<script>
    function EliminarRegistro(value){
        action = confirm(value) ? true: event.preventDefault()
    }
</script>
</html>
