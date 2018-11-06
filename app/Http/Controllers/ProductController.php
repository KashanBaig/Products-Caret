<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //get all products
    public function getProducts(){
        $products = Product::all();
        return view('products', ['products'=> $products]);
    }

    // delete a product
    public function destroyProduct($id){
        $product = Product::findOrFail($id);
        $product->delete();

        $products = Product::all();

        return view('products', ['products'=> $products]);
    }

    
}
