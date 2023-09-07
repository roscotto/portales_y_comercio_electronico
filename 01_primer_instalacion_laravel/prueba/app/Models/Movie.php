<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // use HasFactory;

    // indicamos el nombre de la tabla (es opcional, ya que por defecto Laravel asume que el nombre de la tabla es el plural del nombre del modelo)
    protected $table = 'movies';

    // Indicamos el nombre de la columna que es la clave primaria (es opcional, ya que por defecto Laravel asume que la clave primaria es la columna id) En este caso, es obligatorio ponerlo ya que la clave primaria es movie_id.
    protected $primaryKey = 'movie_id';
}
