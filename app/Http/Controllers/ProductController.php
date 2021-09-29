<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        return view('products.index');
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
