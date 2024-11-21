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

