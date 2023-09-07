<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {

        // Vamos a usar el modelo de Movie poara hacer consultas a la base de datos
        // El método all() nos devuelve todos los registros de la tabla movies. Retorna una colección de objetos de tipo Movie.(array de objetos del tipo del modelo)
        $movies = Movie::all();

        // dump and die
        //dd($movies);
        //return view('movies.index'); // es lo mismo que poner 'movies/index'

        // pasaje de variables a las vistas
        // como segundo parámetro, le pasamos un array asociativo con las variables que queremos pasar a la vista, siendo 'key' el nombre de la variable y 'value' el valor de la variable
        return view('movies.index', [
            'movies' => $movies // tambien podriamos poner 'movies' => Movie::all()
        ]); // es lo mismo que poner 'movies/index'

    }


    public function detail(int $id)
    {
        // buscar la película con el id que recibimos por parámetro utilizando el método find(), de Eloquent, del modelo Movie
        // busca por la clave primaria, que en este caso es movie_id
        return view('movies.detail', [
            'movie' => Movie::find($id)
        ]);
    }
}
