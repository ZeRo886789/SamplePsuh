<?php

use Illuminate\Support\Facades\Route;

Route::get('/Control', function () {
    return view('Control');
})->name('control');

Route::get('/Import', function () {
    return view('Import');
})->name('import');

Route::get('/Product', function () {
    return view('Product');
})->name('product');