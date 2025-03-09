<?php
// Updated
use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Belajar laravel di Laracast YouTube Channel
Route::get('/', function () {
    return view('laracast.home');
});

Route::get('/jobs', function () {
    return view('laracast.jobs', [
        'jobs' => Job::all(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    // dd($id);
    return view('laracast.job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('laracast.contact');
});


// Homework d5
Route::get('/hw-d5', function () {
    return view('homework.d5.home');
});

Route::get('/hw-d5-about', function () {
    return view('homework.d5.about');
});

Route::get('/hw-d5-contact', function () {
    return view('homework.d5.contact');
});
