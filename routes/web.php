<?php

use App\Http\Controllers\HomeController;
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
use App\http\Middleware\Admin;
use App\http\Middleware\Kasir;

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('auth.login');
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


    require __DIR__.'/auth.php';

    Route::middleware(['auth'])->group(function () {

        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        // CMS ADMINITRASTOR
        Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {

            // ADMIN
            Route::resource('homepage',HomepageController::class);
            Route::resource('incoming',IncomingController::class);
            Route::resource('ingredients',IngredientsController::class);
            Route::resource('item',ItemController::class);
            Route::resource('meja',MejaController::class);
            Route::resource('order',OrderController::class);
            Route::resource('orderproduct',OrderproductController::class);
            Route::resource('outgoing',OutgoingController::class);
            Route::resource('product',ProductController::class);

        });

        // CMS KASIR
        Route::middleware([Kasir::class])->name('kasir.')->prefix('kasir')->group(function () {

            // KASIR
            Route::resource('homepage',HomepageController::class);
            Route::resource('incoming',IncomingController::class);
            Route::resource('ingredients',IngredientsController::class);
            Route::resource('item',ItemController::class);
            Route::resource('meja',MejaController::class);
            Route::resource('order',OrderController::class);
            Route::resource('orderproduct',OrderproductController::class);
            Route::resource('outgoing',OutgoingController::class);
            Route::resource('product',ProductController::class);

        });

    });