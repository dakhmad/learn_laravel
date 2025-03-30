<?php
// Updated
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

// Catatan
/*
    Tips dalam route
    1. Akses model dan deklarasi variabel untuk simpan nilai model dapat dipindahkan tugas menjadi pengisi parameter function
    2. Menggunakan Controller
    3. Persingkat dengan Route::view('/alamat-rute', 'view.blade');
    4. Cek Route list di terminal. php artisan route:list --except-vendor
    5. Buat group controller dengan Route::controller(ExpController::class)->group(function(){ kumpulan rute disini });
*/

// Cara singkat
Route::view('/','laracast.home');
Route::view('/contact', 'laracast.contact');

// Operasi Job
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs',  'index');
    Route::get('/jobs/create',  'create');
    Route::get('/jobs/{job}',  'show');
    Route::post('/jobs',  'store');
    Route::get('/jobs/{job}/edit',  'edit');
    Route::patch('/jobs/{job}',  'update');
    Route::delete('/jobs/{job}',  'destroy');
});

// Ini hanya uji coba
// Route::get('/users', function(){
//     return view('laracast.users', [
//         'users' => User::all(),
//     ]);
// });

// Route::get('/users/{id}', function($id){
//     $user = User::find($id);

//     return view('laracast.user', ['user' => $user]);
// });

// Homework d5
// Route::view('/hw-d5', 'homework.d5.home');
// Route::view('/hw-d5-about', 'homework.d5.about');
// Route::view('/hw-d5-contact', 'homework.d5.contact');