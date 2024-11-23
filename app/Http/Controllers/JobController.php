<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index () {
        $jobs = Job::all()->groupBy('featured');
        return view('job.index', [
            'featuredJobs' => $jobs[0],
            'unFeaturedJobs' => $jobs[1],
            'tags' => Tag::all(),
        ]);
    }

    public function create () {
        //
    }

    public function store () {
        //
    }

    public function update () {
        //
    }

    public function destroy () {
        //
    }
}
