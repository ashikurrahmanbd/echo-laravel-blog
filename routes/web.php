<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');


});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//dashboard related route
Route::get('/echo-admin', [DashboardController::class, 'dasboard_index'])->name('echoadmin');

Route::get('/add-category', [DashboardController::class, 'add_category'])->name('addcategory');

//store category
Route::post('/store-category', [DashboardController::class, 'store_category'])->name('storecategory');

Route::get('/all-category', [DashboardController::class, 'all_category'])->name('allcategory');


//edit category form
Route::get('/edit-category-form/{id}', [DashboardController::class, 'edit_category_form'])->name('edit_category');


//edit category form
Route::post('update-category/{id}', [DashboardController::class, 'update_category'])->name('updatecategory');

//delete category
Route::delete('delete-category/{id}', [DashboardController::class, 'delete_category'])->name('delete_category');




//sub category
Route::get('add-sub-category', [SubCategoryController::class, 'add_sub_category'])->name('addsubcategory');

Route::post('store-sub-category', [SubCategoryController::class, 'store_sub_category'])->name('store_sub_category');


Route::get('all-sub-category', [SubCategoryController::class, 'all_sub_category'])->name('allsubcategory');


