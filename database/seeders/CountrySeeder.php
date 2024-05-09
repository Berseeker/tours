<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            'name' => Str::of('Mexico')->ucfirst(),
            'lang' => 'es_MX',
            'flag' => null,
        ]);

        DB::table('countries')->insert([
            'name' => Str::of('United States')->ucfirst(),
            'lang' => 'en_US',
            'flag' => null,
        ]);
    }
}
