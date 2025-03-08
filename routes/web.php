<?php

use Illuminate\Support\Facades\Route;

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


// Homework d5
Route::get('/hw-d5', function(){
    return view('homework.d5.home');
});

Route::get('/hw-d5-about', function(){
    return view('homework.d5.about');
});

Route::get('/hw-d5-contact', function(){
    return view('homework.d5.contact');
});
