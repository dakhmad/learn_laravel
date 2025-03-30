<?php
// Updated
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

// Belajar laravel di Laracast YouTube Channel
// Route::get('/', function () {
//     return view('laracast.home');
// }); // panjang

// Cara singkat
Route::view('/','laracast.home');

// Operasi Job
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Route::get('/contact', function () {
//     return view('laracast.contact');
// }); // panjang caranya

Route::view('/contact', 'laracast.contact');

// Ini hanya uji coba
Route::get('/users', function(){
    return view('laracast.users', [
        'users' => User::all(),
    ]);
});

Route::get('/users/{id}', function($id){
    $user = User::find($id);

    return view('laracast.user', ['user' => $user]);
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
