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



Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('website.pages.home_pages');
    });
});
Route::get('/website', [\App\Http\Controllers\WebsiteController::class, 'index']);
Route::get('/Add-Cart/{id}', [\App\Http\Controllers\WebsiteController::class, 'AddCart']);
Route::get('/Delete-Item-Cart/{id}', [\App\Http\Controllers\WebsiteController::class, 'DeleteItemCart']);
Route::get('/List-Carts', [\App\Http\Controllers\WebsiteController::class, 'ViewListCart']);
Route::get('/Delete-Item-List-Cart/{id}', [\App\Http\Controllers\WebsiteController::class, 'DeleteListItemCart']);
Route::get('/Save-Item-List-Cart/{id}/{quantity}', [\App\Http\Controllers\WebsiteController::class, 'SaveListItemCart']);
Route::post('/Save-All', [\App\Http\Controllers\WebsiteController::class, 'SaveAllListItemCart']);




