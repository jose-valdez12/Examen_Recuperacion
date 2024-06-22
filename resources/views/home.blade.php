@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body{
        background: khaki;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h5 class="card-title">Registro</h5>
                        <p>
                            <a href="#" class="btn btn-secondary">Agregar nuevo Registro </a>
                        </p>
                        <table class="table table-dark table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">anio_publicacion</th>
                                <th scope="col">autor</th>
                                <th scope="col">clasificacion</th>
                                <th scope="col">cantidad_paginas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($libros as $libro)
                                <tr>
                                    <th scope="row">{{ $libro->id }}</th>
                                    <td>{{ $libro->titulo }}</td>
                                    <td>{{ $libro->anio_publicacion }}</td>
                                    <td>{{ $libro->autor}}</td>
                                    <td>{{ $libro->clasificacion}}</td>
                                    <td>{{ $libro->cantidad_paginas}}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="#" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este alumno?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
