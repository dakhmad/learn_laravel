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
Route::get('/jobs/{job}', function (Job $job) {
    // $job = Job::find($id); // cara panjang
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
Route::get('/jobs/{job}/edit', function (Job $job) {
    // $job = Job::find($id); // cara panjang
    
    // dd($id);
    return view('jobs.edit', ['job' => $job]);
});

// Update job
Route::patch('/jobs/{job}', function (Job $job) {
    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // authorize (On hold...)

    // update the job
    // $job = Job::findOrFail($id);
    
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
Route::delete('/jobs/{job}', function (Job $job) {
    // authorize (On hold...)
    // delete the job

    // cara panjang
    // $job = Job::findOrFail($id);
    // $job->delete();

    // Alternative tercepat
    // $job = Job::findOrFail($id)->delete();
    $job->delete();

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
