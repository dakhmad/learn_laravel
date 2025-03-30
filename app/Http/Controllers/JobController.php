<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->cursorPaginate(3);
    
    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        // $job = Job::find($id); // cara panjang
        return view('jobs.show', ['job' => $job]);
    }

    public function store() 
    {
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
    }

    public function edit(Job $job)
    {
        // $job = Job::find($id); // cara panjang
    
        // dd($id);
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job) 
    {
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
    }

    public function destroy(Job $job) 
    {
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
    }
}
