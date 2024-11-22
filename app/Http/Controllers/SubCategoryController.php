<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Str;

class SubCategoryController extends Controller
{
   


    //add new sub category form
    public function add_sub_category(){

        

        $all_category = Category::get();

        return view('dashboard.dashpages.addsubcategory', ['categories' => $all_category]);

    }

    //store sub category
    public function store_sub_category(Request $request){


        $validation = $request->validate([

            'category_id'  => 'required',
            'subcategory_name' => 'required'


        ], [

            'category_id.required' => 'Category field is required',
            'subcategory_name.required' => 'Sub Category is Required'

        ]);

        

        //create the model instance of Category
        

        $subcategory = new SubCategory();

        $subcategory->subcategory_name = $request->subcategory_name;

        $subcategory->category_id = $request->category_id;

        $str_slug_count = Category::where('slug', 'Like', '%'.Str::slug($request->subcategory_name). '%')->count();

        if($str_slug_count > 0){

            $str_slug_count ++;

            $subcategory->slug = Str::slug($request->subcategory_name).'-';

        }else{
            $subcategory->slug = Str::slug($request->subcategory_name);
        }

        $subcategory->save();


        return back()->with('subsuccess', 'Subcategory added successfully');
        


    }

    //all subcategory
    public function all_sub_category(){

        $all_sub_category = SubCategory::with('category')->get();

        $all_categories = Category::with('subcategories')->get();

        return view('dashboard.dashpages.allsubcategory', [ 'all_sub_category' => $all_sub_category, 'all_categories' => $all_categories]);


    }






    //delete subcategory
    


}
