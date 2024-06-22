<!DOCTYPE html>
<html>
<head>
    <title>Crear Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Crear registro</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{route('libro.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">titulo:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="anio_publicacion">anio_publicacion:</label>
            <input type="text" class="form-control" id="anio_publicacion" name="anio_publicacion" required>
        </div>
        <div class="form-group">
            <label for="autor">autor:</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>

        <div class="form-group">
            <label for="clasificacion">clasificacion:</label>
            <input type="text" class="form-control" id="clasificacion" name="clasificacion" required>
        </div>
        <div class="form-group">
            <label for="cantidad_paginas">cantidad_paginas:</label>
            <input type="text" class="form-control" id="cantidad_paginas" name="cantidad_paginas" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-primary" href="{{route('libro.index')}}" role="button">Regresar</a>
    </form>
</div>
</body>
</html>
