<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

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

Route::get('/welcome', function () {
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

//Route::get('loginweb', function () {
//   return view('login.login');
//});
//Route::get('logout', function () {
//   return view('login.registration');
//});

Route::get('/website', [\App\Http\Controllers\WebsiteController::class, 'index']);
Route::get('/Add-Cart/{id}', [\App\Http\Controllers\WebsiteController::class, 'AddCart']);
Route::get('/Delete-Item-Cart/{id}', [\App\Http\Controllers\WebsiteController::class, 'DeleteItemCart']);
Route::get('/List-Carts', [\App\Http\Controllers\WebsiteController::class, 'ViewListCart']);
Route::get('/Delete-Item-List-Cart/{id}', [\App\Http\Controllers\WebsiteController::class, 'DeleteListItemCart']);
Route::get('/Save-Item-List-Cart/{id}/{quantity}', [\App\Http\Controllers\WebsiteController::class, 'SaveListItemCart']);
Route::post('/Save-All', [\App\Http\Controllers\WebsiteController::class, 'SaveAllListItemCart']);

Route::get('login', [UserAuthController::class, 'login']);
Route::get('register', [UserAuthController::class, 'register']);
Route::post('create', [UserAuthController::class, 'create'])->name('auth.create');
Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');
Route::get('profile', [UserAuthController::class, 'profile']);
Route::get('logout', [UserAuthController::class, 'logout']);

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\WebsiteController::class, 'index']);
