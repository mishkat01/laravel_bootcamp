<?php

use App\Http\Controllers\InputCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('user',UserController::class);
Route::resource('input/categories', InputCategoryController::class);

