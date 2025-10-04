<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products=Product::with('category')->get();
        return view('app.index' , compact('products'));

    }
}
