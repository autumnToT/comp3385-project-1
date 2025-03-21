<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/properties/create', [PropertyController::class, 'create'])->name('create');
Route::post('/properties', [PropertyController::class, 'store'])->name('store');

Route::get('/properties', [PropertyController::class, 'index'])->name('index');
Route::get('/properties/{property}', [PropertyController::class, 'single'])->name('single');

