<?php
/**
 * @var \App\Models\Movie[]| \Illuminate\Database\Eloquent\Collection $movies */
?>

@extends('layouts.main')

@section('title', 'Listado de Películas')

@section('content')
    <h1>Listado de Películas</h1>

    <div>
        <a href="{{ url('peliculas/nueva') }}">Publicar una nueva película</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Fecha de Estreno</th>
                <th>Clasificación</th>
                <th>Sinopsis</th>
                <th>Precio</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->movie_id }}</td>
                    <td width="20%">{{ $movie->title }}</td>
                    <td width="10%">{{ $movie->release_date }}</td>
                    <?PHP
                    // $movie->rating ES EL NOMBRE DEL MÉTODO DE LA RELACION
                    // obtenemos un modelo de tipo Rating con todos los datos del modelo relacionado
                    ?>
                    <td width="10%">{{ $movie->rating->abbreviation }}</td>
                    <td>{{ $movie->synopsis }}</td>
                    <td width="10%">$ {{ $movie->price }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ url('/peliculas/' . $movie->movie_id) }}" class="btn btn-primary">Detalle</a>
                            <a href="{{ url('/peliculas/' . $movie->movie_id) . '/editar' }}" class="btn btn-secondary">Editar</a>
                            <a href="{{ url('/peliculas/' . $movie->movie_id . '/eliminar') }}" class="btn btn-danger">Eliminar</a>


                        </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
