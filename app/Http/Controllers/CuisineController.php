<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use App\Models\Product;
use Illuminate\Http\Request;

class CuisineController extends Controller
{
    public function listAll(Request $request)
    {
        $cuisines = Cuisine::all();

        return view('cuisines', [
            'cuisines'=> $cuisines,
        ]);
    }

    public function detail(Request $request, $cuisine_id)
    {
        $cuisine = Cuisine::find($cuisine_id);

        return view('cuisine', ['cuisine'=>$cuisine]);
    }
}
