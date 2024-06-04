<?php
namespace App\Http\Controllers\Config;

use App\Models\Country;

class Config
{
    const LANG_ES = 'es';
    const LANG_EN = 'en';
    const es_MX = 'MXN';
    const en_US = 'USD';
    const es_EU = 'EUR';

    public function getLang(string $lang)
    {
        return ($lang == self::LANG_ES) ? self::LANG_EN : self::LANG_ES;
    }

    public function currency($currency)
    {
        $country = Country::where('lang', $currency)->first();
        return $country->exchange_rate;
    }

    public function currencyString($currency)
    {
        $country = Country::where('lang', $currency)->first();
        return $country->currency;
    }

    public function typeTour()
    {
        return [
            'Todas las aventuras' => 'all',
            'Aventuras en Grupo' => 'grupo',
            'Aventuras Privadas' => 'privado',
            'All Adventures' => 'all',
            'Group Adventures' => 'grupo',
            'Private Adventure' => 'privado'
        ];
    }
}