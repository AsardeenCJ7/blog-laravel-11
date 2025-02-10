<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/param', [HomeController::class,'param']);
Route::get('/para/{id}', [PostController::class,'arg'])->where('id','[0-9]+');