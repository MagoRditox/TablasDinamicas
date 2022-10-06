<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Profesor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>p {color: red;}</style>
</head>
<body>

    <div class="container">
        <a href="{{ route('profesores.index') }}"> Ver listado Profesores</a>
        <h2>Editar Profesor</h2>
        <form action="{{ route('profesores.update', $profesor->id) }}" method ="POST">
            @csrf
            {{ method_field('PUT') }}
            <label>Nombres:</label>
            <input type="text" name="nombre" placeholder="Nombres" value="{{ $profesor->nombre }}">
            @error('nombre')<p class="error-message">{{ $message }}</p>@enderror
            <label>Nombres:</label>
            <input type="text" name="apellido" placeholder="Apellidos" value="{{ $profesor->apellido }}">
            @error('apellido')<p class="error-message">{{ $message }}</p>@enderror
            <label>Profesión:</label>
            <input type="text" name="profesion" placeholder="Profesión" value="{{ $profesor->profesion }}">
            @error('profesion') <p class="error-message">{{ $message }}</p> @enderror
            <label>Grado Academico:</label>
            <input type="text" name="grado_academico" placeholder="Grado Academico" value="{{ old('grado_academico', $profesor->grado_academico) }}">
            <label>Teléfono:</label>
            <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono', $profesor->telefono) }}">
            <input type="submit" value="Guardar">
        </form>
    </div>    
</body>
</html>