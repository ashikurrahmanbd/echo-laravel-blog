<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    //add new post form
    public function add_new_post_form(){

        $all_category = Category::get();

        $all_subcategory = SubCategory::get();

        return view('dashboard.dashpages.add_post_form', [
            'categories' => $all_category,
            'subcategories' => $all_subcategory
        ]);

    }

    //create post
    public function create_post(Request $request){

        // Validate incoming request
        $request->validate([
            'post_title' => 'required|string|max:50|min:10',
            'post_category' => 'required|exists:categories,id', // Ensures category exists
            'post_subcategory' => 'required|exists:sub_categories,id', // Ensures subcategory exists
            'post_thumbnail' => 'required|mimes:png,jpg,jpeg|max:2048', // Max size of 2MB
            'post_description' => 'required|string|min:10',
        ]);

        // Handle file upload
        $thumbnailPath = null;
        
        if ($request->hasFile('post_thumbnail')) {
            $file = $request->file('post_thumbnail'); // Get the uploaded file
            $fileName = time() . '.' . $file->getClientOriginalExtension(); // Generate a file name with the current timestamp
            $thumbnailPath = $file->storeAs('post_thumbnails', $fileName, 'public'); // Store with custom name
        }

        // Save the data to the database
        Post::create([
            'post_title' => $request->input('post_title'),
            'post_category' => $request->input('post_category'),
            'post_subcategory' => $request->input('post_subcategory'),
            'post_thumbnail' => $thumbnailPath, // Store the path of the uploaded file
            'post_description' => $request->input('post_description'),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Post created successfully!');


    }


    //all post view on dashboard
    public function all_posts(){

        $all_posts = Post::all();


        return view('dashboard.dashpages.all_posts', ['posts' => $all_posts]);

        
    }


    //get subcategory ajaax route function
    public function get_sub_category(Request $request){


        $parent_cat_id = $request->id;


        $subcat = SubCategory::where('category_id', $parent_cat_id)->get();

        return $subcat;


    }


}
