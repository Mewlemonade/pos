<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getSubcategories(Request $request)
    {
        $subcategories = Category::where('parent_id', $request->category_id)->get();

        return response()->json($subcategories);
    }
}
