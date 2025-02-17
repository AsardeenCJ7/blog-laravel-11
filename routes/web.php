<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);

Route::get('/detail/{id}', [HomeController::class,'detail'])->name('detail');

//some time index.blad.php view is move to views/post/indexblade.php so should change view('post.index').
Route::get('/para/{id}', [PostController::class,'arg'])->where('id','[0-9]+');
// URL Redirect
Route::get('/oldurl', [PostController::class,'oldUrl']);
// Route::get('/newurl', [PostController::class,'newUrl']);
Route::get('/new-something-url', [PostController::class,'newUrl'])->name('new-url');