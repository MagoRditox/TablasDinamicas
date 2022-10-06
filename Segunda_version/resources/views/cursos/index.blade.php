<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <!-- HTML -->
    <link rel="stylesheet" href="{{ asset('resources/css/alu.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <a href="{{ route('cursos.create') }}"> Nuevo Curso</a>
        <div class="row">
            <div class="col-8">
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Nivel</th>
                            <th scope="col">Horas Academicas</th>
                            <th scope="col">Profesor Asignado</th>
                            <th scope="col">Estudiantes Inscritos</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    @foreach ($cursos as $curso)
                    <tbody>
                        <tr>
                            <td>{{ $curso->nombre }}</td>
                            <td>{{ $curso->nivel }}</td>
                            <td>{{ $curso->horas_academicas }}</td>
                            <td>{{ $curso->profesor }}</td>
                            <td>
                                @foreach ($curso->alumnos as $alumno)
                                    {{ $alumno->alumno }} <br>
                                @endforeach
                                </td>
                            <td>
                                <a href="{{ route('cursos.show', $curso->id) }}">Ver</a>
                                <a href="{{ route('cursos.edit', $curso->id) }}">Editar</a>
                                <a href="/cursos/eliminar/{{$curso->id}}" onclick="return eliminarcurso('Eliminar curso')"> Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="col-4">col-4</div>
        </div>
       
    </div>
</body>
<script>
    function eliminarcurso(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</html>