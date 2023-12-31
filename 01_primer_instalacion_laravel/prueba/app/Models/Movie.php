<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Movie
 *
 * @property int $movie_id
 * @property string $title
 * @property int $price
 * @property string|null $release_date
 * @property int $rating_id
 * @property string|null $synopsis
 * @property string|null $cover
 * @property string|null $cover_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Movie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereSynopsis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereUpdatedAt($value)
 * @property-read \App\Models\Rating $rating
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereCover($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereCoverDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereRatingId($value)
 * @mixin \Eloquent
 */
class Movie extends Model
{
    // use HasFactory;

    // indicamos el nombre de la tabla (es opcional, ya que por defecto Laravel asume que el nombre de la tabla es el plural del nombre del modelo)
    protected $table = 'movies';

    // Indicamos el nombre de la columna que es la clave primaria (es opcional, ya que por defecto Laravel asume que la clave primaria es la columna id) En este caso, es obligatorio ponerlo ya que la clave primaria es movie_id.
    protected $primaryKey = 'movie_id';

    // indicamos las columnas que se pueden rellenar masivamente con el método fill() del modelo. Es decir, las columnas que se pueden rellenar con el método create() del modelo. (mass assignment)
    protected $fillable = ['title', 'price', 'release_date', 'synopsis', 'cover', 'cover_description'];

    public static $rules = [
        // 'title' => ['required', 'min:3', 'max:255']
        'title' => 'required|min:3|max:255',
        'price' => 'required|numeric',
        'release_date' => 'required|date',
    ];

    public static $errorMessages = [
        'title.required' => 'El título es obligatorio',
        'title.min' => 'El título debe tener al menos :min caracteres',
        'title.max' => 'El título debe tener como máximo :max caracteres',
        'price.required' => 'El precio es obligatorio',
        'price.numeric' => 'El precio debe ser un número',
        'release_date.required' => 'La fecha de estreno es obligatoria',
        'release_date.date' => 'La fecha de estreno debe ser una fecha válida',
    ];



    /*
    Relaciones
    por cada relación, se debe crear un método que devuelva la relación
    el nombre del método debe ser el mismo que el nombre de la relación. Laravel lo usa para crear
    una nueva propiedad dinámica en el modelo, que contiene la relación y nos da acceso
    al modelo relacionado.

    Cada método debe retornar la relación, usando el método de Eloquent correspondiente

    */

     public function rating(): BelongsTo
     {
        // belongsTo recibe 3 parámetros:
        // 1. El modelo al que representa la tabla relacionada
        // 2. FK de la tabla actual que referencia a la tabla relacionada
        // 3. ownerKey: PK de la tabla relacionada
        return $this->belongsTo(Rating::class, 'rating_id', 'id');
     }
}
