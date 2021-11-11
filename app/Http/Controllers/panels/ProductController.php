<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        //$products = DB::table('products')->get();
        $products = Product::get();

        return view('products.index')->with([
            'products' => $products,
        ]);
    }

    public function create()
    {
    return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        //$validator in Req\prodReq
        $product = Product::create($request->validated());
        //session()->flash('success', "A new product with ID of {$product->id} has been created");
        return redirect()
            ->route('products.index')
            ->withSuccess("A new product with ID of {$product->id} has been created")
            ->withErrors("If available, must have stock");
    }

    public function show(Product $product) 
    {
        //$product = DB::table('products')->where('id', $product)->first();
        //$product = Product::findOrFail($product);
       
        return view('products.show')->with([
            'product' => $product,
        ]);
    }
    
    public function edit($product) 
    {
        return view('products.edit')->with([
        'product' => Product::findOrFail($product), 
    ]);
    }

    public function update(ProductRequest $request, Product $product) 
    {
       //$product = Product::findOrFail($product);
       $product->update($request->validated());
       return redirect()
       ->action('ProductController@index')
       ->withSuccess("The product with ID of {$product->id} has been updated");
    }

    public function destroy(Product $product) 
    {
        //$product = Product::findOrFail($product);   
        $product->delete();

        //return redirect()->back();   
        //return redirect()->route('products.index');
        return redirect()
        ->action('ProductController@index')
        ->withSuccess("The product with ID of {$product->id} has been deleted");

    }
    
}
