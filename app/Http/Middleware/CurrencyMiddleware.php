<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Config;
use App\Models\Country;

class CurrencyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //We need to ensure the currency send its on the database
        if ($request->currency != null && in_array($request->currency, ['es_MXN', 'en_US', 'en_EU'])) {
            $country = Country::where('lang', $request->currency)->first();
            Config::set('app.currency', $country->lang);
        }

        return $next($request);
    }
}
