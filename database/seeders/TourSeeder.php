<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'sku' => '#000',
            'day_range_es' => 'Todo el dia',
            'day_range_en' => 'All day',
            'name_es' => 'Tour Chichen Itza',
            'name_es' => 'Chichen Itza Tour',
            'price' => 120,
            'tag_es' => json_encode(['popular']),
            'tag_en' => json_encode(['popular']),
            'discount' => 0,
            'free_cancelation' => false,
            'type' => 'all',
            'start_point' => 'Plaza de Toros',
            'end_point' => 'Plaza las Americas',
            'lang' => json_encode(['es', 'en']),
            'age_range' => '8 - 70',
            'description_es' => "Visit the best Paris has to offer with Go City and save time and money compared to buying separate admissions to attractions and tours. Choose between a 2 or 3-day Paris All-Inclusive Pass, browse the included activities, place reservations where needed, and on the day of your visit simply show your pass on your mobile device for entry. It's that simple!
                                Admire the sights from the river on a Bateaux Parisiens River Cruise, climb up the Eiffel Tower on a guided tour, sample a cheeky glass (or three!) of French wine, hop on and off a Bus Tour around the city, and so much more! Your pass is valid for 2-years from purchase date and is only activated once you visit your first attraction - offering you plenty of flexibility around your trip. You then have 2 or 3 consecutive days to continue using your pass where you wish.",
            'description_en' => "Visit the best Paris has to offer with Go City and save time and money compared to buying separate admissions to attractions and tours. Choose between a 2 or 3-day Paris All-Inclusive Pass, browse the included activities, place reservations where needed, and on the day of your visit simply show your pass on your mobile device for entry. It's that simple!
                                Admire the sights from the river on a Bateaux Parisiens River Cruise, climb up the Eiffel Tower on a guided tour, sample a cheeky glass (or three!) of French wine, hop on and off a Bus Tour around the city, and so much more! Your pass is valid for 2-years from purchase date and is only activated once you visit your first attraction - offering you plenty of flexibility around your trip. You then have 2 or 3 consecutive days to continue using your pass where you wish.",
            'information_es' => json_encode([
                'Your pass(es) will be instantly delivered to you in PDF format, which you can either save on your phone or print. This pdf will include your individual QR coded pass(es) along with the accompanying digital guide.',
                'For the best possible experience, follow the instructions on the PDF to sync your pass with the Go City app.',
                'All passes are valid for 2 years from purchase date and only become activated with your first attraction visit.',
                'After activation, your pass will be valid for the number of consecutive days purchased (not 24-hour periods). We advise you start early in the day to make the most of your sightseeing.',
                'The most popular attractions or tours require advanced reservation. Consult the included digital guide (found on your confirmation voucher) for instructions prior to your visit and make sure to place reservations well in advance to avoid disappointment.'
            ]),
            'information_en' => json_encode([
                'Your pass(es) will be instantly delivered to you in PDF format, which you can either save on your phone or print. This pdf will include your individual QR coded pass(es) along with the accompanying digital guide.',
                'For the best possible experience, follow the instructions on the PDF to sync your pass with the Go City app.',
                'All passes are valid for 2 years from purchase date and only become activated with your first attraction visit.',
                'After activation, your pass will be valid for the number of consecutive days purchased (not 24-hour periods). We advise you start early in the day to make the most of your sightseeing.',
                'The most popular attractions or tours require advanced reservation. Consult the included digital guide (found on your confirmation voucher) for instructions prior to your visit and make sure to place reservations well in advance to avoid disappointment.'
            ]),
            'itinerary_es' => ''
        ]);
    }
}
