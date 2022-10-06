<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>p {color: red;}</style>
</head>
<body>

    <div class="container">
        <a href="{{ route('alumnos.index') }}"> Ver listado Alumnos</a>
        <h2>Editar Alumno</h2>
        <form action="{{ route('alumnos.update', $alumno->id) }}" method ="POST">
            @csrf
            {{ method_field('PUT') }}
            <label>Nombres:</label>
            <input type="text" name="nombre" placeholder="Nombres" value="{{ old('nombre', $alumno->nombre) }}">
            @error('nombre')<p class="error-message">{{ $message }}</p>@enderror
            <label>Nombres:</label>
            <input type="text" name="apellido" placeholder="Apellidos" value="{{ old('apellido', $alumno->apellido) }}">
            @error('apellido')<p class="error-message">{{ $message }}</p>@enderror
            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Edad" value="{{ old('edad', $alumno->edad) }}">
            @error('edad')<p class="error-message">{{ $message }}</p>@enderror
            <label>Teléfono:</label>
            <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono', $alumno->telefono) }}">
            <label>Dirección:</label>
            <input type="text" name="direccion" placeholder="Dirección" value="{{ old('direccion', $alumno->direccion) }}">
            <input type="submit" value="Guardar">
        </form>
    </div>    
</body>
</html>