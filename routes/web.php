<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', [PageController::class,'Hello']);

Route::get('/world', function () {
   return 'World';
});

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/user/{name}', function ($name) {
    return 'My name'.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'My name ' .$name;
});

Route::get('/posts/{post}/comments/{comment}', function 
($post, $commentId) {
    return 'Post to'.$post." Comments to: ".$commentId;
});

Route::get('/articles/{id}', [PageController::class, 'articles']);


Route::get('/user/profile', function () {
    //
})->name('profile');

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

Route::get('/greeting', [WelcomeController::class,
'greeting']);
