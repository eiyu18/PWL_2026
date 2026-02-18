<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
   return 'World';
});

Route::get('/welcome', function () {
   return 'Welcome';
});

Route::get('/about', function () {
   return 'Eiyu - 244107020181';
});

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

Route::get('/articles/{id}', function($id) {
    return 'Article Page with ID ' .$id;
});


Route::get('/user/profile', function () {
    //
})->name('profile');



