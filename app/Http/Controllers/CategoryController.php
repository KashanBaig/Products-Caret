<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //get all categories
    public function getCategories(){
        $categories = Category::all();

        return view('category', ['categories'=> $categories]);
    }

    // delete a categories
    public function destroyCategory($id){
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->action('CategoryController@getCategories');
    }
}
