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
        DB::table('tours')->insert([
            'sku' => '#000',
            'days_range_es' => 'Todo el dia',
            'days_range_en' => 'All day',
            'name_es' => 'Tour Chichen Itza',
            'name_en' => 'Chichen Itza Tour',
            'price' => 120,
            'currency' => 'USD',
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
            'itinerary_es' => json_encode([
                '<strong class="me-2">Day 1:</strong><span>Eiffel Tower, Champs-Elysées, Louvre Museum, Place de la Concorde</span><br>Visit the Eiffel Tower and take a tour to the top of the tower for panoramic views of Paris.
                Explore the Champs-Elysées avenue, known for its high-end fashion boutiques, cafes and cinemas.
                Stroll through the Jardin des Tuileries, a beautiful park located between the Louvre Museum and the Place de la Concorde.
                Have dinner in Montmartre, a picturesque neighborhood famous for its bohemian charm and artists studios.',
                '<strong class="me-2">Day 2:</strong><span>Winged Victory of Samothrace, Venus de Milo, Sainte Chapelle, Latin Quarter</span><br>Spend the day at the Louvre Museum, home to famous works of art such as the Mona Lisa, the Winged Victory of Samothrace, and the Venus de Milo.
                Visit the nearby Sainte Chapelle, a Gothic chapel known for its stained glass windows.
                Take a stroll along the Seine River and cross over to the Left Bank to explore the Latin Quarter, known for its historic universities, bookstores, and cafes.',
                '<strong class="me-2">Day 3:</strong><span>Notre-Dame Cathedral, Centre Pompidou, Marais neighborhood</span><br>Visit Notre-Dame Cathedral, a historic Gothic cathedral known for its stunning architecture and religious significance.
                Walk through the charming streets of the Marais neighborhood, known for its trendy shops, art galleries, and cafes.
                Explore the Centre Pompidou, a modern art museum and cultural center known for its avant-garde architecture and exhibits.',
                '<strong class="me-2">Day 4:</strong><span>Palace of Versailles, Hall of Mirrors</span><br>Take a day trip to the Palace of Versailles, a stunning royal chateau and UNESCO World Heritage site located just outside of Paris.
                Explore the vast gardens, the Hall of Mirrors, and the ornate apartments of the kings and queens of France.',
                '<strong class="me-2">Day 5:</strong><span>Musée dOrsay, Montparnasse, Moulin Rouge</span><br>Spend the morning at the Musée dOrsay, a museum housed in a former train station and home to an extensive collection of Impressionist and Post-Impressionist art.
                Take a stroll through the Montparnasse neighborhood, known for its historic cafes, theaters, and art studios.
                End the day with a visit to the iconic Moulin Rouge, a cabaret known for its extravagant shows and historic significance.'
            ]),
            'itinerary_en' => json_encode([
                '<strong class="me-2">Day 1:</strong><span>Eiffel Tower, Champs-Elysées, Louvre Museum, Place de la Concorde</span><br>Visit the Eiffel Tower and take a tour to the top of the tower for panoramic views of Paris.
                Explore the Champs-Elysées avenue, known for its high-end fashion boutiques, cafes and cinemas.
                Stroll through the Jardin des Tuileries, a beautiful park located between the Louvre Museum and the Place de la Concorde.
                Have dinner in Montmartre, a picturesque neighborhood famous for its bohemian charm and artists studios.',
                '<strong class="me-2">Day 2:</strong><span>Winged Victory of Samothrace, Venus de Milo, Sainte Chapelle, Latin Quarter</span><br>Spend the day at the Louvre Museum, home to famous works of art such as the Mona Lisa, the Winged Victory of Samothrace, and the Venus de Milo.
                Visit the nearby Sainte Chapelle, a Gothic chapel known for its stained glass windows.
                Take a stroll along the Seine River and cross over to the Left Bank to explore the Latin Quarter, known for its historic universities, bookstores, and cafes.',
                '<strong class="me-2">Day 3:</strong><span>Notre-Dame Cathedral, Centre Pompidou, Marais neighborhood</span><br>Visit Notre-Dame Cathedral, a historic Gothic cathedral known for its stunning architecture and religious significance.
                Walk through the charming streets of the Marais neighborhood, known for its trendy shops, art galleries, and cafes.
                Explore the Centre Pompidou, a modern art museum and cultural center known for its avant-garde architecture and exhibits.',
                '<strong class="me-2">Day 4:</strong><span>Palace of Versailles, Hall of Mirrors</span><br>Take a day trip to the Palace of Versailles, a stunning royal chateau and UNESCO World Heritage site located just outside of Paris.
                Explore the vast gardens, the Hall of Mirrors, and the ornate apartments of the kings and queens of France.',
                '<strong class="me-2">Day 5:</strong><span>Musée dOrsay, Montparnasse, Moulin Rouge</span><br>Spend the morning at the Musée dOrsay, a museum housed in a former train station and home to an extensive collection of Impressionist and Post-Impressionist art.
                Take a stroll through the Montparnasse neighborhood, known for its historic cafes, theaters, and art studios.
                End the day with a visit to the iconic Moulin Rouge, a cabaret known for its extravagant shows and historic significance.'
            ]),
            'images' => json_encode([
                'img/tours/t1.jpg',
                'img/tours/t2.jpg',
                'img/tours/t3.jpg',
                'img/tours/t4.jpg',
                'img/tours/t5.jpg',
                'img/tours/t6.jpg',
                'img/tours/t7.jpg'
            ]),
            'main_image' => 'img/tours/t27.jpg',
            'includes' => json_encode([1,3,4]),
            'location_id' => 1,
            'rate' => 'rate-30',
            'reviews' => 0
        ]);

        DB::table('tours')->insert([
            'sku' => '#000',
            'days_range_es' => '3 dias',
            'days_range_en' => '3 days',
            'name_es' => 'Tour 3 dias a Holbox',
            'name_en' => '3 days tour to Holbox',
            'price' => 80,
            'currency' => 'USD',
            'tag_es' => json_encode(['Mas vendido']),
            'tag_en' => json_encode(['bestseller']),
            'discount' => 0,
            'free_cancelation' => false,
            'type' => 'grupo',
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
            'itinerary_es' => json_encode([
                '<strong class="me-2">Day 1:</strong><span>Eiffel Tower, Champs-Elysées, Louvre Museum, Place de la Concorde</span><br>Visit the Eiffel Tower and take a tour to the top of the tower for panoramic views of Paris.
                Explore the Champs-Elysées avenue, known for its high-end fashion boutiques, cafes and cinemas.
                Stroll through the Jardin des Tuileries, a beautiful park located between the Louvre Museum and the Place de la Concorde.
                Have dinner in Montmartre, a picturesque neighborhood famous for its bohemian charm and artists studios.',
                '<strong class="me-2">Day 2:</strong><span>Winged Victory of Samothrace, Venus de Milo, Sainte Chapelle, Latin Quarter</span><br>Spend the day at the Louvre Museum, home to famous works of art such as the Mona Lisa, the Winged Victory of Samothrace, and the Venus de Milo.
                Visit the nearby Sainte Chapelle, a Gothic chapel known for its stained glass windows.
                Take a stroll along the Seine River and cross over to the Left Bank to explore the Latin Quarter, known for its historic universities, bookstores, and cafes.',
                '<strong class="me-2">Day 3:</strong><span>Notre-Dame Cathedral, Centre Pompidou, Marais neighborhood</span><br>Visit Notre-Dame Cathedral, a historic Gothic cathedral known for its stunning architecture and religious significance.
                Walk through the charming streets of the Marais neighborhood, known for its trendy shops, art galleries, and cafes.
                Explore the Centre Pompidou, a modern art museum and cultural center known for its avant-garde architecture and exhibits.',
                '<strong class="me-2">Day 4:</strong><span>Palace of Versailles, Hall of Mirrors</span><br>Take a day trip to the Palace of Versailles, a stunning royal chateau and UNESCO World Heritage site located just outside of Paris.
                Explore the vast gardens, the Hall of Mirrors, and the ornate apartments of the kings and queens of France.',
                '<strong class="me-2">Day 5:</strong><span>Musée dOrsay, Montparnasse, Moulin Rouge</span><br>Spend the morning at the Musée dOrsay, a museum housed in a former train station and home to an extensive collection of Impressionist and Post-Impressionist art.
                Take a stroll through the Montparnasse neighborhood, known for its historic cafes, theaters, and art studios.
                End the day with a visit to the iconic Moulin Rouge, a cabaret known for its extravagant shows and historic significance.'
            ]),
            'itinerary_en' => json_encode([
                '<strong class="me-2">Day 1:</strong><span>Eiffel Tower, Champs-Elysées, Louvre Museum, Place de la Concorde</span><br>Visit the Eiffel Tower and take a tour to the top of the tower for panoramic views of Paris.
                Explore the Champs-Elysées avenue, known for its high-end fashion boutiques, cafes and cinemas.
                Stroll through the Jardin des Tuileries, a beautiful park located between the Louvre Museum and the Place de la Concorde.
                Have dinner in Montmartre, a picturesque neighborhood famous for its bohemian charm and artists studios.',
                '<strong class="me-2">Day 2:</strong><span>Winged Victory of Samothrace, Venus de Milo, Sainte Chapelle, Latin Quarter</span><br>Spend the day at the Louvre Museum, home to famous works of art such as the Mona Lisa, the Winged Victory of Samothrace, and the Venus de Milo.
                Visit the nearby Sainte Chapelle, a Gothic chapel known for its stained glass windows.
                Take a stroll along the Seine River and cross over to the Left Bank to explore the Latin Quarter, known for its historic universities, bookstores, and cafes.',
                '<strong class="me-2">Day 3:</strong><span>Notre-Dame Cathedral, Centre Pompidou, Marais neighborhood</span><br>Visit Notre-Dame Cathedral, a historic Gothic cathedral known for its stunning architecture and religious significance.
                Walk through the charming streets of the Marais neighborhood, known for its trendy shops, art galleries, and cafes.
                Explore the Centre Pompidou, a modern art museum and cultural center known for its avant-garde architecture and exhibits.',
                '<strong class="me-2">Day 4:</strong><span>Palace of Versailles, Hall of Mirrors</span><br>Take a day trip to the Palace of Versailles, a stunning royal chateau and UNESCO World Heritage site located just outside of Paris.
                Explore the vast gardens, the Hall of Mirrors, and the ornate apartments of the kings and queens of France.',
                '<strong class="me-2">Day 5:</strong><span>Musée dOrsay, Montparnasse, Moulin Rouge</span><br>Spend the morning at the Musée dOrsay, a museum housed in a former train station and home to an extensive collection of Impressionist and Post-Impressionist art.
                Take a stroll through the Montparnasse neighborhood, known for its historic cafes, theaters, and art studios.
                End the day with a visit to the iconic Moulin Rouge, a cabaret known for its extravagant shows and historic significance.'
            ]),
            'images' => json_encode([
                'img/tours/t1.jpg',
                'img/tours/t2.jpg',
                'img/tours/t3.jpg',
                'img/tours/t4.jpg',
                'img/tours/t5.jpg',
                'img/tours/t6.jpg',
                'img/tours/t7.jpg'
            ]),
            'main_image' => 'img/tours/t25.jpg',
            'includes' => json_encode([1,3,4]),
            'location_id' => 4,
            'rate' => 'rate-40',
            'reviews' => 0,
        ]);

        DB::table('tours')->insert([
            'sku' => '#000',
            'days_range_es' => '6 hrs',
            'days_range_en' => '6 hrs',
            'name_es' => 'Tour Xcaret Todo Incluido',
            'name_en' => 'All inclusive Xcaret Tour',
            'price' => 320,
            'tag_es' => json_encode(['promocion']),
            'tag_en' => json_encode(['promotion']),
            'discount' => 10,
            'free_cancelation' => false,
            'type' => 'privado',
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
            'itinerary_es' => json_encode([
                '<strong class="me-2">Day 1:</strong><span>Eiffel Tower, Champs-Elysées, Louvre Museum, Place de la Concorde</span><br>Visit the Eiffel Tower and take a tour to the top of the tower for panoramic views of Paris.
                Explore the Champs-Elysées avenue, known for its high-end fashion boutiques, cafes and cinemas.
                Stroll through the Jardin des Tuileries, a beautiful park located between the Louvre Museum and the Place de la Concorde.
                Have dinner in Montmartre, a picturesque neighborhood famous for its bohemian charm and artists studios.',
                '<strong class="me-2">Day 2:</strong><span>Winged Victory of Samothrace, Venus de Milo, Sainte Chapelle, Latin Quarter</span><br>Spend the day at the Louvre Museum, home to famous works of art such as the Mona Lisa, the Winged Victory of Samothrace, and the Venus de Milo.
                Visit the nearby Sainte Chapelle, a Gothic chapel known for its stained glass windows.
                Take a stroll along the Seine River and cross over to the Left Bank to explore the Latin Quarter, known for its historic universities, bookstores, and cafes.',
                '<strong class="me-2">Day 3:</strong><span>Notre-Dame Cathedral, Centre Pompidou, Marais neighborhood</span><br>Visit Notre-Dame Cathedral, a historic Gothic cathedral known for its stunning architecture and religious significance.
                Walk through the charming streets of the Marais neighborhood, known for its trendy shops, art galleries, and cafes.
                Explore the Centre Pompidou, a modern art museum and cultural center known for its avant-garde architecture and exhibits.',
                '<strong class="me-2">Day 4:</strong><span>Palace of Versailles, Hall of Mirrors</span><br>Take a day trip to the Palace of Versailles, a stunning royal chateau and UNESCO World Heritage site located just outside of Paris.
                Explore the vast gardens, the Hall of Mirrors, and the ornate apartments of the kings and queens of France.',
                '<strong class="me-2">Day 5:</strong><span>Musée dOrsay, Montparnasse, Moulin Rouge</span><br>Spend the morning at the Musée dOrsay, a museum housed in a former train station and home to an extensive collection of Impressionist and Post-Impressionist art.
                Take a stroll through the Montparnasse neighborhood, known for its historic cafes, theaters, and art studios.
                End the day with a visit to the iconic Moulin Rouge, a cabaret known for its extravagant shows and historic significance.'
            ]),
            'itinerary_en' => json_encode([
                '<strong class="me-2">Day 1:</strong><span>Eiffel Tower, Champs-Elysées, Louvre Museum, Place de la Concorde</span><br>Visit the Eiffel Tower and take a tour to the top of the tower for panoramic views of Paris.
                Explore the Champs-Elysées avenue, known for its high-end fashion boutiques, cafes and cinemas.
                Stroll through the Jardin des Tuileries, a beautiful park located between the Louvre Museum and the Place de la Concorde.
                Have dinner in Montmartre, a picturesque neighborhood famous for its bohemian charm and artists studios.',
                '<strong class="me-2">Day 2:</strong><span>Winged Victory of Samothrace, Venus de Milo, Sainte Chapelle, Latin Quarter</span><br>Spend the day at the Louvre Museum, home to famous works of art such as the Mona Lisa, the Winged Victory of Samothrace, and the Venus de Milo.
                Visit the nearby Sainte Chapelle, a Gothic chapel known for its stained glass windows.
                Take a stroll along the Seine River and cross over to the Left Bank to explore the Latin Quarter, known for its historic universities, bookstores, and cafes.',
                '<strong class="me-2">Day 3:</strong><span>Notre-Dame Cathedral, Centre Pompidou, Marais neighborhood</span><br>Visit Notre-Dame Cathedral, a historic Gothic cathedral known for its stunning architecture and religious significance.
                Walk through the charming streets of the Marais neighborhood, known for its trendy shops, art galleries, and cafes.
                Explore the Centre Pompidou, a modern art museum and cultural center known for its avant-garde architecture and exhibits.',
                '<strong class="me-2">Day 4:</strong><span>Palace of Versailles, Hall of Mirrors</span><br>Take a day trip to the Palace of Versailles, a stunning royal chateau and UNESCO World Heritage site located just outside of Paris.
                Explore the vast gardens, the Hall of Mirrors, and the ornate apartments of the kings and queens of France.',
                '<strong class="me-2">Day 5:</strong><span>Musée dOrsay, Montparnasse, Moulin Rouge</span><br>Spend the morning at the Musée dOrsay, a museum housed in a former train station and home to an extensive collection of Impressionist and Post-Impressionist art.
                Take a stroll through the Montparnasse neighborhood, known for its historic cafes, theaters, and art studios.
                End the day with a visit to the iconic Moulin Rouge, a cabaret known for its extravagant shows and historic significance.'
            ]),
            'images' => json_encode([
                'img/tours/t1.jpg',
                'img/tours/t2.jpg',
                'img/tours/t3.jpg',
                'img/tours/t4.jpg',
                'img/tours/t5.jpg',
                'img/tours/t6.jpg',
                'img/tours/t7.jpg'
            ]),
            'main_image' => 'img/tours/t24.jpg',
            'includes' => json_encode([1,3,4]),
            'location_id' => 2,
            'rate' => 'rate-50',
            'reviews' => 0
        ]);

        DB::table('tours')->insert([
            'sku' => '#000',
            'days_range_es' => 'Todo el dia',
            'days_range_en' => 'All day',
            'name_es' => 'Tour Chichen Itza',
            'name_en' => 'Chichen Itza Tour',
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
            'itinerary_es' => json_encode([
                '<strong class="me-2">Day 1:</strong><span>Eiffel Tower, Champs-Elysées, Louvre Museum, Place de la Concorde</span><br>Visit the Eiffel Tower and take a tour to the top of the tower for panoramic views of Paris.
                Explore the Champs-Elysées avenue, known for its high-end fashion boutiques, cafes and cinemas.
                Stroll through the Jardin des Tuileries, a beautiful park located between the Louvre Museum and the Place de la Concorde.
                Have dinner in Montmartre, a picturesque neighborhood famous for its bohemian charm and artists studios.',
                '<strong class="me-2">Day 2:</strong><span>Winged Victory of Samothrace, Venus de Milo, Sainte Chapelle, Latin Quarter</span><br>Spend the day at the Louvre Museum, home to famous works of art such as the Mona Lisa, the Winged Victory of Samothrace, and the Venus de Milo.
                Visit the nearby Sainte Chapelle, a Gothic chapel known for its stained glass windows.
                Take a stroll along the Seine River and cross over to the Left Bank to explore the Latin Quarter, known for its historic universities, bookstores, and cafes.',
                '<strong class="me-2">Day 3:</strong><span>Notre-Dame Cathedral, Centre Pompidou, Marais neighborhood</span><br>Visit Notre-Dame Cathedral, a historic Gothic cathedral known for its stunning architecture and religious significance.
                Walk through the charming streets of the Marais neighborhood, known for its trendy shops, art galleries, and cafes.
                Explore the Centre Pompidou, a modern art museum and cultural center known for its avant-garde architecture and exhibits.',
                '<strong class="me-2">Day 4:</strong><span>Palace of Versailles, Hall of Mirrors</span><br>Take a day trip to the Palace of Versailles, a stunning royal chateau and UNESCO World Heritage site located just outside of Paris.
                Explore the vast gardens, the Hall of Mirrors, and the ornate apartments of the kings and queens of France.',
                '<strong class="me-2">Day 5:</strong><span>Musée dOrsay, Montparnasse, Moulin Rouge</span><br>Spend the morning at the Musée dOrsay, a museum housed in a former train station and home to an extensive collection of Impressionist and Post-Impressionist art.
                Take a stroll through the Montparnasse neighborhood, known for its historic cafes, theaters, and art studios.
                End the day with a visit to the iconic Moulin Rouge, a cabaret known for its extravagant shows and historic significance.'
            ]),
            'itinerary_en' => json_encode([
                '<strong class="me-2">Day 1:</strong><span>Eiffel Tower, Champs-Elysées, Louvre Museum, Place de la Concorde</span><br>Visit the Eiffel Tower and take a tour to the top of the tower for panoramic views of Paris.
                Explore the Champs-Elysées avenue, known for its high-end fashion boutiques, cafes and cinemas.
                Stroll through the Jardin des Tuileries, a beautiful park located between the Louvre Museum and the Place de la Concorde.
                Have dinner in Montmartre, a picturesque neighborhood famous for its bohemian charm and artists studios.',
                '<strong class="me-2">Day 2:</strong><span>Winged Victory of Samothrace, Venus de Milo, Sainte Chapelle, Latin Quarter</span><br>Spend the day at the Louvre Museum, home to famous works of art such as the Mona Lisa, the Winged Victory of Samothrace, and the Venus de Milo.
                Visit the nearby Sainte Chapelle, a Gothic chapel known for its stained glass windows.
                Take a stroll along the Seine River and cross over to the Left Bank to explore the Latin Quarter, known for its historic universities, bookstores, and cafes.',
                '<strong class="me-2">Day 3:</strong><span>Notre-Dame Cathedral, Centre Pompidou, Marais neighborhood</span><br>Visit Notre-Dame Cathedral, a historic Gothic cathedral known for its stunning architecture and religious significance.
                Walk through the charming streets of the Marais neighborhood, known for its trendy shops, art galleries, and cafes.
                Explore the Centre Pompidou, a modern art museum and cultural center known for its avant-garde architecture and exhibits.',
                '<strong class="me-2">Day 4:</strong><span>Palace of Versailles, Hall of Mirrors</span><br>Take a day trip to the Palace of Versailles, a stunning royal chateau and UNESCO World Heritage site located just outside of Paris.
                Explore the vast gardens, the Hall of Mirrors, and the ornate apartments of the kings and queens of France.',
                '<strong class="me-2">Day 5:</strong><span>Musée dOrsay, Montparnasse, Moulin Rouge</span><br>Spend the morning at the Musée dOrsay, a museum housed in a former train station and home to an extensive collection of Impressionist and Post-Impressionist art.
                Take a stroll through the Montparnasse neighborhood, known for its historic cafes, theaters, and art studios.
                End the day with a visit to the iconic Moulin Rouge, a cabaret known for its extravagant shows and historic significance.'
            ]),
            'images' => json_encode([
                'img/tours/t1.jpg',
                'img/tours/t2.jpg',
                'img/tours/t3.jpg',
                'img/tours/t4.jpg',
                'img/tours/t5.jpg',
                'img/tours/t6.jpg',
                'img/tours/t7.jpg'
            ]),
            'main_image' => 'img/tours/t27.jpg',
            'includes' => json_encode([1,3,4]),
            'location_id' => 1,
            'rate' => 'rate-40',
            'reviews' => 0
        ]);

        DB::table('tours')->insert([
            'sku' => '#000',
            'days_range_es' => 'Todo el dia',
            'days_range_en' => 'All day',
            'name_es' => 'Tour Chichen Itza',
            'name_en' => 'Chichen Itza Tour',
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
            'itinerary_es' => json_encode([
                '<strong class="me-2">Day 1:</strong><span>Eiffel Tower, Champs-Elysées, Louvre Museum, Place de la Concorde</span><br>Visit the Eiffel Tower and take a tour to the top of the tower for panoramic views of Paris.
                Explore the Champs-Elysées avenue, known for its high-end fashion boutiques, cafes and cinemas.
                Stroll through the Jardin des Tuileries, a beautiful park located between the Louvre Museum and the Place de la Concorde.
                Have dinner in Montmartre, a picturesque neighborhood famous for its bohemian charm and artists studios.',
                '<strong class="me-2">Day 2:</strong><span>Winged Victory of Samothrace, Venus de Milo, Sainte Chapelle, Latin Quarter</span><br>Spend the day at the Louvre Museum, home to famous works of art such as the Mona Lisa, the Winged Victory of Samothrace, and the Venus de Milo.
                Visit the nearby Sainte Chapelle, a Gothic chapel known for its stained glass windows.
                Take a stroll along the Seine River and cross over to the Left Bank to explore the Latin Quarter, known for its historic universities, bookstores, and cafes.',
                '<strong class="me-2">Day 3:</strong><span>Notre-Dame Cathedral, Centre Pompidou, Marais neighborhood</span><br>Visit Notre-Dame Cathedral, a historic Gothic cathedral known for its stunning architecture and religious significance.
                Walk through the charming streets of the Marais neighborhood, known for its trendy shops, art galleries, and cafes.
                Explore the Centre Pompidou, a modern art museum and cultural center known for its avant-garde architecture and exhibits.',
                '<strong class="me-2">Day 4:</strong><span>Palace of Versailles, Hall of Mirrors</span><br>Take a day trip to the Palace of Versailles, a stunning royal chateau and UNESCO World Heritage site located just outside of Paris.
                Explore the vast gardens, the Hall of Mirrors, and the ornate apartments of the kings and queens of France.',
                '<strong class="me-2">Day 5:</strong><span>Musée dOrsay, Montparnasse, Moulin Rouge</span><br>Spend the morning at the Musée dOrsay, a museum housed in a former train station and home to an extensive collection of Impressionist and Post-Impressionist art.
                Take a stroll through the Montparnasse neighborhood, known for its historic cafes, theaters, and art studios.
                End the day with a visit to the iconic Moulin Rouge, a cabaret known for its extravagant shows and historic significance.'
            ]),
            'itinerary_en' => json_encode([
                '<strong class="me-2">Day 1:</strong><span>Eiffel Tower, Champs-Elysées, Louvre Museum, Place de la Concorde</span><br>Visit the Eiffel Tower and take a tour to the top of the tower for panoramic views of Paris.
                Explore the Champs-Elysées avenue, known for its high-end fashion boutiques, cafes and cinemas.
                Stroll through the Jardin des Tuileries, a beautiful park located between the Louvre Museum and the Place de la Concorde.
                Have dinner in Montmartre, a picturesque neighborhood famous for its bohemian charm and artists studios.',
                '<strong class="me-2">Day 2:</strong><span>Winged Victory of Samothrace, Venus de Milo, Sainte Chapelle, Latin Quarter</span><br>Spend the day at the Louvre Museum, home to famous works of art such as the Mona Lisa, the Winged Victory of Samothrace, and the Venus de Milo.
                Visit the nearby Sainte Chapelle, a Gothic chapel known for its stained glass windows.
                Take a stroll along the Seine River and cross over to the Left Bank to explore the Latin Quarter, known for its historic universities, bookstores, and cafes.',
                '<strong class="me-2">Day 3:</strong><span>Notre-Dame Cathedral, Centre Pompidou, Marais neighborhood</span><br>Visit Notre-Dame Cathedral, a historic Gothic cathedral known for its stunning architecture and religious significance.
                Walk through the charming streets of the Marais neighborhood, known for its trendy shops, art galleries, and cafes.
                Explore the Centre Pompidou, a modern art museum and cultural center known for its avant-garde architecture and exhibits.',
                '<strong class="me-2">Day 4:</strong><span>Palace of Versailles, Hall of Mirrors</span><br>Take a day trip to the Palace of Versailles, a stunning royal chateau and UNESCO World Heritage site located just outside of Paris.
                Explore the vast gardens, the Hall of Mirrors, and the ornate apartments of the kings and queens of France.',
                '<strong class="me-2">Day 5:</strong><span>Musée dOrsay, Montparnasse, Moulin Rouge</span><br>Spend the morning at the Musée dOrsay, a museum housed in a former train station and home to an extensive collection of Impressionist and Post-Impressionist art.
                Take a stroll through the Montparnasse neighborhood, known for its historic cafes, theaters, and art studios.
                End the day with a visit to the iconic Moulin Rouge, a cabaret known for its extravagant shows and historic significance.'
            ]),
            'images' => json_encode([
                'img/tours/t1.jpg',
                'img/tours/t2.jpg',
                'img/tours/t3.jpg',
                'img/tours/t4.jpg',
                'img/tours/t5.jpg',
                'img/tours/t6.jpg',
                'img/tours/t7.jpg'
            ]),
            'main_image' => 'img/tours/t27.jpg',
            'includes' => json_encode([1,3,4]),
            'location_id' => 1,
            'rate' => 'rate-45',
            'reviews' => 0
        ]);
    }
}
