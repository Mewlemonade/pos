<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class LocationController extends Controller
{
    public function getCities(Request $request)
    {
        $cities = City::where('country_id', $request->country_id)->get();

        return response()->json($cities);
    }
}
