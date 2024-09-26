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

Route::get('/', function () {
    return view('welcome');
});
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


Route::get('admin', function () {
    return view('layouts.admin');
})->name('layouts.admin');




