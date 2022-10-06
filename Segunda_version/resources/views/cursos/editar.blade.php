<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>p {color: red;}</style>
</head>
<body>

    <div class="container">
        <a href="{{ route('cursos.index') }}"> Ver listado Cursos</a>
        <h2>Editar Curso</h2>
        <form action="{{ route('cursos.update', $curso->id) }}" method ="POST">
            @csrf
            {{ method_field('PUT') }}
            <label>Nombre Curso:</label>
            <input type="text" name="nombre" placeholder="Nombre Curso" value="{{ old('nombre', $curso->nombre) }}">
            @error('nombre')<p class="error-message">{{ $message }}</p>@enderror
            <label>Nivel:</label>
            <input type="text" name="nivel" placeholder="Nivel" value="{{ old('nivel', $curso->nivel) }}">
            @error('nivel')<p class="error-message">{{ $message }}</p>@enderror
            <label>Horas Academicas:</label>
            <input type="text" name="horas_academicas" placeholder="Horas Academicas" value="{{ old('horas_academicas', $curso->horas_academicas) }}">
            <label>Profesor:</label>
            <select id="profesor_id" name="profesor_id">
                @foreach($profesores as $profesor)
                    <option value="{{$profesor->id}}" {{ old('profesor_id', $curso->profesor_id) == $profesor->id ? 'selected' : '' }}> {{ $profesor->nombre }}</option>
                @endforeach
            </select>
            @error('profesor_id')
                <p class="error-message">{{ $message }}</p>
            @enderror
            <label>Inscritos:</label>
            <select id="alumno_ids" name="alumno_ids[]" multiple>
                @foreach($alumnos as $alumno)
                    @php $valor = 0; @endphp
                    @foreach($alumno_curso as $alumno_curso_valor)
                        @if(old('alumno_ids.0', $alumno->id) == $alumno_curso_valor->alumno_id)
                            @php $valor = 1; @endphp
                        @endif
                    @endforeach
                    @if($valor == 1)
                        <option value="{{$alumno->id}}" selected> {{ $alumno->nombre }}</option>
                    @else
                        <option value="{{$alumno->id}}"> {{ $alumno->nombre}}</option>
                    @endif
                @endforeach
            </select>
            @error('alumno_ids')
                <p class="error-message">{{ $message }}</p>
            @enderror
            <input type="submit" value="Guardar">
        </form>
    </div>    
</body>
</html>