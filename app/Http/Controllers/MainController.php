<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function main() 
    {
        return view('welcome')->with([
            'products' => Product::all(),
        ]);
    }
}
