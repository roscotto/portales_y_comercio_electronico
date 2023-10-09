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
                <th>Sinopsis</th>
                <th>Precio</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->movie_id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->release_date }}</td>
                    <td>{{ $movie->synopsis }}</td>
                    <td>$ {{ $movie->price }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ url('/peliculas/' . $movie->movie_id) }}" class="btn btn-primary">Detalle</a>
                            <a href="{{ url('/peliculas/' . $movie->movie_id . '/eliminar') }}" class="btn btn-danger">Eliminar</a>

                            
                        </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
