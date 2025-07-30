<?php

use App\Http\Controllers\InputCategoryController;
use App\Http\Controllers\SingleColumnController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');


Route::resource('user',UserController::class);
Route::resource('input/categories', InputCategoryController::class);
Route::resource('input/single/column', SingleColumnController::class);


Auth::routes(['verify'=>true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
