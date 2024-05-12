<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderproductController;
use App\Http\Controllers\OutgoingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('Admin.admin-dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//route kasir

Route::get('/kasir-dashboard', function(){
    return view('Kasir.kasir-dashboard');
});

Route::get('/kasir-tentang',function(){
    return view('Kasir.kasir-tentang');
});

Route::get('/kasir-kelolapesanan', function(){
    return view('Kasir.kasir-kelolapesanan');
});

Route::get('/kasir-kelolamenu', function(){
    return view('Kasir.kasir-kelolamenu');
});
//route pelanggan
Route::get('/pelanggan', function () {
return view('Pelanggan.view.tentang');
});

Route::get('/pelanggan-tentang', function(){
    return view('Pelanggan.view.tentang');
});
Route::get('/pelanggan-menu', function(){
    return view('Pelanggan.view.menu');
});
Route::get('/pelanggan-keranjang', function(){
    return view('Pelanggan.view.keranjang');
});

Route::get('/pelanggan-detail', function(){
    return view('Pelanggan.view.detail');
});


//route admin

Route::get('/admin-dashboard',function(){
    return view('Admin.admin-dashboard');
});

Route::get('/admin-tentangkami', function(){
    return view('Admin.admin-tentang');
});

Route::get('/admin-inventorimasuk', function(){
    return view('Admin.admin-inventorimasuk');
});

Route::get('/admin-inventorikeluar', function(){
    return view('Admin.admin-inventorikeluar');
});

Route::get('/admin-kelolamenu', function(){
    return view('Admin.admin-kelolamenu');
});

Route::get('/admin-kelolpesanan', function(){
    return view('Admin.admin-kelolapesanan');
});

Route::get('/admin-stock', function(){
    return view('Admin.admin-sisainventori');
});

//route controller
Route::resource('homepage',HomepageController::class);
Route::resource('incoming',IncomingController::class);
Route::resource('ingredients',IngredientsController::class);
Route::resource('item',ItemController::class);
Route::resource('meja',MejaController::class);
Route::resource('order',OrderController::class);
Route::resource('orderproduct',OrderproductController::class);
Route::resource('outgoing',OutgoingController::class);
Route::resource('product',ProductController::class);

require __DIR__.'/auth.php';