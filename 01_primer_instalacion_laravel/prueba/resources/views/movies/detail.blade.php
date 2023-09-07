@extends('layouts.main')



@section('title', $movie->title)

@section('content')
<article>

        <h1 class="mb-2">{{ $movie->title }}</h1>

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

</article>

@endsection
