<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index () {
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');
        return view('job.index', [
            'featuredJobs' => $jobs[1],
            'unFeaturedJobs' => $jobs[0],
            'tags' => Tag::all(),
        ]);
    }

    public function create () {
        //
        return view('job.create');
    }

    public function store (Request $request) {
        //
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Part Time', 'Full Time'])],
            'url' => ['required', 'url:http,https'],
            'tags' => ['nullable'],
        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');

    }

    public function update () {
        //
    }

    public function destroy () {
        //
    }
}
