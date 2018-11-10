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

    //  category form
    public function CatForm($id = null){

        if($id == null){
            //for add new
            $category = null;
            return view('CatForm', ['category' => $category]);
        }else{
            //for edit
            $category = Category::findOrFail($id);
            return view('CatForm', ['category' => $category]);
        }
        
    }

    // adding category
    public function addCategory(Request $request){
        $category = new Category;

        $category->Cat_name = $request->input('Cat_name');

        if($category->save()){
            return redirect()->action('CategoryController@getCategories'); 
        }
    }

    // edit product
    public function editCategory(Request $request, $id){
       
        $category = Category::findOrFail($id);

        $category->Cat_name = $request->Cat_name;

        if($category->update()){
            return redirect()->action('CategoryController@getCategories'); 
        }
    }
}
