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
Route::group([], static function() {
    Route::group(['as' => 'admin.', 'middleware' => 'admin.only'], static function() {
        Route::resource("/product", \App\Http\Controllers\ProductController::class);

        Route::resource("/category", \App\Http\Controllers\CategoryController::class);

        Route::resource('/user', \App\Http\Controllers\UserController::class);
    });
});

Route::get('/', function () {
    return view('welcome');
});



Route::get('getuser', [\App\Http\Controllers\UserController::class, 'index']);

Route::prefix('productdetail')->group(function () {
    Route::get('/', function () {
        return view('website.pages.product_detail');
    });
});

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

//Route::middleware(['auth'])->group(function () {
//    Route::get('checkout', [\App\Http\Controllers\CheckoutController::class, 'index'])->middleware('checklogin');
//    Route::post('place-order', [\App\Http\Controllers\CheckoutController::class, 'checkout']);
//});

Route::get('/website', [\App\Http\Controllers\WebsiteController::class, 'index']);
Route::get('/Add-Cart/{id}', [\App\Http\Controllers\WebsiteController::class, 'AddCart']);
Route::get('/Delete-Item-Cart/{id}', [\App\Http\Controllers\WebsiteController::class, 'DeleteItemCart']);
Route::get('/List-Carts', [\App\Http\Controllers\WebsiteController::class, 'ViewListCart']);
Route::get('/Delete-Item-List-Cart/{id}', [\App\Http\Controllers\WebsiteController::class, 'DeleteListItemCart']);
Route::get('/Save-Item-List-Cart/{id}/{quantity}', [\App\Http\Controllers\WebsiteController::class, 'SaveListItemCart']);
Route::post('/Save-All', [\App\Http\Controllers\WebsiteController::class, 'SaveAllListItemCart']);

Route::get('/detail/{id}', [\App\Http\Controllers\DetailsController::class, 'details']);
Route::get('/search', [\App\Http\Controllers\ProductController::class, 'search']);


//Route::get('login', [\App\Http\Controllers\UserAuthController::class, 'login']);
//Route::get('register', [\App\Http\Controllers\UserAuthController::class, 'register']);
//Route::post('create', [\App\Http\Controllers\UserAuthController::class, 'create'])->name('auth.create');
//Route::post('check', [\App\Http\Controllers\UserAuthController::class, 'check'])->name('auth.check');
//Route::get('profile', [\App\Http\Controllers\UserAuthController::class, 'profile']);
//Route::get('logout', [\App\Http\Controllers\UserAuthController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
