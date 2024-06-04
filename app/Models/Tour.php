<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['location_relation', 'type_tour', 'price_discount', 'color_type', 'fake_reviews', 'tag_lang', 'day_range_lang', 'name_lang'];

    /**
     * Get the type tour
     */
    protected function typeTour(): Attribute
    {
        $lang = App::getLocale();
        $value = ($lang == 'es') ? 'Tour en Grupo' : 'Tour in group';
        if ($this->type == 'all') {
            $value = ($lang == 'es') ? 'Tour en grupo o privado' : 'Group or private Tour';
        } elseif($this->type == 'privado') {
            $value = ($lang == 'es') ? 'Tour privado' : 'Private Tour';
        }

        return Attribute::make(
            get: fn () => $value,
        );
    }

    /**
     * Get the discount price
     */
    protected function priceDiscount(): Attribute
    {
        $price_discount = 0;
        if ($this->discount > 0) {
            $price_to_discount = ($this->discount * $this->price) / 100;
            $price_discount = $this->price - $price_to_discount;
        }
        
        return Attribute::make(
            get: fn () => $price_discount,
        );
    }

    // FK Location table
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * Get the color Type of a type
     */
    protected function colorType(): Attribute
    {
        $color = ''; //default color blue on css
        if (Str::of(json_decode($this->tag_es)[0])->lower() == 'promocion') {
            $color = 'bg-success';
        } elseif(Str::of(json_decode($this->tag_es)[0])->lower() == 'mas vendido') {
            $color = 'bg-danger';
        }
        
        return Attribute::make(
            get: fn () => $color,
        );
    }

    /**
     * Get fakeReviews
     */
    protected function fakeReviews(): Attribute
    {
        $reviews = 0;
        if ($this->reviews == 0) {
            $reviews = rand(1, 30);
        }
        
        return Attribute::make(
            get: fn () => $reviews,
        );
    }

    /**
     * Get tag translated
     */
    protected function tagLang(): Attribute
    {
        $tag = (App::getLocale() == 'es') ? json_decode($this->tag_es)[0] : json_decode($this->tag_en)[0];
        return Attribute::make(
            get: fn () => $tag,
        );
    }

    /**
     * Get days_rage localizated
     */
    protected function dayRangeLang(): Attribute
    {
        $days_range = (App::getLocale() == 'es') ? $this->days_range_es : $this->days_range_en;
        
        return Attribute::make(
            get: fn () => $days_range,
        );
    }

    /**
     * Get name localizated
     */
    protected function nameLang(): Attribute
    {
        $name_tour = (App::getLocale() == 'es') ? $this->name_es : $this->name_en;
        
        return Attribute::make(
            get: fn () => $name_tour,
        );
    }

    /**
     * Get name localizated
     */
    protected function locationRelation(): Attribute
    {   
        $name = $this->location->name;
        return Attribute::make(
            get: fn () => $name,
        );
    }

}
