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

//    Route::prefix('product')->group(function() {
//        Route::get('/', [ProductController::class, 'index']);
//    });

});

Route::resource("product", ProductController::class);
Route::get('/create', function () {
    return view('admin.product.pages.create');
});

//Route::prefix('show')->group(function () {
//
//});
//Route::get('/product', 'ControllerProduct')->name('Product');

