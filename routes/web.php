<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', action: function () {
    return view('index');
})->name('index');


Route::resource('products', ProductController::class);
