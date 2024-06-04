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
            'currency' => 'MXN',
            'exchange_rate' => 16.56,
            'flag' => null,
        ]);

        DB::table('countries')->insert([
            'name' => Str::of('United States')->ucfirst(),
            'lang' => 'en_US',
            'currency' => 'USD',
            'exchange_rate' => 1,
            'flag' => null,
        ]);

        DB::table('countries')->insert([
            'name' => Str::of('Europa')->ucfirst(),
            'lang' => 'en_EU',
            'currency' => 'EUR',
            'exchange_rate' => 0.92,
            'flag' => null,
        ]);
    }
}
