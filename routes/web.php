<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MovieController::class,'index']);
Route::get('/add-movie',[MovieController::class,'addMovie']);
Route::post('/store/movie',[MovieController::class,'storeMovie']);
Route::get('/movie/{movie}',[MovieController::class,'show']);
Route::get('/movie/delete/{movie}',[MovieController::class,'destroy']);
Route::get('/movie/edit/{movie}',[MovieController::class,'edit']);
Route::post('/movie/update/{movie}',[MovieController::class,'storeUpdate']);

//Categories
Route::get('/add-category', [CategoryController::class,'create']);
Route::post('/storeCategory', [CategoryController::class,'store']);
Route::get('/all-categories', [CategoryController::class,'index']);
Route::get('/category/delete/{category}', [CategoryController::class,'destroy']);
Route::get('/category/edit/{category}', [CategoryController::class,'edit']);
Route::post('/category/update/{category}', [CategoryController::class,'update']);
Route::get('/category/{category}', [CategoryController::class,'showCategory']);
