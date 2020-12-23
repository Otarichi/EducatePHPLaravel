<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class productsController extends Controller
{
    public function getProducts(Request $request){
        $products = Products::all();
        return view('posts')->with('products', $products);
    }
}
