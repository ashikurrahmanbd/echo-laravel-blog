<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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