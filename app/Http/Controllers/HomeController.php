<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Config\Config as Setting;
use App\Models\Country;
use App\Models\Location;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    private $config;
    private $countries;
    private $token;
    private $base_url;
    private $locations;

    public function __construct() {
        $this->config = new Setting();
        $this->countries = Country::all();
        $this->token = Config::get('app.bearer_token');
        $this->base_url = env('APP_URL');
        $this->locations = Location::all();
        if ($this->token == null) {
            if (env("APP_ENV") != 'prod') {
                $response = Http::withoutVerifying()->post($this->base_url . '/api/login', [
                    'email' => env('ADMIN_USER'),
                    'password' => env('ADMIN_PASSWORD'),
                ]);
            } else {
                $response = Http::post($this->base_url . '/api/login', [
                    'email' => env('ADMIN_USER'),
                    'password' => env('ADMIN_PASSWORD'),
                ]);
            }
            $result = $response->json();
            Config::set('app.bearer_token', $result['data']);
            $this->token = Config::get('app.bearer_token');
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($locale)
    {
        $tours = Tour::all();
        $testimonials = Testimonial::all();
        

        return view('welcome',[
            'tours' => $tours,
            'lang' => $locale,
            'lang_to_change' => $this->config->getLang($locale),
            'config' => $this->config,
            'conversion_rate' => $this->config->currency(Config::get('app.currency')),
            'countries' => $this->countries,
            'testimonials' => $testimonials,
            'locations' => $this->locations
        ]);
    }

    public function searchTours(Request $request, $locale)
    {
        $error = null;
        $tours = null;
        $data = null;

        if ($request->has('location') && $request->has('type_tour')) {
            $data = [
                'location' => $request->location,
                'type_tour' => $request->type_tour
            ];

            if (Cookie::get('request') == null) {
                Cookie::queue(Cookie::make('request', json_encode($data), 100));// We are going to make a cookie to remember de data
            } else {
                Cookie::queue(Cookie::forget('request'));
                Cookie::queue(Cookie::make('request', json_encode($data), 100));// We are going to make a cookie to remember de data
            }
        }

        if (Cookie::get('request') != null) {
            $data = (array) json_decode(Cookie::get('request'));// We are going to make a cookie to remember de data
        }     

        if (env("APP_ENV") != 'prod') {
            $response = Http::withoutVerifying()->withHeaders([
                'Authorization' => 'Bearer ' . $this->token
            ])->post($this->base_url . '/api/search-tours', [
                'location' => ($data == null) ? 'Cancun' : $data['location'],
                'type_tour' => ($data == null) ? 'all' : $data['type_tour'],
            ]);
        } else {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token
            ])->post($this->base_url . '/api/search-tours', [
                'location' => ($data == null) ? 'Cancun' : $data['location'],
                'type_tour' => ($data == null) ? 'all' : $data['type_tour'],
            ]);
        }

        $result = $response->json();
        
        if ($response->status() == 200) {
            $tours = $result['data']; //Since its comming wrapped with link for pagination method  
        } else {
            //Means there was an error in the API
            dd($result);
            $error = $result['message'];
        }

        return view('tours',[
            'tours' => $tours,
            'lang' => $locale,
            'lang_to_change' => $this->config->getLang($locale),
            'config' => $this->config,
            'conversion_rate' => $this->config->currency(Config::get('app.currency')),
            'countries' => $this->countries,
            'error' => $error,
            'location' => $data['location'],
            'type_tour' => $data['type_tour'],
            'locations' => $this->locations
        ]); 
    }

    public function showTours()
    {
        return view();
    }
}
