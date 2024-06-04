<?php

namespace App\Http\Controllers\API\Tours;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Http\Controllers\Config\Config as Setting;

class TourApiController extends Controller
{
    private $config;

    public function __construct() {
        $this->config = new Setting();
    }

    public function index()
    {
        $tours = Tour::all();

        return response()->json([
            'code' => 200,
            'message' => 'Mostrando todos los tours',
            'data' => $tours
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'location' => 'required',
            'type_tour' => 'required',
        ]);

        $location = Location::where('name', $request->location)->first();
        $type_tours = $this->config->typeTour();
        $type_tour = $type_tours[$request->type_tour];
        $tours = [];

        if ($location != null) {
            $tours = Tour::where('location_id', $location->id)->where('type', $type_tour)->get();
        } else {
            $tours = Tour::where('type', $type_tour)->get();
        }

        return response()->json([
            'message' => 'Mostrando los tours solicitados',
            'data' => $tours->toArray()
        ], 200);
    }
}
