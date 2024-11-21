<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class DashboardController extends Controller
{
    
    //index method
    public function dasboard_index(){

        return view('dashboard.dashboard');

    }

    //add category
    public function add_category(){

        return view('dashboard.dashpages.addcategory');

    }

    //store category
    public function store_category(Request $request){


        $validation = $request->validate([

            'categoryname' => 'required'

        ],[

            'categoryname.required' => 'The Category Name is required'

        ]);


        //create the model instance of Category
        $category = new Category();

        $category->categoryname = $request->categoryname;

        $str_slug_count = Category::where('slug', 'Like', '%'.Str::slug($request->categoryname). '%')->count();

        if($str_slug_count > 0){

            $str_slug_count ++;

            $category->slug = Str::slug($request->categoryname).'-';

        }else{
            $category->slug = Str::slug($request->categoryname);
        }

        $category->save();

        return back()->with('success', 'Category added Successfully');



    }


    //showing all category
    public function all_category(){

        $allcategory = Category::all();

        return view('dashboard.dashpages.allcategory')->with('all_category', $allcategory);

    }

    //edit category form
    public function edit_category_form($id){

        $categoryid = $id;

        $category = Category::findOrFail($categoryid);



        return view('dashboard.dashpages.editcategoryform', ['category' => $category]);

    }


    //update category
    public function update_category($id, Request $request){

        

        $validation = $request->validate([

            'categoryname' => 'required'

        ],[

            'categoryname.required' => 'The Category Name is required'

        ]);


        //find the desired category we need to udpate
        $category = Category::findOrFail($id);

        $category->categoryname = $request->categoryname;

        $str_slug_count = Category::where('slug', 'Like', '%'.Str::slug($request->categoryname). '%')->count();

        if($str_slug_count > 0){

            $str_slug_count ++;

            $category->slug = Str::slug($request->categoryname).'-';

        }else{
            $category->slug = Str::slug($request->categoryname);
        }

        $category->save();

        return redirect()->route('allcategory')->with('updated', 'Category Updated Successfully');




    }
    


    public function delete_category($id){
        
            
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('allcategory')->with('deleted', 'Category has been deleted');


    }


}
