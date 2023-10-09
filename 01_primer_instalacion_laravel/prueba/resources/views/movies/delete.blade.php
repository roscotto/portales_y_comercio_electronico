@extends('layouts.main')



@section('title', 'Eliminar la película' . $movie->title)

@section('content')
<article>

        <h1 class="mb-2">Confirmar la eliminación de la película {{ $movie->title }}</h1>

        <p> Estás por eliminar la siguiente película de la base de datos:</p>

        <div class="row">
            <div class="col-8">
                <ul>
                    <li class="my-2">Fecha de Estreno: {{ $movie->release_date }}</li>

                    <li class="my-2">Precio: $ {{ $movie->price }}</li>
                </ul>
            </div>
            <div class="col-4">
                <!-- acá va a ir la portada -->
            </div>
        </div>

        <h2 class="my-2">Sinopsis:</h2>

        <p class="my-2">{{ $movie->synopsis }}</p>

        <h2>Confirmar eliminación</h2>
        <form action="{{ url('/peliculas/' . $movie->movie_id . '/eliminar') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>

</article>

@endsection
