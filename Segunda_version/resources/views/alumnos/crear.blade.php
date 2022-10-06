<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Alumno</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>p {color: red;}</style>
</head>
<body>
    <div class="container">
        <a href="{{ route('alumnos.index') }}"> Ver listado Alumnos</a>
    <h2>Nuevo Alumno</h2>
        <form action="{{ route('alumnos.store') }}" method ="POST">
            @csrf
            <label>Nombres:</label>
            <input type="text" name="nombre" placeholder="Nombres" value="{{ old('nombre_apellido') }}">
            @error('nombre')
                <p class="error-message">{{ $message }}</p>
            @enderror
            <label>Apellidos:</label>
            <input type="text" name="apellido" placeholder="Apellidos" value="{{ old('nombre_apellido') }}">
            @error('apellido')
                <p class="error-message">{{ $message }}</p>
            @enderror
            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Edad" value="{{ old('edad') }}">
            @error('edad')  
                <p class="error-message">{{ $message }}</p>
            @enderror
            <label>Teléfono:</label>
            <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}">
            <label>Dirección:</label>
            <input type="text" name="direccion" placeholder="Dirección" value="{{ old('direccion') }}>
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>