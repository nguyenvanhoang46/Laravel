<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.dashboard');
    });

    Route::prefix('product')->group(function() {
        Route::get('/', [ProductController::class, 'index']);
    });


});
//Route::prefix('category')->group(function () {
//    Route::get('/', function () {
//        return view('admin.pages.category.list_category');
//    });
//});


Route::resource("product", ProductController::class);

Route::resource("category", \App\Http\Controllers\CategoryController::class);



Route::prefix('website')->group(function () {
    Route::get('/', function () {
        return view('website.pages.home_pages');
    });
    Route::get('/', 'WebsiteController@index');
});



