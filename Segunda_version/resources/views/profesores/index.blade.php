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
        <a href="{{ route('profesores.create') }}"> Nuevo Profesor</a>
        <div class="row">
            <div class="col-8">
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Profesion</th>
                            <th scope="col">Grado Academico</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    @foreach ($profesores as $profesor)
                    <tbody>
                        <tr>
                            <td>{{ $profesor->nombre }}</td>
                            <td>{{ $profesor->apellido }}</td>
                            <td>{{ $profesor->profesion }}</td>
                            <td>{{ $profesor->grado_academico }}</td>
                            <td>{{ $profesor->telefono }}</td>
                            <td>
                                <a href="{{ route('profesores.show', $profesor->id) }}">Ver</a>
                                <a href="{{ route('profesores.edit', $profesor->id) }}">Editar</a>
                                <a href="/profesores/eliminar/{{$profesor->id}}" onclick="return eliminarprofesor('Eliminar profesor')"> Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <br>
            </div>
            <div class="col-4">col-4</div>
        </div>
        
    </div>
</body>
<script>
    function eliminarprofesor(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</html>