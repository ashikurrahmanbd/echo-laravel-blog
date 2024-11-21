<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    //index method
    public function dasboard_index(){

        return view('dashboard.dashboard');

    }

    //add category
    public function add_category(Request $request){

        return view('dashboard.dashpages.addcategory');

    }


}
