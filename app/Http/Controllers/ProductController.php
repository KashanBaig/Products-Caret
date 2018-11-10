<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //get all products
    public function getProducts(){
        $products = Product::all();

        $categories = Category::all();

        return view('products', ['products'=> $products, 'categories'=> $categories]);
    }

    // delete a product
    public function destroyProduct($id){
        $product = Product::findOrFail($id);
        $product->delete();

        $categories = Category::all();
        $products = Product::all();

        return redirect()->action('ProductController@getProducts');
    }

    //  product form
    public function ProdForm($id = null){
        $categories = Category::all();

        if($id == null){
            //for add new
            $product = null;
            return view('ProdForm', ['categories' => $categories, 'product' => $product]);
        }else{
            //for edit
            $product = Product::findOrFail($id);
            return view('ProdForm', ['categories' => $categories, 'product' => $product]);
        }
        
    }

    // adding product
    public function addProduct(Request $request){
        $product = new Product;

        $product->Prod_name = $request->input('Prod_name');
        $product->Prod_price = $request->input('Prod_price');
        $product->Cat_id = $request->input('category');

        if($product->save()){
            return redirect()->action('ProductController@getProducts'); 
        }
    }

}
