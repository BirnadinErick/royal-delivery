<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listAll(Request $request)
    {
        $categories = Category::all();

        return view('categories', [
            'categories'=> $categories,
        ]);
    }

    public function detail(Request $request, $category_id)
    {
        $category = Category::find($category_id);

        return view('category', ['category'=>$category]);
    }
}
