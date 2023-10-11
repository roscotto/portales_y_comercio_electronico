<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        DB::table('movies')->insert([
            [
                'movie_id' => 1,
                'title' => 'Les Misérables',
                'price' => 2099,
                'release_date' => '2013-02-14',
                'rating_id' => 3, // M16
                'synopsis' => 'Después de 19 años como prisionero, Jean Valjean es liberado por Javert, el oficial a cargo de la fuerza de trabajo de la prisión. Valjean viola su libertad y más tarde usa el dinero robado para reinventarse como alcalde y dueño de una fábrica. Por su parte, Javert promete llevar a Valjean de vuelta a la cárcel. Ocho años después, Valjean se convierte en el guardián de un niño llamado Cosette tras la muerte de su madre, pero la persecución de Javert significa que la paz tardará en llegar.',
                'cover' => 'covers/cover-les-miserables.jpg',
                'cover_description' => 'Tapa de la película Les Misérables',
                'created_at' => now(), // now() es una función de Laravel que retorna la fecha y hora actual.
                'updated_at' => now(),
            ],
            [
                'movie_id' => 2,
                'title' => 'Seven',
                'price' => 2099,
                'release_date' => '1996-02-15',
                'rating_id' => 3, // M16
                'synopsis' => 'Somerset es un solitario y veterano detective a punto de retirarse que se encuentra con Mills, un joven impulsivo. Ambos investigan un particular asesinato. Es este el primero de una serie de crímenes que aluden los siete pecados capitales.',
                'cover' => 'covers/cover-seven.jpg',
                'cover_description' => 'Tapa de la película Seven',
                'created_at' => now(), // now() es una función de Laravel que retorna la fecha y hora actual.
                'updated_at' => now(),
            ],
            [
                'movie_id' => 3,
                'title' => 'Big Fish',
                'price' => 2099,
                'release_date' => '2004-02-05',
                'rating_id' => 1, // ATP
                'synopsis' => 'El joven William Bloom regresa a su casa para cuidar a su padre enfermo, quien cuenta interminables historias sobre su pasado.',
                'cover' => 'covers/cover-big-fish.jpg',
                'cover_description' => 'Tapa de la película Big Fish',
                'created_at' => now(), // now() es una función de Laravel que retorna la fecha y hora actual.
                'updated_at' => now(),
            ]

        ]);
    }
}
