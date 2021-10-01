<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ProductController extends Controller
{
    public function index() 
    {
        //$products = DB::table('products')->get();
        $products = Product::get();
        dd($products);
    }

    public function create()
    {
    return view('products.create');
    }

    public function store()
    {
    return view('products.store');
    }

    public function show($product) 
    {
        //$product = DB::table('products')->where('id', $product)->first();
        $product = DB::table('products')->find($product);
       

        dd($product);
    return view('products.show');
    }
    
    public function edit($product) 
    {
    return "Form to edit product {$product}";
    }

    public function update($product) 
    {
    return "Form to update product {$product}";
    }

    public function destroy($product) 
    {
    return "Form to destroy product {$product}";
    }
}
