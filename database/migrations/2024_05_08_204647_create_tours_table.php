<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->default('#000');
            $table->string('days_range_es'); //E.g. 1 DAY - LONDON
            $table->string('days_range_en');
            $table->string('name_es');
            $table->string('name_en');
            $table->double('price'); // USD
            $table->json('tag_es'); //E.g promotion, popular
            $table->json('tag_en');
            $table->integer('discount')->default(0); //porcentaje
            $table->boolean('free_cancelation')->default(false); //porcentaje
            $table->enum('type',['all','grupo','privado'])->default('grupo'); //Tipos de tour: ['grupo','privadas']
            $table->string('start_point'); //E.g. El tour empiezar por: La torre Eiffel
            $table->string('end_point'); //E.g. El tour termina por: El museo
            $table->json('lang'); //E.g. ['es','en']
            $table->string('age_range'); //E.g. 12 - 70 years old
            $table->longText('description_es');
            $table->longText('description_en');
            $table->json('information_en'); //E.g. son como reglas del tour (All passes are valid for 2 years from purchase)
            $table->json('information_es'); //E.g se hara en forma de lista
            $table->json('itinerary_es'); //E.g itinerario del tour en caso de que dure muchos dias
            $table->json('itinerary_en'); //E.g. se hare una separacion con explode() del la etiqueta <br> para el titulo y la descripcion 
            $table->json('images');
            $table->longText('main_image');
            $table->json('includes'); //E.g. es un array de ids de la tabla tours_includes [1,2,3]
            //FK location E.g. [yucatan,cancun,merida]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
