<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index()
    {
        $results = Food::all();
        return view('food_search_results', compact('results'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $food = new Food;
        $results = $food->search($query)->get();
        
        return view('food_search_results', compact('results'));
    }
}
