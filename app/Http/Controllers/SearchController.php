<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Food;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $results = Person::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('birthdate', 'LIKE', '%' . $query . '%')
            ->orWhere('address', 'LIKE', '%' . $query . '%')
            ->orWhere('education', 'LIKE', '%' . $query . '%')
            ->get();

        return view('search_results', compact('results'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $results = Food::search($query)->get();
        
        return view('food_search_results', compact('results'));
    }
}
