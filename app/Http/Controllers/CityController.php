<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function getCitiesFromCountry(Request $request)
{
    $countryCode = $request->query('code');

    if (!$countryCode) {
        return response()
            ->json(['error' => 'The "code" parameter is required.'], 400)
            ->header('Access-Control-Allow-Origin', '*');
    }

    try {
        $cities = DB::table('city')
            ->where('CountryCode', $countryCode)
            ->get();

        return response()
            ->json($cities, 200)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    } catch (\Exception $e) {
        return response()
            ->json(['error' => 'An error occurred while fetching the data.'], 500)
            ->header('Access-Control-Allow-Origin', '*');
    }
}

}