<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{	
	//get the data from category table
    public function index(){

    	$category = Category::all();

    	return view('home')
    		 ->with('category', $category);
    }


    public function category_insert(Request $request){

    	// return "Hello";

    	$input = $request->all();


        $main_category = [];

    	$category = [];

    	$subcategory = [];

        foreach ($input['data'] as $key => $value) {
            
            // $main_category[$key] = [];
            $main_category['main_category'] = $value;
        }


        return $main_category;


    	

     }
}
