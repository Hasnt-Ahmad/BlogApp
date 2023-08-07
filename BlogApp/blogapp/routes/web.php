<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',"App\Http\Controllers\JoinController@displayPost")->name('home');

Route::get('/category',"App\Http\Controllers\CategoryController@displayCategory")->name('category_page');

Route::get('/addcategory', function () {
    return view('add_category');
});


Route::get('/edit-category/{categoryname}',"App\Http\Controllers\CategoryController@editCategory") ;

Route::post('/add-category',"App\Http\Controllers\CategoryController@addCategory");
Route::post('/update-category/{id}',"App\Http\Controllers\CategoryController@updateCategory");

Route::get('/delete-category/{id}',"App\Http\Controllers\CategoryController@deleteCategory");

Route::get('/addpost', "App\Http\Controllers\PostController@showCategory");
Route::get('/post', "App\Http\Controllers\PostController@displayPost");
Route::post('/add-post', "App\Http\Controllers\PostController@addPost");
Route::get('/edit-post/{id}', "App\Http\Controllers\PostController@editPost");
Route::post('/update-post/{id}', "App\Http\Controllers\PostController@updatePost");

Route::get('/delete-post/{id}',"App\Http\Controllers\PostController@deletePost");
Route::post('/filter-post', "App\Http\Controllers\JoinController@displayPost");


