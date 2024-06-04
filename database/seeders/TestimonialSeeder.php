<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            'name' => 'Juan Pablo',
            'location' => 'CDMX, Mexico',
            'rate' => 'rate-35',
            'testimonial' => 'The boat ride provided great views of the two islands. The audio tours were excellent, and I highly recommend this experience.'
        ]);

        DB::table('testimonials')->insert([
            'name' => 'Jenifer Lee',
            'location' => 'Paris, France',
            'rate' => 'rate-35',
            'testimonial' => 'We also enjoyed arriving at the tour office a little early and enjoying a delicious almond croissant at the cafe across the street.'
        ]);

        DB::table('testimonials')->insert([
            'name' => 'Juan Pablo',
            'location' => 'CDMX, Mexico',
            'rate' => 'rate-35',
            'testimonial' => 'The boat ride provided great views of the two islands. The audio tours were excellent, and I highly recommend this experience.'
        ]);

        DB::table('testimonials')->insert([
            'name' => 'Jenifer Lee',
            'location' => 'Paris, France',
            'rate' => 'rate-35',
            'testimonial' => 'We also enjoyed arriving at the tour office a little early and enjoying a delicious almond croissant at the cafe across the street.'
        ]);
    }
}
