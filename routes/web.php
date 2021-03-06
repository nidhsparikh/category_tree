<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[App\Http\Controllers\HomeController::class,'home'])->name('home');

// Category
Route::get('category',[App\Http\Controllers\CategoryController::class,'index'])->name('category');
//create
Route::post('category/store',[App\Http\Controllers\CategoryController::class,'store'])->name('store.category');