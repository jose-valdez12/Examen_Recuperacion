@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Alumno') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{route('libro.update',$libro->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="titulo">titulo:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $libro->titulo }}" required>
                            </div>
                            <div class="form-group">
                                <label for="anio_publicacion">anio_publicacion:</label>
                                <input type="text" class="form-control" id="anio_publicacion" name="anio_publicacion" value="{{ $libro->anio_publicacion }}" required>
                            </div>
                            <div class="form-group">
                                <label for="autor">autor:</label>
                                <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}" required>
                            </div>
                            <div class="form-group">
                                <label for="clasificacion">clasificacion:</label>
                                <input type="text" class="form-control" id="clasificacion" name="clasificacion" value="{{ $libro->clasificacion }}" required>
                            </div>
                            <div class="form-group">
                                <label for="cantidad_paginas">cantidad_paginas:</label>
                                <input type="email" class="form-control" id="cantidad_paginas" name="cantidad_paginas" value="{{ $libro->cantidad_paginas }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a class="btn btn-primary" href="{{route('libro.index')}}" role="button">Regresar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
