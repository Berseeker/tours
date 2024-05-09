<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TourIncludeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tours_includes')->insert([
            'included' => true,
            'item_es' => '<strong>Comida:</strong> Incluye desayuno',
            'item_es' => '<strong>Meal:</strong> Breakfast included'
        ]);

        DB::table('tours_includes')->insert([
            'included' => false,
            'item_es' => '<strong>Transportacion:</strong> Incluida desde tu hospedaje hasta el tour',
            'item_es' => '<strong>Transportation:</strong> Included where you are host till the tour'
        ]);

        DB::table('tours_includes')->insert([
            'included' => true,
            'item_es' => '<strong>Guia:</strong> Incluido en el tour',
            'item_es' => '<strong>Guide:</strong> Included in the tour'
        ]);
    }
}
