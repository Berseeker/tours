<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'name' => Str::of('Merida')->ucfirst(),
            'country_id' => 1
        ]);

        DB::table('locations')->insert([
            'name' => Str::of('Cancun')->ucfirst(),
            'country_id' => 1
        ]);
    }
}
