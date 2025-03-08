<?php
// Updated
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Belajar laravel di Laracast YouTube Cahnnel
Route::get('/', function() {
    return view('laracast.home');
});

Route::get('/jobs', function(){
    return view('laracast.jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000',
            ],
        ],    
    ]);
});

Route::get('/jobs/{id}', function($id){
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000',
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,000',
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000',
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    
    // dd($job);
    return view('laracast.job', ['job' => $job]);
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
