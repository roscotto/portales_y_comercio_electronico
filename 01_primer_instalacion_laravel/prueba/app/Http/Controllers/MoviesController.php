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
            'movie' => Movie::findOrFail($id)
        ]);
    }

    public function formCreate()
    {
        return view('movies.create');
    }

    //para recuperar datos de una superglobal utilizaremos el método estático input() de la clase Request
    public function processCreate(Request $request) // tenemos que ponerle el tipo de dato Request para que laravel sepa que es un objeto de tipo Request
    {
        // Validación de datos
        // el objeto $request tiene un método validate() que nos permite validar los datos que recibimos del formulario
        // este método recibe como primer parámetro un array asociativo con las reglas de validación
        // y como segundo parámetro un array asociativo con los mensajes de error
        // si la validación es correcta, retorna los datos validados en un array asociativo
        // si la validación falla, se redirecciona automáticamente a la página anterior y se muestran los errores guardados en la variable de sesion $errors
        $request->validate(Movie::$rules, Movie::$errorMessages);

        //dd($request);
        // Capturamos TODOS los datos del formulario con el método input() de la clase Request
        // dd($request->input());

        // Capturamos los datos del formulario de forma individual
        //dd($request->input('title'));
        //dd($request->only(['title', 'price']));

        // Capturamos todos EXCEPTO el token
        $data = $request->except(['_token']);

        // es necesario establecer la propiedad fillable del modelo Movie
        Movie::create($data);

        // redireccionamos a la ruta de listado de películas
        return redirect('/peliculas/listado');
    }
}
