<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Belajar laravel di Laracast YouTube Cahnnel
Route::get('/', function() {
    return view('laracast.home');
});

Route::get('/about', function(){
    return view('laracast.about');
});

Route::get('/contact', function(){
    return view('laracast.contact');
});
