<?php
/**
 * @var Illuminate\Support\ViewErrorBag $errors
 */
?>

@extends('layouts.main')

@section('title', 'Publicar una Nueva Película')

@section('content')

    <h1>Publicar una Nueva Película</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h2 class="h6">Hay errores de validación en los datos del form. Por favor, revisalos y corregílos para poder
                cargar correctamente la pelicula.</h2>

            {{-- <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul> --}}

        </div>
    @endif

    <form action="{{ url('/peliculas/nueva') }}" method="POST">

        <!-- Todas las peticiones por POST deben incluir el token 'csrf' -->
        @csrf
        <div class="mb-3">
            <!-- shortcut  label[for=title].form-label{Título} -->

            <label for="title" class="form-label">Título</label>
            <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title') }}"
            @error('title')
            aria-describedby="error-title"
            aria-invalid="true"
            @enderror
            >
            @error('title')
                <p id="error-title" class="text-danger"> {{ $message }}</p>
            @enderror

        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Fecha de Estreno</label>
            <input type="date" id="release_date" name="release_date" class="form-control @error('release_date') is-invalid @enderror"
            value="{{ old('release_date') }}"
            @error('release_date')
            class="invalid-feedback"
            aria-describedby="error-release_date"
            aria-invalid="true"
            @enderror
            >
            {{-- Imprimir errores:
                1 - usar un condicional:
                @if ($errors->has('release_date'))
                <p class="text-danger">
                    {{ $errors->first('title') }}
                </p>
                  @endif
                  2 - usar directiva @error --}}
            @error('release_date')
                <p id="error-release_date" class="text-danger"> {{ $message }}</p>
            @enderror

        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="text" id="price" name="price" class="form-control @error('price') is-invalid @enderror"
            value="{{ old('price') }}"
            @error('price')
            aria-describedby="error-price"
            aria-invalid="true"
            @enderror
            >
            @error('price')
                <p id="error-price" class="text-danger"> {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="synopsis" class="form-label">Sinopsis</label>
            <textarea id="synopsis" name="synopsis" class="form-control @error('synopsis') is-invalid @enderror"

            @error('synopsis')
            aria-describedby="error-synopsis"
            aria-invalid="true"
            @enderror
            >{{ old('synopsis') }}</textarea>
            @error('synopsis')
                <p id="error-synopsis" class="text-danger"> {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Portada</label>
            <input type="file" id="cover" name="cover" class="form-control @error('cover') is-invalid @enderror"
            @error('cover')
            aria-describedby="error-cover"
            aria-invalid="true"
            @enderror
            >
            @error('cover')
                <p id="error-cover" class="text-danger"> {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover_description" class="form-label">Descripción de la Portada</label>
            <input type="text" id="cover_description" name="cover_description" class="form-control @error('cover_description') is-invalid @enderror"
            value="{{ old('cover_description') }}"
            @error('cover_description')
            aria-describedby="error-cover_description"
            aria-invalid="true"
            @enderror
            >
            @error('cover_description')
                <p id="error-cover_description" class="text-danger"> {{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>

@endsection
