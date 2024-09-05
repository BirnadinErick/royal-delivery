<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listAll(Request $request)
    {
        $products = Product::with('cuisine')->get();

        return view('products', [
            'products'=> $products
        ]);
    }

    public function detail(Request $request, $product_id)
    {
       $product = Product::find($product_id);

       return view('product', ['product'=>$product]);
    }
}
