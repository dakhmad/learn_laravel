<?php
// Updated
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\User;

// Belajar laravel di Laracast YouTube Channel
Route::get('/', function () {
    return view('laracast.home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->cursorPaginate(3);
    
    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});

// Create job
Route::get('/jobs/create', function() {
    return view('jobs.create');
});

// Show job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    
    // dd($id);
    return view('jobs.show', ['job' => $job]);
});

// Store job
Route::post('/jobs', function() {
    // validation
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

// Edit job
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    
    // dd($id);
    return view('jobs.edit', ['job' => $job]);
});

// Update job
Route::patch('/jobs/{id}', function ($id) {
    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // authorize (On hold...)

    // update the job
    $job = Job::findOrFail($id);
    
    // and persist
    // // cara sama
    // $job->title = request('title');
    // $job->salary = request('salary');
    // $job->save();

    // cara sama
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // redirect to the job page
    return redirect('/jobs/' . $job->id);
});

// Destroy job
Route::delete('/jobs/{id}', function ($id) {
    // authorize (On hold...)
    // delete the job

    // cara panjang
    // $job = Job::findOrFail($id);
    // $job->delete();

    // Alternative tercepat
    $job = Job::findOrFail($id)->delete();

    // redirect
    return redirect('/jobs');
});

Route::get('/users', function(){
    return view('laracast.users', [
        'users' => User::all(),
    ]);
});

Route::get('/users/{id}', function($id){
    $user = User::find($id);

    return view('laracast.user', ['user' => $user]);
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
