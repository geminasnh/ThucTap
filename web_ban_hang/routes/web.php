<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController ; 
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ProductController;
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

Route::get('/',                                             [ProductController::class, 'index'])->name('client.home');

Route::get('trangchu', function () {
    return view('pages.trangchu');
})->name('pages.trangchu');
Route::get('sanpham', function () {
    return view('pages.sanpham');
})->name('pages.sanpham');
Route::get('giohang', function () {
    return view('pages.giohang');
})->name('pages.giohang');
Route::get('ctsp', function () {
    return view('pages.ctsp');
})->name('pages.ctsp');
Route::get('thanhtoan', function () {
    return view('pages.thanhtoan');
})->name('pages.thanhtoan');
Route::get('blog', function () {
    return view('pages.blog');
})->name('pages.blog');


// Route::get('admin', function () {
//     return view('layouts.admin');
// })->name('layouts.admin');

// Admin Auth:
Route::prefix('admin')->name('admin.')->group(function() {
    // Admin - Dashboard:
    Route::get('/dashboard',                            [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/chart',                                [DashboardController::class, 'chart'])->name('chart');

    // Admin - products Categories:
    Route::prefix('categories')->name('categories.')->group(function() {
        Route::get('/',                                 [CategoryController::class, 'index'])->name('index');
        Route::get('/create',                           [CategoryController::class, 'create'])->name('create');
        Route::post('/',                                [CategoryController::class, 'store'])->name('store');
        Route::get('/{category}/edit',                  [CategoryController::class, 'edit'])->name('edit');
        Route::put('/{category}',                       [CategoryController::class, 'update'])->name('update');
        Route::delete('/{category}',                    [CategoryController::class, 'destroy'])->name('destroy');
    });

    // Admin - products:
    Route::prefix('products')->name('products.')->group(function() {
        Route::get('/',                                 [AdminProductController::class, 'index'])->name('index');
        Route::get('/create',                           [AdminProductController::class, 'create'])->name('create');
        Route::post('/',                                [AdminProductController::class, 'store'])->name('store');
        Route::get('/{product}/edit',                   [AdminProductController::class, 'edit'])->name('edit');
        Route::put('/{product}',                        [AdminProductController::class, 'update'])->name('update');
        Route::get('/show/{product}',                   [AdminProductController::class, 'show'])->name('show');
        Route::delete('/{product}',                     [AdminProductController::class, 'destroy'])->name('destroy');
    });

  
    // Admin - Users:
    Route::prefix('users')->name('users.')->group(function() {
        Route::get('/',                                 [UserController::class, 'index'])->name('index');
        Route::get('/create',                           [UserController::class, 'create'])->name('create');
        Route::post('/',                                [UserController::class, 'store'])->name('store');
        Route::get('/edit/{user}',                      [UserController::class, 'edit'])->name('edit');
        Route::put('/{user}',                           [UserController::class, 'update'])->name('update');
        Route::get('/show/{user}',                      [UserController::class, 'show'])->name('show');
        Route::delete('/{user}',                        [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('orders')->name('orders.')->group(function() {
        Route::get('/',                                 [UserController::class, 'index'])->name('index');
        Route::get('/create',                           [UserController::class, 'create'])->name('create');
        Route::post('/',                                [UserController::class, 'store'])->name('store');
        Route::get('/{order}/edit',                      [UserController::class, 'edit'])->name('edit');
        Route::put('/{order}',                           [UserController::class, 'update'])->name('update');
        Route::get('/show/{order}',                      [UserController::class, 'show'])->name('show');
        Route::delete('/{order}',                        [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('shipping')->name('shipping.')->group(function() {
        Route::get('/',                                 [UserController::class, 'index'])->name('index');
        Route::get('/create',                           [UserController::class, 'create'])->name('create');
        Route::post('/',                                [UserController::class, 'store'])->name('store');
        Route::get('/{shipping}/edit',                      [UserController::class, 'edit'])->name('edit');
        Route::put('/{shipping}',                           [UserController::class, 'update'])->name('update');
        Route::get('/show/{shipping}',                      [UserController::class, 'show'])->name('show');
        Route::delete('/{shipping}',                        [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('payment')->name('payment.')->group(function() {
        Route::get('/',                                 [UserController::class, 'index'])->name('index');
        Route::get('/payment',                           [UserController::class, 'create'])->name('create');
        Route::post('/',                                [UserController::class, 'store'])->name('store');
        Route::get('/{payment}/edit',                      [UserController::class, 'edit'])->name('edit');
        Route::put('/{payment}',                           [UserController::class, 'update'])->name('update');
        Route::get('/show/{payment}',                      [UserController::class, 'show'])->name('show');
        Route::delete('/{payment}',                        [UserController::class, 'destroy'])->name('destroy');
    });
});



