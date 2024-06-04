<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            'name' => Str::of('Ventas')->ucfirst(),
            'slug' => Str::slug(Str::of('Ventas')->lower(), '-')
        ]);

        DB::table('departments')->insert([
            'name' => Str::of('Marketing')->ucfirst(),
            'slug' => Str::slug(Str::of('Marketing')->lower(), '-')
        ]);
    }
}
