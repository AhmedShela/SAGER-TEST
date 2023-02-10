<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::middleware(['auth'])->group(function () {
    //After Login the routes are accept by the loginUsers...

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Categories
    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('add-category', 'App\Http\Controllers\CategoryController@add');
    Route::post('insert-category', 'App\Http\Controllers\CategoryController@insert');
    Route::get('edit-category/{id}', 'App\Http\Controllers\CategoryController@edit');
    Route::put('update-category/{id}', 'App\Http\Controllers\CategoryController@update');
    Route::get('delete-category/{id}', 'App\Http\Controllers\CategoryController@destroy');
    //Products
    Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
    Route::get('add-product', 'App\Http\Controllers\ProductController@add');
    Route::post('insert-product', 'App\Http\Controllers\ProductController@insert');
    Route::get('edit-product/{id}', 'App\Http\Controllers\ProductController@edit');
    Route::put('update-product/{id}', 'App\Http\Controllers\ProductController@update');
    Route::get('delete-product/{id}', 'App\Http\Controllers\ProductController@destroy');
    Route::get('reduce-product-qty/{id}', 'App\Http\Controllers\ProductController@reduce');
    //Users
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('user');
    Route::get('add-user', 'App\Http\Controllers\UserController@add');
    Route::post('insert-user', 'App\Http\Controllers\UserController@insert');
    Route::get('edit-user/{id}', 'App\Http\Controllers\UserController@edit');
    Route::put('update-user/{id}', 'App\Http\Controllers\UserController@update');
    Route::get('delete-user/{id}', 'App\Http\Controllers\UserController@destroy');
});
