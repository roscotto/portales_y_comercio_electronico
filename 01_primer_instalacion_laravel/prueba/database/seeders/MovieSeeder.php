<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        \DB::table('movies')->insert([
            [
                'movie_id' => 1,
                'title' => 'El Señor de los Anillos: La Comunidad del Anillo',
                'price' => 2099,
                'release_date' => '2001-12-02',
                'synopsis' => 'Unos tipitos se van de paseo para tirar un anillo malo en un volcán.',
                'created_at' => now(), // now() es una función de Laravel que retorna la fecha y hora actual.
                'updated_at' => now(),
            ],
            [
                'movie_id' => 2,
                'title' => 'El Discurso del Rey',
                'price' => 1699,
                'release_date' => '2014-06-12',
                'synopsis' => 'Un futuro rey tiene problemas para hablar y busca a un doctor que lo ayude.',
                'created_at' => now(), // now() es una función de Laravel que retorna la fecha y hora actual.
                'updated_at' => now(),
            ],
            [
                'movie_id' => 3,
                'title' => 'Matrix',
                'price' => 1899,
                'release_date' => '1999-11-22',
                'synopsis' => 'Neo sigue al conejito y se mete en flor de quilombo.',
                'created_at' => now(), // now() es una función de Laravel que retorna la fecha y hora actual.
                'updated_at' => now(),
            ],
        ]);
    }
}
