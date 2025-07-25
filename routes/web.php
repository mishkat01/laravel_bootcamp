<?php

use App\Http\Controllers\InputCategoryController;
use App\Http\Controllers\SingleColumnController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('user',UserController::class);
Route::resource('input/categories', InputCategoryController::class);
Route::resource('input/single/column', SingleColumnController::class);

