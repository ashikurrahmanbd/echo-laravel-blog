<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    //add new post form
    public function add_new_post_form(){


        return view('dashboard.dashpages.add_post_form');

    }

    //create post
    public function create_post(Request $request){

        $validation = $request->validate([

            'post_title' => 'required|string|max:50|min:10',
            'post_category' => 'required',
            'post_subcategory' => 'required',
            'post_thumbnail' => 'required|mimes:png,jpg,jpeg',
            'post_description'  => 'required|string|min:10'

        ]);


    }


}
