<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ratings')->insert([
            [
                'id' => 1,
                'name' => 'Apta para todo público',
                'abbreviation' => 'ATP',
            ],
            [
                'id' => 2,
                'name' => 'Mayores de 13 años',
                'abbreviation' => 'M13',
            ],
            [
                'id' => 3,
                'name' => 'Mayores de 16 años',
                'abbreviation' => 'M16',
            ],
            [
                'id' => 4,
                'name' => 'Mayores de 18 años',
                'abbreviation' => 'M18',
            ],
        ]);
    }
}

