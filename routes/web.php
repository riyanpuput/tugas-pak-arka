<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);