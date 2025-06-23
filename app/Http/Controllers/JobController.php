<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
// use Illuminate\Auth\Access\Gate;  // removed, not needed
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        $job = Job::with('employer')->latest()->Paginate(5);
        return view('jobs.index', ['jobs' => $job]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }
    public function store()
    {
        //validation
        request()->validate([
            'title' => ['required', 'min:3', 'max:50'],
            'salary' => ['required'],
        ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => auth()->user()->employer->id,
            'description' => request('description'),
            'location' => '',
        ]);
        return redirect('/jobs');
    }
    public function edit(Job $job)
    {
        //Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3', 'max:50'],
            'salary' => ['required'],
        ]);

        //authorize (On hold......)

        $job->update([
            'title'       => request('title'),
            'salary'      => request('salary'),
            'description' => request('description'),
            'location'    => fake()->city() . ', ' . fake()->stateAbbr(),
        ]);

        //redirect to the job
        return redirect('/jobs/' . $job->id);
    }
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
