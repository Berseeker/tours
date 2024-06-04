<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Juan Pablo',
            'lastname' => 'Gomez Tejeda',
            'email' => 'juan.alucard.02@gmail.com',
            'password' => Hash::make('harimakenji01'),
            'department_id' => 1

        ]);
    }
}
